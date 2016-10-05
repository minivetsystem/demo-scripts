<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->cat_id=>array('view','id'=>$model->cat_id),
	'Update',
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'categoryParents' => $categoryParents)); ?>