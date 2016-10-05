<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	'Groups'=>array('manage'),
	$model->group_id,
	'View'
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'group_id',
		'group_title',
		'group_desc',
		'used_in',
		array(
			'name' => 'is_active',
			'value' => ($model->is_active=='1')?'Active':'Inactive'
		)
	),
)); ?>
