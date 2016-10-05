<?php
/* @var $this PermissionsController */
/* @var $model Permissions */

$this->breadcrumbs=array(
	'Permissions'=>array('manage'),
	'Manage',
);
?>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'permissions-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'perm_id',
		'perm_title',
		array(
			"name" => "CAN_CREATE",
			"value" => '($data->CAN_CREATE=="1")?"YES":"NO"'
		),
		array(
			"name" => "CAN_READ",
			"value" => '($data->CAN_READ=="1")?"YES":"NO"'
		),
		array(
			"name" => "CAN_UPDATE",
			"value" => '($data->CAN_UPDATE=="1")?"YES":"NO"'
		),
		array(
			"name" => "CAN_DELETE",
			"value" => '($data->CAN_DELETE=="1")?"YES":"NO"'
		),
		array(
			"name" => "is_active",
			"value" => '($data->is_active=="1")?"Active":"Inactive"'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 
?>
