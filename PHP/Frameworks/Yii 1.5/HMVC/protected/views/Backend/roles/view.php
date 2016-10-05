<?php
$this->breadcrumbs=array(
	'Roles'=>array('manage'),
	$model->role_id,
	'Details',
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'role_id',
		'role_name',
		'role_short_desc',
		'role_creation_date',
		/*array(
			'name' => 'role_perm_set_id',
			'value' => isset($model->RoleCategory->cat_title)?$model->RoleCategory->cat_title:'NA'
		),*/
		array(
			'name' => 'is_active',
			'value' => ($model->is_active=='1')?'YES':'NO'
		),
	),
)); ?>
