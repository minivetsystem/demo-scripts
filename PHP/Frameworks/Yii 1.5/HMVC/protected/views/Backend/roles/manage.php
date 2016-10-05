<?php
$this->breadcrumbs=array(
	'Roles'=>array('manage'),
	'Manage',
);
?>

<?php /*?><?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ads-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form --><?php */?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'roles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'role_id',
		'role_type',
		'role_name',
		'role_short_desc',
		'role_creation_date',
		/*array(
			"name" => "role_perm_set_id",
			"value" => 'isset($data->RolePermission->perm_title)?$data->RolePermission->perm_title:"NA"'
		),
		array(
			"name" => "category_id",
			"value" => 'isset($data->RoleCategory->cat_title)?$data->RoleCategory->cat_title:"NA"'
		),*/
		array(
			"name" => "is_active",
			"value" => '($data->is_active=="1")?"YES":"NO"'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
