<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Education extends Backend_Controller {
    
    private $MSG;

    function __construct() {
        parent::__construct();
        
        // loading the neccessary models
        $this->load->model('education_model', 'educationModel');
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
        
        $_contentData['educations'] = $this->educationModel->get_all_educations();
        $this->_pageData['_TITLE'] = 'Manage Educations';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/education/manage', $_contentData, TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function create()
	{
        if (!$this->userauth->is_logged_in() 
            && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        
        $config = array(
               array(
                     'field'   => 'qualification',
                     'label'   => 'Qualification',
                     'rules'   => 'trim|required|min_length[2]|is_unique[educations.education_qualification]|xss_clean'
                  ),
               array(
                     'field'   => 'university',
                     'label'   => 'University',
                     'rules'   => 'trim|required|min_length[3]|xss_clean'
                  ),
               array(
                     'field'   => 'state',
                     'label'   => 'State',
                     'rules'   => 'trim|required|min_length[3]|xss_clean'
                  )
            );

        $this->form_validation->set_rules($config);
            
        if ($this->input->post('create_education')) {
            if ($this->form_validation->run()) {
                // get account data from form
                $tbData = array();
                foreach($this->input->post() AS $field => $value){
                    $tbData['education_'.$field] = $value;
                }
                
                unset($tbData['education_create_education']);
                unset($tbData['education_submit']);
                
                // pass the new education data to model to insert into DB
                if ($this->educationModel->create($tbData)) {        
                    // success
                    $this->session->set_flashdata('create_education_success', $this->lang->line('backend_education_create_success'));
                    redirect('admin/education/manage');
                } else {
                    $errors = $this->skillModel->get_error_message();
                    $this->setMsg($errors);
                }                
            }
        }
        
        $this->_pageData['_TITLE'] = 'Add New Education';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/education/create', '', TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function edit($eId)
	{
		$this->update($eId);
	}
    
    public function update($eId)
	{
		if (!$this->userauth->is_logged_in() 
            && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        
        $_educationDetails = $this->educationModel->get_education_by('education_id', $eId);
        
        
        if ($this->input->post('update_education')) {
            
            if($this->input->post('qualification') != $_educationDetails['education_qualification']) {
               $_isUnique =  '|is_unique[educations.education_qualification]';
            } else {
               $_isUnique =  '';
            }
            
            $config = array(
               array(
                     'field'   => 'qualification',
                     'label'   => 'Qualification',
                     'rules'   => "trim|required|min_length[2]$_isUnique|xss_clean"
                  ),
               array(
                     'field'   => 'university',
                     'label'   => 'University',
                     'rules'   => 'trim|required|min_length[3]|xss_clean'
                  ),
               array(
                     'field'   => 'state',
                     'label'   => 'State',
                     'rules'   => 'trim|required|min_length[3]|xss_clean'
                  )
            );

            $this->form_validation->set_rules($config);
            
            if ($this->form_validation->run()) {
                // get education data from form
                $tbData = array();
                foreach($this->input->post() AS $field => $value){
                    $tbData['education_'.$field] = $value;
                }
                                
                unset($tbData['education_update_education']);
                unset($tbData['education_submit']);
                
                // pass the education data to model to update into DB
                if ($this->educationModel->update($tbData)) {        
                    // success
                    $this->session->set_flashdata('update_education_success', $this->lang->line('backend_education_update_success'));
                    redirect('admin/education/manage');
                } else {
                    $errors = $this->educationModel->get_error_message();
                    $this->setMsg($errors);
                }
            }
        }        
        
        $this->_pageData['_TITLE'] = 'Edit Education';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/education/update', $_educationDetails, TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function delete($eId)
	{
		if($this->educationModel->delete($eId)){
		  $this->session->set_flashdata('delete_education_success', $this->lang->line('backend_education_delete_success'));
		} else {
		  $this->session->set_flashdata('delete_education_failure', $this->lang->line('backend_action_failure'));
		}
        redirect('admin/education/manage');
	}
}

/* End of file education.php */
/* Location: ./application/modules/admin/controllers/education.php */