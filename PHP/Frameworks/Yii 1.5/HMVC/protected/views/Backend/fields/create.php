<?php
/* @var $this FieldsController */
/* @var $model Fields */

$this->breadcrumbs=array(
	'Fields'=>array('manage'),
	$model->field_id=>array('view','id'=>$model->field_id),
	'Create',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
