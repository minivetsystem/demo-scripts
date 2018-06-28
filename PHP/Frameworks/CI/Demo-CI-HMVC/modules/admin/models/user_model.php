<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    
    private $TABLE;
    private $MSG;
    
    function __construct() {
        parent::__construct();
        
        //$this->lang->load('msg');
        $this->TABLE = $this->db->dbprefix('admin');
    }
    
    /*
     * set message
     */
    private function set_error_msg($msg) {
        $this->MSG .= $msg . "\r\n";
    }
    
    /**
     * Get error message.
     * Can be invoked after any failed operation such as create/update/delete user.
     *
     * @return	string
     */
    function get_error_message() {
        return $this->MSG;
    }
    
    public function create_user($userData){
        if(isset($userData) && is_array($userData) && !empty($userData)){   
            // insert user details to database
            if($this->db->insert('admin', $userData)){
                return true;
            } else {
                $this->set_error_msg($this->lang->line('backend_register_error'));
                return false;
            }
        }
    }
    
    public function get_user_by($_colName, $_val){
        $_query = $this->db->get_where('about', array( "{$_colName}" => "{$_val}"));
        $_result = $_query->result();
        
        $result = array();
        foreach($_result[0] AS $key=>$val){
            $result[$key] = $val;
        }
        
        return $result;
    }
    
    public function update_profile($data){
        $this->db->where('about_id', $data['about_id']);
        
        if($this->db->update('about', $data)){
            return true;
        }
        
        return false;        
    }
    
}