<?php
/**
  *  Author :: Pritam Dalal
  *  Company :: Liz Infotech Pvt. Ltd.
  *
  **/
		
Yii::import('application.components.Backend.com_menuTree.MenuTree',true);

class SMenu extends MenuTree {
	
	public $items;
	public $htmlCode;	
	public $exceptArr;
	public $currController;
	
	public function init()
	{
		$this->returnMode = 'array';
		$this->items = parent::init();
		$this->exceptArr = parent::getExceptionArr();
	}
	
	public function run()
	{
		$this->renderMenuRecursive($this->items);
		echo $this->htmlCode;
		echo '<a class="togglemenu">&nbsp;</a>';
	}
	
	
	protected function renderMenuRecursive($items)
	{
		$count=0;
		$n=count($items);
		$htmlliOptions = array();
		
		if(isset($this->currController) && $this->currController!='' && (isset($item['type']) && $item['type'] != 'class') || !isset($item['type']))
		  $htmlUlOptions = array('class'=>$this->currController.'_sub');
		else
		  $htmlUlOptions = array();
		  
		$this->htmlCode .= CHtml::openTag('ul',$htmlUlOptions);
		if(!empty($items)) {
			foreach($items as $item) {
	
				if(isset($item['type']) && $item['type'] == 'class') {
					$this->currController = strtolower($item['label']);
					if(Yii::app()->controller->id==strtolower($item['label']))
					  $htmlliOptions = array('class'=>'current');
					else
					  $htmlliOptions = array('class'=>'');
				}
				$icon = isset($item['icon'])?$item['icon']:'icon-th-large';
				//icon-user
				$data = '<i class="'.$icon.'"></i>'.Yii::t('BACKENDMENU_ITEMS',$item['label']);
	
				if(isset($item['type']) && $item['type'] == 'class') {
					$AOptions = array('href'=>'#'.strtolower($item['label']).'_sub');
					
				}
				elseif(!isset($item['type']) || $item['type'] != 'class') {
					if(in_array(strtolower($item['label']),$this->exceptArr[$this->currController]))
					  continue;
						
					if(isset($item['url']))
					  $AOptions["href"] = $item['url'];
					
				}
				
				$this->htmlCode .= CHtml::openTag('li',$htmlliOptions).CHtml::openTag('a',$AOptions).$data.CHtml::closeTag('a');
				if(isset($item['type']) && $item['type'] == 'class') {
					$this->renderMenuRecursive($item['items']);
				}
				$this->htmlCode .= CHtml::closeTag('li');
			}
		}
		$this->htmlCode .= CHtml::closeTag('ul');
	} 
}