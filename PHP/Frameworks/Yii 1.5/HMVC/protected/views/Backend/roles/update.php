<?php
$this->breadcrumbs=array(
	'Roles'=>array('manage'),
	$model->role_id=>array('view','id'=>$model->role_id),
	'Update',
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'roleAccess'=>$roleAccess, 'roleAccessTemplate'=>$roleAccessTemplate, 'categoryLIST'=>$categoryLIST, 'permissionLIST'=>$permissionLIST)); ?>