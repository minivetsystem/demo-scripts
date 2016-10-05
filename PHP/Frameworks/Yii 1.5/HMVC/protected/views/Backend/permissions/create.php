<?php
/* @var $this PermissionsController */
/* @var $model Permissions */

$this->breadcrumbs=array(
	'Permissions'=>array('manage'),
	'Create',
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>