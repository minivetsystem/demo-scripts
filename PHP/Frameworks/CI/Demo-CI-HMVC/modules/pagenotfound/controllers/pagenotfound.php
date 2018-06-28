<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagenotfound extends MY_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
	public function index()
	{
        $_userID = $this->session->userdata('USERID');
        $_link = (isset($_userID) AND !empty($_userID))?'/admin/dashboard':'/home';
        $_pageData = array(
            "_TITLE" => 'Page Not Found | Official',
            "_LINK" => $_link
        );
        
        $this->load->view('index', $_pageData);
	}
}

/* End of file home.php */
/* Location: ./application/modules/home/controllers/home.php */