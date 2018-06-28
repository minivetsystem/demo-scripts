<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Frontend_Controller {
    
    function __construct() {
        parent::__construct();
        
        // loading the neccessary models
        $this->load->model('user_model', 'userModel');
        $this->load->model('work_model', 'workModel');
        $this->load->model('message_model', 'messageModel');
    }
    
	public function index()
	{
        $_contentData['profile_details'] = $this->userModel->get_user_by('about_id', 1);
        $_contentData['work_details'] = $this->workModel->get_all_work();
        
        $_pageData = array(
            "_TITLE" => 'Sam Mishra | Official',
            "_CONTENT" => $this->load->view('home', $_contentData, TRUE)
        );
        
        $this->template->render($_pageData);
	}
    
    public function send_message()
	{
       if($this->input->post('send_message')){
            // get message data from form
            $tbData = array();
            foreach($this->input->post() AS $field => $value){
                $tbData['message_'.$field] = $value;
            }
            
            $tbData['message_to'] = 'samatwork14@gmail.com'; 
            
            unset($tbData['message_send_message']);
            
            // pass the new message data to model to insert into DB
            if ($this->messageModel->create($tbData)) {        
                // success
                $_status = 'success';
                $_text = $this->lang->line('backend_message_send_success');
            } else {
                $_status = 'error';
                $_text = $this->lang->line('backend_action_failure');
            }
            
            echo json_encode(array('status'=>$_status, 'text'=>$_text)); 
       }
	}
}

/* End of file home.php */
/* Location: ./application/modules/home/controllers/home.php */