<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	'Groups'=>array('manage'),
	'Manage',
);
?>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'groups-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'group_id',
		'group_title',
		'group_desc',
		array(
			"name" => "used_in",
			"type" => "raw",
			"value" => array($model,'listUsedInCategories'), 
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
