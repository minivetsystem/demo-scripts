<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends Backend_Controller {
    
    private $MSG;

    function __construct() {
        parent::__construct();
        
        // loading the neccessary models
        $this->load->model('user_model', 'userModel');
    }

    private function setMsg($msg) {
        $this->MSG .= $msg . "\r\n";
    }
    
    public function profile()
	{
		if (!$this->userauth->is_logged_in() && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }       
        
        if ($this->input->post('update_profile')) {
            $config = array(
               array(
                     'field'   => 'initial',
                     'label'   => 'Initial',
                     'rules'   => 'trim|required|xss_clean'
                  ),
               array(
                     'field'   => 'fname',
                     'label'   => 'First Name',
                     'rules'   => 'trim|required|min_length[3]|max_length[100]|xss_clean'
                  ),
               array(
                     'field'   => 'mname',
                     'label'   => 'Middle Name',
                     'rules'   => 'trim|required|min_length[2]|max_length[100]|xss_clean'
                  ),
               array(
                     'field'   => 'lname',
                     'label'   => 'Last Name',
                     'rules'   => 'trim|required|min_length[3]|max_length[100]|xss_clean'
                  ),
               array(
                     'field'   => 'company',
                     'label'   => 'Company',
                     'rules'   => 'trim|required|min_length[8]|max_length[100]|xss_clean'
                  ),
               array(
                     'field'   => 'intro',
                     'label'   => 'About Me',
                     'rules'   => 'trim|required|min_length[15]|max_length[5000]|xss_clean'
                  ),
               array(
                     'field'   => 'email',
                     'label'   => 'Email',
                     'rules'   => 'trim|required|valid_email|max_length[100]|xss_clean'
                  ),
               array(
                     'field'   => 'phone',
                     'label'   => 'Phone',
                     'rules'   => 'trim|required|min_length[10]|xss_clean'
                  ),
               array(
                     'field'   => 'address',
                     'label'   => 'Address',
                     'rules'   => 'trim|required|min_length[5]|xss_clean'
                  ),
               array(
                     'field'   => 'city',
                     'label'   => 'City',
                     'rules'   => 'trim|required|min_length[3]|xss_clean'
                  ),
               array(
                     'field'   => 'state',
                     'label'   => 'State',
                     'rules'   => 'trim|required|min_length[2]|xss_clean'
                  )
            );

            $this->form_validation->set_rules($config);
            
            if ($this->form_validation->run()) {
                // get account data from form
                $tbData = array();
                foreach($this->input->post() AS $field => $value){
                    $tbData['about_'.$field] = $value;
                }
                
                //unset($tbData['about_intro']);
                unset($tbData['about__wysihtml5_mode']);
                unset($tbData['about_update_profile']);
                unset($tbData['about_submit']);
                
                // pass the new user data to model to insert into DB
                if ($this->userModel->update_profile($tbData)) {        
                    // success
                    $this->session->set_flashdata('update_account_success', $this->lang->line('backend_acc_update_success'));
                    redirect('admin/account/profile');
                } else {
                    $errors = $this->userModel->get_error_message();
                    $this->setMsg($errors);
                }
            }
            
            $_contentData['act_form'] = 'p2';
            
        } else {
            $_profileDetails = $this->userModel->get_user_by('about_id', $this->session->userdata('USERID'));
            $_contentData = $_profileDetails;
        }
        
        $this->_pageData['_TITLE'] = 'My Profile';
        $this->_pageData['_CONTENT'] = $this->load->view('admin/account/profile', $_contentData, TRUE);
        
        $this->template->render($this->_pageData);
	}
    
	public function manage()
	{
		if (!$this->userauth->is_logged_in() && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
        $this->template->write('TITLE', 'Dashbord');
        $this->template->write_view('CONTENT', 'dashboard', NULL, TRUE);
        $this->template->render();
	}
    
    public function create()
	{
        if ($this->input->post('register')) {
            
            $config = array(
               array(
                     'field'   => 'user_email',
                     'label'   => 'Email Id',
                     'rules'   => 'trim|required|valid_email|max_length[100]|is_unique[users.user_email]|xss_clean'
                  ),
               array(
                     'field'   => 'user_name',
                     'label'   => 'User Name',
                     'rules'   => 'trim|required|min_length[4]|max_length[100]|is_unique[users.user_name]|xss_clean'
                  ),
               array(
                     'field'   => 'user_password',
                     'label'   => 'Password',
                     'rules'   => 'trim|required|min_length[6]|max_length[25]|matches[cnf_password]|xss_clean'
                  ),
               array(
                     'field'   => 'cnf_password',
                     'label'   => 'Confirm Password',
                     'rules'   => 'trim|required|xss_clean'
                  ),
               array(
                     'field'   => 'tc',
                     'label'   => 'Terms of Servcies',
                     'rules'   => 'trim|required|xss_clean'
                  )
            );

            $this->form_validation->set_rules($config);
            
            $this->form_validation->set_message('is_unique', 'The %s is already exist');
            if ($this->form_validation->run()) {
                // get user data from form
                $tbData = array(
                    'user_name' => $this->input->post('user_name'),
                    'user_email' => $this->input->post('user_email'),
                    'user_password' => $this->input->post('user_password')
                );
                
                // pass the new user data to model to insert into DB
                if ($this->userModel->create_user($tbData)) {        
                    // success
                    $this->session->set_flashdata('create_user_success', $this->lang->line('backend_register_success'));
                    redirect('/admin/account/create');
                } else {
                    $errors = $this->userModel->get_error_message();
                    $this->setMsg($errors);
                }
            }
        }
        $data['errors'] = $this->MSG;
        $data['act_form'] = 'register';
        $this->load->view('account/login', $data);
	}
    
    public function update($uId)
	{
		$this->load->view('manage');
	}
    
    public function delete()
	{
		$this->load->view('manage');
	}
    
    public function login()
	{	   
		if ($this->userauth->is_logged_in() && $this->userauth->is_admin()) {
            redirect('admin/dashboard');
        }
        
        if ($this->input->post('login')) {
           $config = array(
               array(
                     'field'   => 'username',
                     'label'   => 'Username',
                     'rules'   => 'trim|required|max_length[100]|xss_clean'
                  ),
               array(
                     'field'   => 'password',
                     'label'   => 'Password',
                     'rules'   => 'trim|required|max_length[25]|xss_clean'
                  )
            );

            $this->form_validation->set_rules($config); 
        
            if($this->form_validation->run()){// validation ok
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                if ($this->userauth->login($username, $password)) {
                    // success
                    $this->session->set_flashdata('login_success', $this->lang->line('backend_login_success') . $this->userauth->get_user_name() . '!');
                    
                    // redirected to Dashboard
                    redirect('admin/dashboard');
                } else {
                    $errors = $this->userauth->get_error_message();
                    $this->setMsg($errors);
                }
            }
        }
        
        $data['errors'] = $this->MSG;
        $data['act_form'] = 'login';
        $this->load->view('account/login', $data);
	}
    
    public function logout()
	{
	   if (!$this->userauth->is_logged_in() && !$this->userauth->is_admin()) {
            redirect('admin/account/login');
        }
		
        if ($this->userauth->logout()) {        
            // success
            $this->session->set_flashdata('logout_success', $this->lang->line('backend_logout_success'));            
            
            // redirect to login page
            redirect('admin/account/login');
        } else {
            $errors = $this->userauth->get_error_message();
            $this->display_msg($errors);
        }
	}
    
    public function changePassword()
	{
		$this->load->view('login');
	}
    
    public function forgotPassword()
	{
		$this->load->view('login');
	}
    
    public function resetPassword()
	{
		$this->load->view('login');
	}
}

/* End of file user.php */
/* Location: ./application/modules/admin/controllers/user.php */