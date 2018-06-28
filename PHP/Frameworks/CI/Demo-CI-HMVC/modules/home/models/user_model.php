<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @author Sam Mishra
 * 
 */
class User_model extends CI_Model {
    
    private $TABLE;
    private $MSG;
    
    function __construct() {
        parent::__construct();
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
    
}