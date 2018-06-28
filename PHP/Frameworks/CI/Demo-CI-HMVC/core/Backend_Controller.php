<?php (defined('BASEPATH')) or exit('No direct script access allowed');

class Backend_Controller extends MY_Controller {
    
    protected $_active;
    protected $_breadcrumb;    
    protected $_pageData;
    
    function __construct() {
        parent::__construct();
        
        //Get all menus for create breadcrumb
        $_allMenus = $this->advancedmenu->getMenus();
        
        $this->_breadcrumb = '<ul class="breadcrumb">';
        $this->_breadcrumb .= '<li><a href="/admin"></a></li>';
        if(strtolower($this->router->class) == 'dashboard' || strtolower($this->router->class) == 'messages'){
            $this->_breadcrumb .= '<li class="active">'.$_allMenus['backend'][strtolower($this->router->class)]['label'].'</li>';           
        } else {
            $this->_breadcrumb .= '<li><a href="/admin/'.strtolower($this->router->class).'/manage">'.ucwords($this->router->class).'</a></li>';        
            $this->_breadcrumb .= '<li class="active">'.$_allMenus['backend'][strtolower($this->router->class)]['sub_menus'][strtolower($this->router->method)]['label'].'</li>';
        }
        
        $this->_breadcrumb .= '</ul>';
        
        $this->_active  = strtolower($this->router->class).'/'.strtolower($this->router->method);
        
        $this->_pageData = array(
            '_LEFT_MENU' => $this->advancedmenu->generateMenusHtml('backend', $this->_active),
            '_BREAD_CRUMBS' => $this->_breadcrumb            
        );
        
        // logic for template
        $this->template->set_template('backend');
    }
}

/* End of file Backend_Controller.php */
/* Location: ./application/core/Backend_Controller.php */