<?php
/* @var $this FieldsController */
/* @var $model Fields */

$this->breadcrumbs=array(
	'Fields'=>array('manage'),
	$model->field_id,
	'Details'
);
?>
<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'field_id',
		'field_name',
		'field_type',
		'field_html',
		array(
			'name' => 'is_active',
			'value' => ($model->is_active=='1')?'Active':'Inactive'
		)
	),
)); 
?>
