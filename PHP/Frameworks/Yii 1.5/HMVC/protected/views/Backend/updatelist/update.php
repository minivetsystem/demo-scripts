<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */

$this->breadcrumbs=array(
	'Updatelists'=>array('manage'),
	$model->list_id=>array('view','id'=>$model->list_id),
	'Update',
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>