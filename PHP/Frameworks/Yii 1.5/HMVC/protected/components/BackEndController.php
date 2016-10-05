<?php
class BackEndController extends CController {
    public $layout='main_login';
    public $menu=array();
    public $breadcrumbs=array();
  	
    public function filters() {
        return array(
            'accessControl',
        );
    }
	
	public function init() {
		$this->loadRelatedAssets();
		
		if(isset(Yii::app()->user->role)) {
			if(isset(Yii::app()->user->role) && Yii::app()->user->role=='0') {
				//echo 'Admin';
			}
			elseif(Yii::app()->user->role!='0') {
				$declaredClasses = get_declared_classes();
				if(!in_array('MenuException',$declaredClasses)) {
					Yii::import("application.components.Backend.com_menuTree.MenuException", true);
				}
				if(in_array(ucfirst(Yii::app()->controller->id).'Controller',MenuException::controllerException())) {
					$this->redirect(Yii::app()->createUrl('/admin/login'));
				}
			}
		}
	}
	
	public function loadRelatedAssets() {
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->getBaseUrl(true).'/assets/default/Backend/'.$this->uniqueId.'/vstyle.css');
		return parent::init();
	}
	
	public function accessRules() {	
		if(isset(Yii::app()->user->role) && Yii::app()->user->role == "0") {
			$arr = array('index','error');   // give all access to admin
		}
		else {
			$arr = array('');          //  no access to other user
		}
		
		return array(
			array('allow', // allow authenticated user to perform these actions
				'users'=>array('*'),
				'actions'=>array('login'),
			),                   
			array('allow', // allow authenticated user to perform these actions
				'users'=>array('@'),
				'actions'=>$arr,
			),			
			array('deny',  // deny all users
				'users'=>array('?'),
				'deniedCallback'=>array($this,'goToLogin'),
			),			
		);
	}	
	
	public function goToLogin() {
		$url = Yii::app()->createUrl('/admin/login');
		$this->redirect($url);
	}

}