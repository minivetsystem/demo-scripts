<?php
$this->breadcrumbs=array(
	'Admin'=>array('index'),
	'Change Password',
);
?>

<?php echo $this->renderPartial('_changepasswordform', array('model'=>$model)); ?>
