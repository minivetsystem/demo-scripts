<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends Backend_Controller {
    
    private $MSG;

    function __construct() {
        parent::__construct();        
        
        // loading the neccessary models
        $this->load->model('message_model', 'messageModel');
        
        // loading the libraries
        $this->load->library('email');
    }

    private function setMsg($msg) {
        $this->MSG .= $msg . "\r\n";
    }
    
    public function index()
	{
		if (!$this->userauth->is_logged_in() 
            && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        
        $_contentData['messages'] = $this->messageModel->get_all_messages();
        // get total unread msgs count
        $_contentData['unread_msgs'] = count($this->messageModel->get_message_by('message_status','0',FALSE));
        
        $this->_pageData['_TITLE'] = 'Inbox';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/messages/inbox', $_contentData, TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function page()
	{
		if (!$this->userauth->is_logged_in() 
            && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        
        $_countMsgs = count($this->messageModel->get_all_messages());
        $_perPage = 25;
        
        //die(var_dump($this->uri->segment(4)));
        $_pageNo = $this->uri->segment(4);
        if (isset($_pageNo) && !empty($_pageNo)) { 
            $_page = $_pageNo; 
        } else { 
            $_page = 1; 
        }
        
        $_startFrom = ($_page-1) * $_perPage;
        $_totalPages = ceil($_countMsgs / $_perPage);
        
        $_contentData['page'] = $_page; 
        $_contentData['total_msgs'] = $_countMsgs; 
        $_contentData['total_pages'] = $_totalPages;        
        $_contentData['messages'] = $this->messageModel->get_paginated_messages($_startFrom,$_perPage);
        
        // get total unread msgs count
        $_contentData['unread_msgs'] = count($this->messageModel->get_message_by('message_status','0',FALSE));
        
        $this->_pageData['_TITLE'] = 'Inbox';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/messages/inbox', $_contentData, TRUE);
        
        $this->template->render($this->_pageData);
	}
    
    public function set_new_msgs_notification()
	{
		$_unReadMessages = $this->messageModel->get_message_by('message_status','0',FALSE);
        $_totalMsgs = count($_unReadMessages);
        if(count($_unReadMessages)>0){
            $type = 1;
            
            $_messageScroller = '<ul class="list-unstyled">';
            foreach($_unReadMessages AS $message){
                $_messageScroller .= '<li>
                    					<a href="/admin/messages/view/'.$message->message_id.'">
                    					<div class="row">
                    					<div class="col-xs-2"><img class="img-circle" src="assets/images/user-profile-1.jpg" alt=""></div>
                    					<div class="col-xs-10"><p><strong>'.$message->message_name.'</strong>: '.$message->message_subject.'...</p><p class="small"><i class="fa fa-clock-o"></i>&nbsp;'.get_timeago(strtotime($message->message_date)).' ago</p></div>
                    					</div>
                    					</a>
                    				</li>';
            }
            $_messageScroller .= '</ul>';
        } else {
            $type = 0;
        }
        
        echo json_encode(array('type'=>$type,'count'=>$_totalMsgs,'new_messages'=>$_messageScroller));
        
	}
    
    public function send()
	{
        if (!$this->userauth->is_logged_in() 
            && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "samatwork14@gmail.com"; 
        $config['smtp_pass'] = "yourpassword";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        $this->email->initialize($config);
        
        $this->email->from('samatwork14@gmail.com', 'Sam Mishra');
        $list = array('samatwork14@gmail.com');
        $this->email->to($list);
        $this->email->reply_to('samatwork14@gmail.com', 'Sam Mishra');
        $this->email->subject('This is an email test');
        $this->email->message('It is working. Great!');
        
        if($this->email->send()){
           // success
            $_status = 'success';
            $_text = $this->lang->line('backend_message_send_success');
        } else {
            $_status = 'error';
            $_text = $this->lang->line('backend_action_failure');
        }
        
        echo json_encode(array('status'=>$_status, 'text'=>$_text));     
	}
    
    public function edit($mId)
	{
		$this->update($mId);
	}
    
    public function update($mId)
	{
		
	}
    
    public function delete($mId)
	{
		$this->messageModel->delete($mId);
        
        redirect('admin/messages');
	}
}

/* End of file skills.php */
/* Location: ./application/modules/admin/controllers/skills.php */