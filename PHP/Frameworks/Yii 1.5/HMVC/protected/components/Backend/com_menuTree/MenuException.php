<?php
/**
  *  Author :: Pritam Dalal
  *  Company :: Liz Infotech Pvt. Ltd.
  *  Generates all available links in Backend
  **/

class MenuException {
	
	public function init() {
		return
			array(
				'admin'=>array('error','login'),
				'users'=>array('index','delete','update','view'),
				'category'=>array('delete','update','view','status','fields','saveorder'),
				'roles'=>array('index','delete','update','view'),
				'permissions'=>array('index','delete','update','view'),
				'fields'=>array('index','delete','update','view'),
				'groups'=>array('index','delete','update','view','addfield','deletefield'),
				'updatelist'=>array('index','delete','update','view','savecatupdatedata','addtable','edittable','datalist'),
				'biodatas'=>array('delete','update','view'),
			)
		;	
	}
	
	public function controllerException() {
		$exceptArr = array('users','category','roles','permissions','fields','groups');
		$exceptArr = array_map(function($word) { return ucfirst($word).'Controller'; }, $exceptArr);
		return $exceptArr;
	}
	
	
	public function superAdmincontrollerException() {
		$exceptArr = array('fields');
		$exceptArr = array_map(function($word) { return ucfirst($word).'Controller'; }, $exceptArr);
		return $exceptArr;
	}
	
	public function run() {
		
	}
}
