<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */

$this->breadcrumbs=array(
	'Updatelists'=>array('manage'),
	$model->list_id=>array('view','id'=>$model->list_id),
	'Manage Data',
);
?>
<?php
$this->renderPartial('_listdata', array('modeldata'=>$modeldata, 'updatelistid'=>$model->list_id, 'listdata'=>$listdata, 'previousRecCount'=>$previousRecCount,'listCollection'=>$listCollection));
?>