<?php
$this->breadcrumbs=array(
	'Fields'=>array('manage'),
	$model->field_id=>array('view','id'=>$model->field_id),
	'Update',
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>