<?php
$this->breadcrumbs=array(
	'Users'=>array('manage'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
