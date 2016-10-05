<?php
/* @var $this PermissionsController */
/* @var $model Permissions */

$this->breadcrumbs=array(
	'Permissions'=>array('index'),
	$model->perm_id,
	'Details'
);
?>

<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'perm_id',
		'perm_title',
		array(
			'name' => 'CAN_CREATE',
			'value' => ($model->CAN_CREATE=='1')?'YES':'NO'
		),
		array(
			'name' => 'CAN_READ',
			'value' => ($model->CAN_READ=='1')?'YES':'NO'
		),
		array(
			'name' => 'CAN_UPDATE',
			'value' => ($model->CAN_UPDATE=='1')?'YES':'NO'
		),
		array(
			'name' => 'CAN_DELETE',
			'value' => ($model->CAN_DELETE=='1')?'YES':'NO'
		),
		array(
			'name' => 'is_active',
			'value' => ($model->is_active=='1')?'Active':'Inactive'
		)
	),
)); 
?>