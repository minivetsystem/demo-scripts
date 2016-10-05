<?php
$this->breadcrumbs=array(
	'Category'=>array('category/manage'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'Create Category', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php /*?><?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form --><?php */?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cat_id',
		/*'cat_thumb',*/
		array(
			'name'=>'cat_parent_id',       
			'type' => 'raw',        
            'value'=> function($data,$row){
						return isset($row->CategoryParent->cat_title)?$row->CategoryParent->cat_title:$data->findParentTitle($data->cat_parent_id);
						//return ;
					},
        ),
		/*array(
			'name'=>'cat_parent_id',       
			'type' => 'raw',        
            'value'=> function($data,$row){
						return $data->findParentTitle($data->cat_parent_id);
					},
        ),*/
		'cat_title',
		array(
			'name'=>'cat_desc',       
			'type' => 'raw',        
            'value'=> function($data,$row){						
						return $data->getTrimDesc($data->cat_desc);
					},
        ),
		array(
			'name'=>'cat_owner_id',       
			'type' => 'raw',        
            'value'=> function($data,$row){
						return $data->findOwnerName($data->cat_owner_id);
			},
        ),
		/*
		'cat_creation_date',
		'cat_hasoption',
		'cat_active',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
