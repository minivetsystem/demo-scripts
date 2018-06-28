<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @author Sam Mishra
 * 
 */
class Message_model extends CI_Model {
    
    private $MSG;
    
    function __construct() {
        parent::__construct();
    }
    
    /*
     * set message
     */
    private function set_error_msg($msg) {
        $this->MSG .= $msg . "\r\n";
    }
    
    /**
     * Get error message.
     * Can be invoked after any failed operation such as create/update/delete work.
     *
     * @return	string
     */
    function get_error_message() {
        return $this->MSG;
    }
    
    public function create($messageData){
        if(isset($messageData) && is_array($messageData) && !empty($messageData)){   
            // insert user details to database
            if($this->db->insert('messages', $messageData)){
                return true;
            } else {
                $this->set_error_msg($this->lang->line('backend_action_failure'));
                return false;
            }
        }
    }
    
    public function get_message_by($_colName, $_val){
        $_query = $this->db->get_where('messages', array( "{$_colName}" => "{$_val}"));
        $_result = $_query->result();
        
        $result = array();
        foreach($_result[0] AS $key=>$val){
            $result[$key] = $val;
        }
        
        return $result;
    }
    
    public function update($data){
        $this->db->where('message_id', $data['message_id']);
        
        if($this->db->update('messages', $data)){
            return true;
        }
        
        return false;        
    }
    
    public function delete($message_id){
        return $this->db->delete('messages', array('message_id' => $message_id)); 
    }
    
    public function get_all_messages(){
        $this->db->order_by('message_id','DESC');
        $_query = $this->db->get('messages');
        $_result = $_query->result();
        
        return $_result;
    }
    
}