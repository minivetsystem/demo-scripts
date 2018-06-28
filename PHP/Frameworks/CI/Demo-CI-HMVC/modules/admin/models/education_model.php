<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Education_model extends CI_Model {
    
    private $TABLE;
    private $MSG;
    
    function __construct() {
        parent::__construct();
        
        $this->TABLE = $this->db->dbprefix('skills');
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
    
    public function create($educationData){
        if(isset($educationData) && is_array($educationData) && !empty($educationData)){   
            // insert education details to database
            if($this->db->insert('educations', $educationData)){
                return true;
            } else {
                $this->set_error_msg($this->lang->line('backend_action_failure'));
                return false;
            }
        }
    }
    
    public function get_education_by($_colName, $_val){
        $_query = $this->db->get_where('educations', array( "{$_colName}" => "{$_val}"));
        $_result = $_query->result();
        
        $result = array();
        foreach($_result[0] AS $key=>$val){
            $result[$key] = $val;
        }
        
        return $result;
    }
    
    public function update($data){
        $this->db->where('education_id', $data['education_id']);
        
        if($this->db->update('educations', $data)){
            return true;
        }
        
        return false;        
    }
    
    public function delete($education_id){
        return $this->db->delete('educations', array('education_id' => $education_id)); 
    }
    
    public function get_all_educations(){
        $this->db->order_by('education_id','DESC');
        $_query = $this->db->get('educations');
        $_result = $_query->result();
        
        return $_result;
    }
    
}