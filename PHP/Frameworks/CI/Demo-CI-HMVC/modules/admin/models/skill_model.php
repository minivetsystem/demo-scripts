<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skill_model extends CI_Model {
    
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
    
    public function create($skillData){
        if(isset($skillData) && is_array($skillData) && !empty($skillData)){   
            // insert skill details to database
            if($this->db->insert('skills', $skillData)){
                return true;
            } else {
                $this->set_error_msg($this->lang->line('backend_action_failure'));
                return false;
            }
        }
    }
    
    public function get_skill_by($_colName, $_val){
        $_query = $this->db->get_where('skills', array( "{$_colName}" => "{$_val}"));
        $_result = $_query->result();
        
        $result = array();
        foreach($_result[0] AS $key=>$val){
            $result[$key] = $val;
        }
        
        return $result;
    }
    
    public function update($data){
        $this->db->where('skill_id', $data['skill_id']);
        
        if($this->db->update('skills', $data)){
            return true;
        }
        
        return false;        
    }
    
    public function delete($skill_id){
        return $this->db->delete('skills', array('skill_id' => $skill_id)); 
    }
    
    public function get_all_skills(){
        $this->db->order_by('skill_id','DESC');
        $_query = $this->db->get('skills');
        $_result = $_query->result();
        
        return $_result;
    }
    
}