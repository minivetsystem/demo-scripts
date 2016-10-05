<?php
$this->breadcrumbs=array(
	'Roles'=>array('manage'),
	'Create',
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'roleAccess'=>$roleAccess, 'roleAccessTemplate'=>$roleAccessTemplate, 'categoryLIST'=>$categoryLIST, 'permissionLIST'=>$permissionLIST)); ?>