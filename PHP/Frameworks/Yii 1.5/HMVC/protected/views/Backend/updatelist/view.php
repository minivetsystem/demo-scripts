<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */

$this->breadcrumbs=array(
	'Updatelists'=>array('manage'),
	$model->list_id,
	'View'
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'list_id',
		'list_title',
		'list_desc',
		'creation_date',
		'created_by',
		'modify_date',
		'modified_by',
		array(
			'name' => 'is_active',
			'value' => ($model->is_active=='1')?'Active':'Inactive'
		)
	),
)); ?>
