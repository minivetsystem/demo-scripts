<?php
$this->breadcrumbs=array(
	'Categories'=>array('manage'),
	$model->cat_id,
);

$this->menu=array(
	array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'Create Category', 'url'=>array('create')),
	array('label'=>'Update Category', 'url'=>array('update', 'id'=>$model->cat_id)),
	array('label'=>'Delete Category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cat_id',
		array(
			'name' => 'Parent Category',
			'value' => isset($model->CategoryParent->cat_title)?$model->CategoryParent->cat_title:'Main'
		),
		'cat_title',
		'cat_desc',
		'cat_creation_date',
		'cat_active',
	),
)); 
?>
