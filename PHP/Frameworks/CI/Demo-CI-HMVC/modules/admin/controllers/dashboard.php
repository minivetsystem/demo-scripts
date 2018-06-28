<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Backend_Controller {
    
    private $MSG;    

    function __construct() {
        parent::__construct();       
    }

    private function display_msg($msg) {
        $this->MSG .= $msg . "\r\n";
    }
    
	public function index()
	{
		if (!$this->userauth->is_logged_in()) {
            redirect('admin/account/login');
        }
        
        $this->_pageData['_TITLE'] = 'Dashbord';
        $this->_pageData['_CONTENT'] = $this->load->view('dashboard','',TRUE);
                
        $this->template->render($this->_pageData);
	}
 }
 
 /* End of file dashboard.php */
/* Location: ./application/modules/admin/controllers/dashboard.php */