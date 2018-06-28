<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Works extends Backend_Controller {
    
    private $MSG;

    function __construct() {
        parent::__construct();
        
        // loading the neccessary models
        $this->load->model('work_model', 'workModel');
    }

    private function setMsg($msg) {
        $this->MSG .= $msg . "\r\n";
    }
    
    public function manage()
	{
		if (!$this->userauth->is_logged_in() 
            && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        
        $_contentData['works'] = $this->workModel->get_all_work();
        $this->_pageData['_TITLE'] = 'Manage Works';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/works/manage', $_contentData, TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function create()
	{
        if (!$this->userauth->is_logged_in() 
            && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        
        if ($this->input->post('create_work')) {
            if ($this->form_validation->run('admin', 'backend_create_work')) {
                // get account data from form
                $tbData = array();
                foreach($this->input->post() AS $field => $value){
                    $tbData['work_'.$field] = $value;
                }
                
                unset($tbData['work__wysihtml5_mode']);
                unset($tbData['work_create_work']);
                unset($tbData['work_submit']);
                
                // pass the new user data to model to insert into DB
                if ($this->workModel->create($tbData)) {        
                    // success
                    $this->session->set_flashdata('create_work_success', $this->lang->line('backend_work_create_success'));
                    redirect('admin/works/manage');
                } else {
                    $errors = $this->workModel->get_error_message();
                    $this->setMsg($errors);
                }                
            }
        }
        
        $this->_pageData['_TITLE'] = 'Add New Work';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/works/create', '', TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function edit($wId)
	{
		$this->update($wId);
	}
    
    public function update($wId)
	{
		if (!$this->userauth->is_logged_in() 
            && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        
        $_workDetails = $this->workModel->get_work_by('work_id', $wId);
        
        if ($this->input->post('update_work')) {
            $config = array(
               array(
                     'field'   => 'position',
                     'label'   => 'Position',
                     'rules'   => 'trim|required|min_length[5]|xss_clean'
                  ),
               array(
                     'field'   => 'company',
                     'label'   => 'Company',
                     'rules'   => 'trim|required|min_length[6]|max_length[100]|xss_clean'
                  ),
               array(
                     'field'   => 'responsibilities',
                     'label'   => 'Responsibilities',
                     'rules'   => 'trim|required|min_length[15]|max_length[5000]|xss_clean'
                  ),
               array(
                     'field'   => 'envs',
                     'label'   => 'Environments',
                     'rules'   => 'trim|required|min_length[3]|xss_clean'
                  ) 
            );

            $this->form_validation->set_rules($config);
            
            if ($this->form_validation->run()) {
                // get account data from form
                $tbData = array();
                foreach($this->input->post() AS $field => $value){
                    $tbData['work_'.$field] = $value;
                }
                
                unset($tbData['work__wysihtml5_mode']);
                unset($tbData['work_update_work']);
                unset($tbData['work_submit']);
                
                // pass the user data to model to update into DB
                if ($this->workModel->update($tbData)) {        
                    // success
                    $this->session->set_flashdata('update_work_success', $this->lang->line('backend_work_update_success'));
                    redirect('admin/works/manage');
                } else {
                    $errors = $this->workModel->get_error_message();
                    $this->setMsg($errors);
                }
            }
        }        
        
        $this->_pageData['_TITLE'] = 'Edit Work';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/works/update', $_workDetails, TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function delete($wId)
	{
		if($this->workModel->delete($wId)){
		  $this->session->set_flashdata('delete_work_success', $this->lang->line('backend_work_delete_success'));
		} else {
		  $this->session->set_flashdata('delete_work_failure', $this->lang->line('backend_action_failure'));
		}
        redirect('admin/works/manage');
	}
}

/* End of file works.php */
/* Location: ./application/modules/admin/controllers/works.php */