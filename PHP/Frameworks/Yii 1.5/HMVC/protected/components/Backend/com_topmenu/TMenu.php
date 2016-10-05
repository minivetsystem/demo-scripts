<?php
/**
  *  Author :: Pritam Dalal
  *  Company :: Liz Infotech Pvt. Ltd.
  *
  **/
Yii::import('application.components.Backend.com_menuTree.MenuTree',true);

class TMenu extends MenuTree {
  
    public function init()
	{
		$this->returnMode = 'html';
		echo parent::init();
	}
	public function run() {	
		
	}
}