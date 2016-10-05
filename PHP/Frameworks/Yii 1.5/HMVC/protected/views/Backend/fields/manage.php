<?php
/* @var $this FieldsController */
/* @var $model Fields */
$this->breadcrumbs=array(
	'Fields'=>array('manage'),
	'Manage',
);
?>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fields-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'field_id',
		'field_name',
		'field_type',
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
