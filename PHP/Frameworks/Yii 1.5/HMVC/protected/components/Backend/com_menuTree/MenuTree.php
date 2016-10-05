<?php
/**
  *  Author :: Pritam Dalal
  *  Company :: Liz Infotech Pvt. Ltd.
  *  Generates all available links in Backend
  **/
Yii::import('application.components.Backend.com_menuTree.MenuException',true);
Yii::import('application.components.Backend.com_menuTree.MenuLabels',true);
class MenuTree extends MenuException {
	
	public $menuTree;
	public $htmlOptions;
	public $WebEnd = 'Backend';
	public $DIR_SEPERATOR = '/';
	public $declaredClasses;
	public $returnData;
	public $returnMode = 'html';
	public $liAttributes;
	public $exceptionArr;
	public $exceptionControllerArr;
	
	public function init() {
		$this->exceptionArr = parent::init();
		$this->exceptionControllerArr = parent::controllerException();
		$this->superAdmincontrollerException = parent::superAdmincontrollerException();
		$this->menulabels = MenuLabels::init();
		$this->menuIcons = MenuLabels::iconController();
		$this->iconEvents = MenuLabels::iconEvents();

		$this->declaredClasses = get_declared_classes();
		$this->menuTree = array();
		$i = 0;
		$this->htmlOptions = array('class'=>'headermenu');
		$this->returnData = CHtml::openTag('ul',$this->htmlOptions)."\n";
		$this->getControllerMethods(glob(Yii::getPathOfAlias('application.controllers') ."/Backend/*Controller.php"));
		$this->returnData .= CHtml::closeTag('ul');
		
		if($this->returnMode != 'html') {
			//print_r($this->menuTree);
			return $this->menuTree;
		}
		else
		 return $this->returnData;
	}
	
	public function getExceptionArr() {
		return $this->exceptionArr;
	}
	
	public function getControllerMethods($pattern,$mode = 'array') {
		
		$count = 0;
		foreach ( $pattern as $controller){
		  
		  $eachControllerMethods = array();
		  $eachName = str_replace(Yii::getPathOfAlias('application.controllers') .$this->DIR_SEPERATOR.$this->WebEnd.$this->DIR_SEPERATOR,"",$controller);
		  $class = basename($controller, ".php");
		  
		  if(Yii::app()->user->role!='0') {
			  if(in_array($class,$this->exceptionControllerArr)) {
				  continue;
			  }
		  } else {
			  if(in_array($class,$this->superAdmincontrollerException)) {
				  continue;
			  }
		  }
		  
		  if (!in_array($class, $this->declaredClasses)) {
			Yii::import("application.controllers." .$this->DIR_SEPERATOR.$this->WebEnd.$this->DIR_SEPERATOR. $class, true);
		  }
		  $reflection = new ReflectionClass($class); 
		  $exceptModule = array('actions');
		  $methods = $reflection->getMethods();
		  $j = 0;

		  foreach(get_class_methods($class) as $eachMethod) {
			  
			 if( preg_match('/action[A-Z]*/',$eachMethod) && !in_array($eachMethod,$exceptModule) ) {
				 				
				$eachMethodArr = array();
				//$labelMethod = $this->menulabels[str_replace('Controller.php','',$eachName)][str_replace('action','',$eachMethod)];
				
				if(isset($this->menulabels[str_replace('Controller.php','',$eachName)][str_replace('action','',$eachMethod)]) && $this->menulabels[str_replace('Controller.php','',$eachName)][str_replace('action','',$eachMethod)] != '') {
					$eachMethodArr['label'] = $this->menulabels[str_replace('Controller.php','',$eachName)][str_replace('action','',$eachMethod)];
				}
				else
					$eachMethodArr['label'] = str_replace('action','',$eachMethod);
					
				$eachMethodArr['url'] = 'http://'.Yii::app()->request->getServerName().Yii::app()->createUrl(strtolower(str_replace('Controller.php','',$eachName)).$this->DIR_SEPERATOR.strtolower(str_replace('action','',$eachMethod)));
				//icon of event
				
				$eachMethodArr['icon'] = isset($this->iconEvents[str_replace('Controller.php','',$eachName)][str_replace('action','',$eachMethod)])?$this->iconEvents[str_replace('Controller.php','',$eachName)][str_replace('action','',$eachMethod)]:'icon-file';
				
				$eachControllerMethods[$j++] = $eachMethodArr;
				
			 }
			 
		  }		  
			 
		  if(Yii::app()->controller->id==strtolower(str_replace('Controller.php','',$eachName)))
		  	$this->liAttributes = array('class'=>'current');
		  else
		    $this->liAttributes = array('class'=>'list');
			
		  $aTagAttr = array('href'=>Yii::app()->createUrl(strtolower(str_replace('Controller.php','',$eachName))));
		  
		  $this->returnData .= CHtml::openTag('li',$this->liAttributes).
		  						CHtml::openTag('a',$aTagAttr).
								Yii::t('BACKENDMENU_ITEMS',str_replace('Controller.php','',$eachName)).
								'<span class="icon icon-pencil"></span>'.
								CHtml::closeTag('a').
								CHtml::closeTag('li');		  		  
		  
		  $this->menuTree[$count++] = array('label'=>str_replace('Controller.php','',$eachName), 'icon'=>$this->menuIcons[str_replace('Controller.php','',$eachName)], 'url'=>Yii::app()->createUrl(strtolower(str_replace('Controller.php','',$eachName))), 'type'=>'class','items'=>$eachControllerMethods);
		  //$this->menuTree[str_replace('Controller.php','',$eachName)] = $eachControllerMethods;
		}
	}
}