<?php
$this->breadcrumbs=array(
	'Categories'=>array('manage'),
	'Create',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'categoryParents' => $categoryParents)); ?>