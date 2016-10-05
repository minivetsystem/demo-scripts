<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */

$this->breadcrumbs=array(
	'Updatelists'=>array('manage'),
	$model->cat_id=>array('view','id'=>$model->cat_id),
	'Edit Table',
);
?>
<?php
$this->renderPartial('_addedittable', array('model'=>$model));
?>