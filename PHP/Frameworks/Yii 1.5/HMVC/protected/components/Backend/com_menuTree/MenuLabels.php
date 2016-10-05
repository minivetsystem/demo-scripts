<?php
/**
  *  Author :: Pritam Dalal
  *  Company :: Liz Infotech Pvt. Ltd.
  *  Generates all menu Labels In Backend
  **/

class MenuLabels {
	
	
	public function init() {
		return
			array(
				'Admin'=>array('Index'=>'Dashboard','Language_editor'=>'Language editor','General_settings'=>'Settings'),
				'users'=>array('Create'=>'New','Manage'=>'List'),
				'Roles'=>array('Create'=>'New'),
				'Category'=>array('Index'=>'Tree','Create'=>'New','Manage'=>'List'),
				'Permissions'=>array('Create'=>'New','Manage'=>'List'),
				'Fields'=>array('Create'=>'New','Manage'=>'List'),
				'Groups'=>array('Create'=>'New','Manage'=>'List'),
				'Updatelist'=>array('Create'=>'New','Manage'=>'List'),
				'Biodatas'=>array('Create'=>'New','Manage'=>'List'),
			)
		;	
	}
	
	public function iconController() {
		return
			array(
				'Admin'=>'icon-align-right',
				'Users'=>'icon-user',
				'Roles'=>'icon-th-large',
				'Category'=>'icon-tags',
				'Permissions'=>'icon-bullhorn',
				'Fields'=>'icon-leaf',
				'Groups'=>'icon-briefcase',
				'Updatelist'=>'icon-hdd',
				'Biodatas'=>'icon-hdd',
			)
		;
	}
	
	public function iconEvents() {
		return
			array(
				'Admin'=>array('Index'=>'icon-signal ','Logout'=>'icon-off','General_settings'=>'icon-wrench','Changepassword'=>'icon-barcode'),
				'Users'=>array('Create'=>'icon-plus','Manage'=>'icon-list'),
				'Roles'=>array('Create'=>'icon-plus', 'Manage'=>'icon-list'),
				'Category'=>array('Index'=>'icon-move','Create'=>'icon-plus','Manage'=>'icon-list'),
				'Permissions'=>array('Create'=>'icon-plus','Manage'=>'icon-list'),
				'Fields'=>array('Create'=>'icon-plus','Manage'=>'icon-list'),
				'Groups'=>array('Create'=>'icon-plus','Manage'=>'icon-list'),
				'Updatelist'=>array('Create'=>'icon-plus','Manage'=>'icon-list'),
				'Biodatas'=>array('Create'=>'icon-plus','Manage'=>'icon-list'),
			)
		;
	}
	
	public function run() {
		
	}
}
