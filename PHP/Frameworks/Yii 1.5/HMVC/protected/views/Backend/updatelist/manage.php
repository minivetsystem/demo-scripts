<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */

$this->breadcrumbs=array(
	'Updatelists'=>array('manage'),
	'Manage',
);
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'updatelist-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'list_id',
		'list_title',
		'list_desc',
		'creation_date',
		array(
			"name" => "created_by",
			"value" => 'isset($data->OwnerInfo->full_name)?$data->OwnerInfo->full_name:"Administrator"'
		),
		'modify_date',
		array(
			"name" => "modified_by",
			"value" => 'isset($data->Modifier->full_name)?$data->Modifier->full_name:"Administrator"'
		),
		array(
			"name" => "is_active",
			"value" => '($data->is_active=="1")?"Active":"Inactive"'
		),
		array(
			'class' => 'CButtonColumn',
			'template' => '{managedata}{view}{update}{delete}',
			'buttons' => array(
				'managedata' => array(
					'label' => 'Manage Data',
					'url' => 'CHtml::normalizeUrl(array("updatelist/datalist?id=".$data->list_id))',
					'options'=>array("class"=>"ficon-database manage-data-but"),
				),
			),
		),
	),
)); ?>
<style type="text/css">
.grid-view .button-column {
	width:199px !important;
}
</style>