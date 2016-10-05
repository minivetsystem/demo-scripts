<?php
/* @var $this PermissionsController */
/* @var $data Permissions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('perm_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->perm_id), array('view', 'id'=>$data->perm_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perm_title')); ?>:</b>
	<?php echo CHtml::encode($data->perm_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAN_ADD_BIODATA')); ?>:</b>
	<?=($data->CAN_ADD_BIODATA=='1')?'YES':'NO'?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAN_LIST_BIODATA')); ?>:</b>
    <?=($data->CAN_LIST_BIODATA=='1')?'YES':'NO'?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAN_EDIT_BIODATA')); ?>:</b>
    <?=($data->CAN_EDIT_BIODATA=='1')?'YES':'NO'?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAN_ADD_UPDATELIST')); ?>:</b>
    <?=($data->CAN_ADD_UPDATELIST=='1')?'YES':'NO'?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAN_LIST_UPDATELIST')); ?>:</b>
    <?=($data->CAN_LIST_UPDATELIST=='1')?'YES':'NO'?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('CAN_EDIT_UPDATELIST')); ?>:</b>
    <?=($data->CAN_EDIT_UPDATELIST=='1')?'YES':'NO'?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
    <?=($data->is_active=='1')?'Active':'Inactive'?>
	<br />

</div>