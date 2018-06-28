<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdvancedMenu {
	
	/**
	 * Codeigniter reference 
	 */
	private $CI;
	
	/**
	 * Array that will hold the controller names and methods
	 */
	private $aControllers;
    
    private $menuTree;
    private $menuExceptions;
	private $htmlOptions;
	private $returnData;
	
	// Construct
	function __construct() {
		// Get Codeigniter instance 
		$this->CI = & get_instance();
		
		// Get all controllers 
		//$this->setControllers(); 
        
        $this->setMenus();
        $this->setMenuExceptions();       
	}
    
    /**
	 * Return all controllers and their methods
	 * @return array
	 */
	public function getControllers() {
		return $this->aControllers;
	}
	
	/**
	 * Set the array holding the controller name and actions
	 */
	public function setControllerActions($environment='frontend', $p_sControllerName, $p_aControllerActions) {
		$this->aControllers[$environment][$p_sControllerName] = $p_aControllerActions;
	}
	
	/**
	 * Search and set controller and methods.
	 */
	private function setControllers() {
		// Loop through the controller directory
		/*foreach(glob(APPPATH . 'modules/admin/controllers/*') as $controller) {
            // Get the name of the Controller
			$controllername = basename($controller, EXT);
            
            // Load the controller file in memory if it's not load already
			if(!class_exists($controllername)) {				
				$this->CI->load->file(APPPATH . 'modules/admin/controllers/user.php');
			}
            $class = new ReflectionClass($controllername);
            
            // Add the controllername to the array with its methods
			$cMethods = $class->getMethods();
            $cMenuActions = array();
			foreach($cMethods as $method) {
                if($method != '__construct' 
                    && $method != 'get_instance' 
                    && $method != $controllername 
                    && $method != 'index' 
                    && $method != 'edit' 
                    && $method != 'update' ) {
                    $cMenuActions[] = $method;
                }
			}
            $this->setControllerActions('backend', $controllername, $cMenuActions);
        }*/
	}
    
    /**
	 * 
	 */
	public function setMenuExceptions() {
	   return $this->menuExceptions = array('login','index','profile','edit','delete','messages');
    }
    
    /**
	 * get menus.
	 */
	public function getMenus() {
	   return $this->menuTree;
    }
    
    /**
	 * set menus.
	 */
	private function setMenus() {
		$this->menuTree =  array(
                'frontend' => array(),
                'backend' => array(
                        'dashboard' => array(
                            'label' => 'Dashboard',
                            'icon'  => 'fa fa-dashboard',
                            'sub_menus' => array(),
                        ),
                        'messages' => array(
                            'label' => 'Mails',
                            'icon'  => 'fa fa-envelope',
                            'sub_menus' => array(),
                        ),
                        'account' => array(
                            'label' => 'Account',
                            'icon'  => 'fa fa-users',
                            'sub_menus' => array(
                                    'login' => array(
                                            'label' => 'Login',
                                            'icon'  => 'fa fa-key',
                                        ),
                                    'create' => array(
                                            'label' => 'Add User',
                                            'icon'  => 'fa fa-plus',
                                        ),
                                    'manage' => array(
                                            'label' => 'Manage Users',
                                            'icon'  => 'fa fa-users',
                                        ),
                                    'profile' => array(
                                            'label' => 'My Profile',
                                            'icon'  => 'fa fa-user',
                                        ),
                                ),
                        ),
                        'works' => array(
                            'label' => 'Works',
                            'icon'  => 'fa fa-suitcase',
                            'sub_menus' => array(                          
                                    'create' => array(
                                            'label' => 'Add Work',
                                            'icon'  => 'fa fa-plus',
                                        ),
                                    'edit' => array(
                                            'label' => 'Edit Work',
                                            'icon'  => 'fa fa-pencil',
                                        ),
                                    'delete' => array(
                                            'label' => 'Delete Work',
                                            'icon'  => 'fa fa-times',
                                        ),
                                    'manage' => array(
                                            'label' => 'Manage Works',
                                            'icon'  => 'fa fa-suitcase',
                                        ),
                                ),
                        ),
                        'skills' => array(
                            'label' => 'Skills',
                            'icon'  => 'fa fa-tags',
                            'sub_menus' => array(
                                    'create' => array(
                                            'label' => 'Add Skill',
                                            'icon'  => 'fa fa-plus',
                                        ),
                                    'edit' => array(
                                            'label' => 'Edit Skill',
                                            'icon'  => 'fa fa-pencil',
                                        ),
                                    'manage' => array(
                                            'label' => 'Manage Skills',
                                            'icon'  => 'fa fa-tags',
                                        ),
                                ),
                        ),
                        'portfolios' => array(
                            'label' => 'Portfolios',
                            'icon'  => 'fa fa-archive',
                            'sub_menus' => array(
                                    'manage' => array(
                                            'label' => 'Manage Portfolios',
                                            'icon'  => 'fa fa-archive',
                                        ),
                                ),
                        ),
                        'education' => array(
                            'label' => 'Educations',
                            'icon'  => 'fa fa-graduation-cap',
                            'sub_menus' => array(
                                    'create' => array(
                                            'label' => 'Add Education',
                                            'icon'  => 'fa fa-plus',
                                        ),
                                    'edit' => array(
                                            'label' => 'Edit Education',
                                            'icon'  => 'fa fa-pencil',
                                        ),
                                    'manage' => array(
                                            'label' => 'Manage Educations',
                                            'icon'  => 'fa fa-graduation-cap',
                                        ),
                                ),
                        ),
                        'blogs' => array(
                            'label' => 'Blogs',
                            'icon'  => 'fa fa-pencil',
                            'sub_menus' => array(
                                    'manage' => array(
                                            'label' => 'Manage Blogs',
                                            'icon'  => 'fa fa-pencil',
                                        ),
                                ),
                        ),
                    )
            );
	}
    
    /**
	 * Generate menus HTML.
	 */
	public function generateMenusHtml($ENV='frontend', $ACTIVE='dashboard') {
	   $ACTIVE = str_replace('/index', '', $ACTIVE);
	   if(stristr($ACTIVE, '/')){
	       list($actController, $actAction) = explode('/', $ACTIVE);
	   } else {
	       $actAction = $ACTIVE;
	   }
       
       if($ENV == 'frontend'){
            $this->returnData = '<ul class="nav navbar-nav">';
            
            $menuHtml = '';
            foreach($this->menuTree['frontend'] AS $menu_key => $menu){     
                
                if(count($menu['sub_menus'])>= 1){
                    $isActive = (isset($actController) && ($actController == $menu_key))?'active':'';                                        
                    $menuHtml .= '<li class="'.$isActive.'">';
                    $menuHtml .= '<a href="javascript:;" class="has-child no-link">'.$menu['label'].'</a>';
                    // START SUB MENUS
                    $menuHtml .= '<ul class="list-unstyled child-navigation" >';
                    foreach($menu['sub_menus'] AS $sub_menu_key => $sub_menu){
                        if(!in_array($sub_menu_key, $this->menuExceptions)){
                            $menuHtml .= '<li>';
                            $menuHtml .= '<a href="/'.$menu_key.'/'.$sub_menu_key.'">'.$sub_menu['label'].' </a>';
                            $menuHtml .= '</li>';                      
                        }                        
                    }
                    $menuHtml .= '</ul>';
                    // END SUB MENUS
                    
                    $menuHtml .= '</li>';
                    $isActive = '';
                } else {
                    $isActive = ($actAction == $menu_key)?'active':'';
                    $menuHtml .= '<li class="'.$isActive.'">';
                    $menuHtml .= '<a href="/'.$menu_key.'">'.$menu['label'].' </a>';
                    $menuHtml .= '</li>';
                    $isActive = '';
                }                
            }
            $this->returnData .= $menuHtml;
            $this->returnData .= '</ul>';        
       } else {
            $this->returnData = '<ul id="side" class="nav navbar-nav side-nav">';
            $this->returnData .= '<li><h4>Navigation</h4></li>';
            
            $menuHtml = '';
            foreach($this->menuTree['backend'] AS $menu_key => $menu){     
                
                if(count($menu['sub_menus'])>= 1){
                    $isOpen = (isset($actController) && ($actController == $menu_key))?'open':'';
                    $isExpand = (isset($actController) && ($actController == $menu_key))?' aria-expanded="true"':'';
                    $isIn = (isset($actController) && ($actController == $menu_key))?'in':'';                    
                    $menuHtml .= '<li class="panel '.$isOpen.'">';
                    $menuHtml .= '<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#'.$menu_key.'"'.$isExpand.'><i class="'.$menu['icon'].'"></i>'.$menu['label'].' <span class="fa arrow"></span></a>';
                    // START SUB MENUS
                    $menuHtml .= '<ul class="nav collapse '.$isIn.'" id="'.$menu_key.'"'.$isExpand.'>';
                    foreach($menu['sub_menus'] AS $sub_menu_key => $sub_menu){
                        if(!in_array($sub_menu_key, $this->menuExceptions)){
                            $isActive = ($actAction == $sub_menu_key)?'active':'';
                            $menuHtml .= '<li>';
                            $menuHtml .= '<a href="/admin/'.$menu_key.'/'.$sub_menu_key.'" class="'.$isActive.'"><i class="'.$sub_menu['icon'].'"></i>'.$sub_menu['label'].' </a>';
                            $menuHtml .= '</li>';
                            $isActive = '';                            
                        }                        
                    }
                    $menuHtml .= '</ul>';
                    // END SUB MENUS
                    
                    $menuHtml .= '</li>';
                    $isOpen = '';
                } else {
                    $isActive = ($actAction == $menu_key)?'active':'';
                    $menuHtml .= '<li>';
                    $menuHtml .= '<a class="'.$isActive.'" href="/admin/'.$menu_key.'"><i class="'.$menu['icon'].'"></i>'.$menu['label'].' </a>';
                    $menuHtml .= '</li>';
                    $isActive = '';
                }                
            }
            $this->returnData .= $menuHtml;
            $this->returnData .= '</ul>';
	   }
       return $this->returnData;
    }
}
// EOF