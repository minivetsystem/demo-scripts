<?php
$this->breadcrumbs=array(
	'User'=>array('manage'),
	$model->role_id=>array('view','id'=>$model->id),
	'Details',
);

$this->menu=array(
	array('label'=>'List user', 'url'=>array('index')),
	array('label'=>'Create user', 'url'=>array('create')),
	array('label'=>'Update user', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete user', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage user', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		array(
			'name' => 'Role',
			'value' => isset($model->UserRole->role_name)?$model->UserRole->role_name:'SUPER ADMIN'
		),
		'full_name',
		'profile_pic',
		'active',
	),
)); ?>
