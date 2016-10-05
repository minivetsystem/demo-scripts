<?php
/* @var $this GroupsController */
/* @var $model Groups */
$this->breadcrumbs=array(
	'Groups'=>array('manage'),
	$model->group_id=>array('view','id'=>$model->group_id),
	'Update',
);
?>
<?php $this->renderPartial('_form', array('model'=>$model, 'AVAILABLE_FIELDS'=>$AVAILABLE_FIELDS, 'CUSTOM_FIELDS'=>$CUSTOM_FIELDS)); ?>
