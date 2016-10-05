<?php
$this->breadcrumbs=array(
	'Users'=>array('manage'),
	'Update',
);
?>
<?php /*?><?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form --><?php */?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'email',
		array(
			"name" => "role_id",
			"value" => 'isset($data->UserRole->role_name)?$data->UserRole->role_name:"SUPER ADMIN"'
		),
		'full_name',
		array(
			'name' => 'active',
			'value' => '($data->active=="1")?"YES":"NO"'
		),
		array(
			'class' => 'CButtonColumn',
			'template' => '{view}{update}{delete}',
			'buttons' => array (
				'update' => array (
					'visible' =>'$data->role_id != 0',
				),
				'delete' => array (
					'visible'=>'$data->role_id != 0',
				),
			),
			/*'viewButtonUrl'=>'Yii::app()->createUrl("/controllername/view", array("id" => $data["id"]))',
			'deleteButtonUrl'=>'($data["role_id"]==0)?"":Yii::app()->createUrl("/users/delete", array("id" =>  $data["id"]))',
			'updateButtonUrl'=>'($data["role_id"]==0)?"":Yii::app()->createUrl("/users/update", array("id" =>  $data["id"]))',*/
		),
	),
)); 
?>
