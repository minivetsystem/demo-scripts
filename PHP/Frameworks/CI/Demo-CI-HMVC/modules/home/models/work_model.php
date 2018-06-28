<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @author Sam Mishra
 * 
 */
class Work_model extends CI_Model {
    
    private $TABLE;
    private $MSG;
    
    function __construct() {
        parent::__construct();
        
        $this->TABLE = $this->db->dbprefix('works');
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
    
    public function create($workData){
        if(isset($workData) && is_array($workData) && !empty($workData)){   
            // insert user details to database
            if($this->db->insert('works', $workData)){
                return true;
            } else {
                $this->set_error_msg($this->lang->line('backend_action_failure'));
                return false;
            }
        }
    }
    
    public function get_work_by($_colName, $_val){
        $_query = $this->db->get_where('works', array( "{$_colName}" => "{$_val}"));
        $_result = $_query->result();
        
        $result = array();
        foreach($_result[0] AS $key=>$val){
            $result[$key] = $val;
        }
        
        return $result;
    }
    
    public function update($data){
        $this->db->where('work_id', $data['work_id']);
        
        if($this->db->update('works', $data)){
            return true;
        }
        
        return false;        
    }
    
    public function delete($work_id){
        return $this->db->delete('works', array('work_id' => $work_id)); 
    }
    
    public function get_all_work(){
        $this->db->order_by('work_id','DESC');
        $_query = $this->db->get('works');
        $_result = $_query->result();
        
        return $_result;
    }
    
}