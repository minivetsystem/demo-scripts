<?php
/* @var $this BiodatasController */
/* @var $model Biodatas */

$this->breadcrumbs=array(
	'Biodatases'=>array('manage'),
	$model->bio_id=>array('view','id'=>$model->bio_id),
	'Update',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>