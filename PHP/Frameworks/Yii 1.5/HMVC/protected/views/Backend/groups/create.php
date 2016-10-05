<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	'Groups'=>array('manage'),
	'Create',
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>