<?php
/* @var $this PermissionsController */
/* @var $model Permissions */

$this->breadcrumbs=array(
	'Permissions'=>array('manage'),
	$model->perm_id=>array('view','id'=>$model->perm_id),
	'Update',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>