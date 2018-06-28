<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skills extends Backend_Controller {
    
    private $MSG;

    function __construct() {
        parent::__construct();
        
        // loading the neccessary models
        $this->load->model('skill_model', 'skillModel');
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
        
        $_contentData['skills'] = $this->skillModel->get_all_skills();
        $this->_pageData['_TITLE'] = 'Manage Skills';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/skills/manage', $_contentData, TRUE);
        
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
                     'field'   => 'name',
                     'label'   => 'Name',
                     'rules'   => 'trim|required|min_length[2]|is_unique[skills.skill_name]|xss_clean'
                  ),
               array(
                     'field'   => 'percent',
                     'label'   => 'Percentage',
                     'rules'   => 'trim|required|xss_clean'
                  ),
               array(
                     'field'   => 'exp',
                     'label'   => 'Exp. Years',
                     'rules'   => 'trim|required|xss_clean'
                  )
            );

        $this->form_validation->set_rules($config);
            
        if ($this->input->post('create_skill')) {
            if ($this->form_validation->run()) {
                // get account data from form
                $tbData = array();
                foreach($this->input->post() AS $field => $value){
                    $tbData['skill_'.$field] = $value;
                }
                
                unset($tbData['skill_create_skill']);
                unset($tbData['skill_submit']);
                
                // pass the new skill data to model to insert into DB
                if ($this->skillModel->create($tbData)) {        
                    // success
                    $this->session->set_flashdata('create_skill_success', $this->lang->line('backend_skill_create_success'));
                    redirect('admin/skills/manage');
                } else {
                    $errors = $this->skillModel->get_error_message();
                    $this->setMsg($errors);
                }                
            }
        }
        
        $this->_pageData['_TITLE'] = 'Add New skill';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/skills/create', '', TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function edit($sId)
	{
		$this->update($sId);
	}
    
    public function update($sId)
	{
		if (!$this->userauth->is_logged_in() 
            && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        
        $_skillDetails = $this->skillModel->get_skill_by('skill_id', $sId);
        
        if ($this->input->post('update_skill')) {
            
            if($this->input->post('name') != $_skillDetails['skill_name']) {
               $_isUnique =  '|is_unique[skills.skill_name]';
            } else {
               $_isUnique =  '';
            }
            
            $config = array(
               array(
                     'field'   => 'name',
                     'label'   => 'Name',
                     'rules'   => "trim|required|min_length[2]$_isUnique|xss_clean"
                  ),
               array(
                     'field'   => 'percent',
                     'label'   => 'Percentage',
                     'rules'   => 'trim|required|xss_clean'
                  ),
               array(
                     'field'   => 'exp',
                     'label'   => 'Exp. Years',
                     'rules'   => 'trim|required|xss_clean'
                  )
            );

            $this->form_validation->set_rules($config);
            
            if ($this->form_validation->run()) {
                // get skill data from form
                $tbData = array();
                foreach($this->input->post() AS $field => $value){
                    $tbData['skill_'.$field] = $value;
                }
                
                unset($tbData['skill_update_skill']);
                unset($tbData['skill_submit']);
                
                // pass the skill data to model to update into DB
                if ($this->skillModel->update($tbData)) {        
                    // success
                    $this->session->set_flashdata('update_skill_success', $this->lang->line('backend_skill_update_success'));
                    redirect('admin/skills/manage');
                } else {
                    $errors = $this->skillModel->get_error_message();
                    $this->setMsg($errors);
                }
            }
        }        
        
        $this->_pageData['_TITLE'] = 'Edit Skill';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/skills/update', $_skillDetails, TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function delete($sId)
	{
		if($this->skillModel->delete($sId)){
		  $this->session->set_flashdata('delete_skill_success', $this->lang->line('backend_skill_delete_success'));
		} else {
		  $this->session->set_flashdata('delete_skill_failure', $this->lang->line('backend_action_failure'));
		}
        redirect('admin/skills/manage');
	}
}

/* End of file skills.php */
/* Location: ./application/modules/admin/controllers/skills.php */