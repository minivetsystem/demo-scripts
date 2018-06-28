<?php (defined('BASEPATH')) or exit('No direct script access allowed');

define('STATUS_ACTIVATED', '1');
define('STATUS_NOT_ACTIVATED', '0');

class UserAuth {

    private $ci;
    private $msg;

    function __construct() {
        $this->ci = & get_instance();
        $this->ci->lang->load('en');
    }

    /*
     * get message
     */
    private function get_msg($msg) {
        $this->msg .= $msg . "\r\n";
    }

    /*
     * display message
     */
    function display_msg() {
        return $this->msg;
    }

    /**
     * Login user on the site. Return TRUE if login is successful
     * (user exists and activated, password is correct), otherwise FALSE.
     *
     * @param	string	(email)
     * @param	string  (password)
     */
    function login($username, $password) {
        if ((strlen($username) > 0) AND (strlen($password) > 0)) {
            $TABLE = $this->ci->db->dbprefix('admin');
            $SQL = "SELECT * FROM {$TABLE} WHERE (admin_username = '{$username}' OR admin_email = '{$username}') AND admin_password = '{$password}'";
            $QUERY = $this->ci->db->query($SQL); 
            if ($QUERY->num_rows() > 0) { 
                // email and password ok
                $USER_DETAILS = $QUERY->result();
                $USER_DETAILS = $USER_DETAILS[0];
                
                $this->ci->session->set_userdata(array(
                        'USERID' => $USER_DETAILS->admin_id,
                        'USERNAME' => $USER_DETAILS->admin_username,
                        'USEREMAIL' => $USER_DETAILS->admin_email
                    ));
                return TRUE;
            } else {
                // fail - wrong credential
                $this->get_msg($this->ci->lang->line('backend_incorrect_password'));
            }
        }
        return FALSE;
    }

    /**
     * Logout user from the site
     *
     * @return	void
     */
    function logout() {
        $this->ci->session->unset_userdata('USERID');
        $this->ci->session->unset_userdata('USERNAME');
        $this->ci->session->unset_userdata('USEREMAIL');
        
        return true;
    }

    /**
     * Get user role_id
     *
     * @param int
     * @return int
     */
    /*function get_role_id($user_id = 1) {
        return 1; //should come from database
    }*/

    /**
     * Check if user logged in. Also test if user is activated or not.
     *
     * @param	bool
     * @return	bool
     */
    function is_logged_in() {
        if ($this->ci->session->userdata('USERID')) {
            return 1;
        }
        return 0;
    }

    /**
     * Get role name from role_id
     *
     * @param	string
     * @param	integer
     */
    /*function get_role_name($role_id = NULL) {
        if (!is_null($role_id)) {
            //get all roles from database
            $TABLE = $this->ci->db->dbprefix('roles');
            $SQL = "SELECT * FROM {$TABLE} WHERE role_id = '{$role_id}' AND role_status = '1'";
            $QUERY = $this->ci->db->query($SQL);
            if ($QUERY->num_rows() > 0) { 
                // role exist
                $ROLE_DETAILS = $QUERY->result();
                $ROLE_DETAILS = $ROLE_DETAILS[0];
                return $ROLE_DETAILS->role_name;
            } else {
                // fail - wrong credential
                $this->get_msg($this->ci->lang->line('backend_invalid_role'));
            }
        }
        return '';
    }*/

    /**
     * Get user_id
     *
     * @return	string
     */
    function get_user_id() {
        if ($this->ci->session->userdata('USERID')) {
            return $this->ci->session->userdata('USERID');
        }
        return -1;
    }

    /**
     * Get username
     *
     * @return	string
     */
    function get_user_name() {
        if ($this->ci->session->userdata('USERNAME')) {
            return $this->ci->session->userdata('USERNAME');
        }
        return '';
    }
    
    /**
     * Get user email
     *
     * @return	string
     */
    function get_user_email() {
        if ($this->ci->session->userdata('USEREMAIL')) {
            return $this->ci->session->userdata('USEREMAIL');
        }
        return '';
    }

    /**
     * check logged in user is admin
     *
     * @param	string
     * @return	bool
     */
    function is_admin() {
        /*if ($this->ci->session->userdata('user_role')) {
            if (strtolower(trim($this->ci->session->userdata('user_role'))) === '1') {
                return TRUE;
            }
        }
        return FALSE;*/
        return TRUE;
    }

    /**
     * Get error message.
     * Can be invoked after any failed operation such as login or register.
     *
     * @return	string
     */
    function get_error_message() {
        return $this->msg;
    }

}

/* End of file userAuth.php */
/* Location: ./application/libraries/userAuth.php */