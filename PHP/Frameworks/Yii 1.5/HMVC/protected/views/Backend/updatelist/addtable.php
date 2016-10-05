<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */

$this->breadcrumbs=array(
	'Updatelists'=>array('manage'),
	'Add Table',
);
?>
<?php
$this->renderPartial('_addedittable', array('model'=>$model));
?>