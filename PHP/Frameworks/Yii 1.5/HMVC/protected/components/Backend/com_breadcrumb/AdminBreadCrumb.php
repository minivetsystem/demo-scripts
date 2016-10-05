<?php
/**
  *  Author :: Pritam Dalal
  *  Company :: Liz Infotech Pvt. Ltd.
  *
  **/
Yii::import('zii.widgets.CBreadcrumbs');
class AdminBreadCrumb extends CBreadcrumbs {
 
    public $crumbs = array();
    public $delimiter = ' / ';
 
    public function run() {
        $this->render('adminBreadCrumb');
    }
 
}
?>