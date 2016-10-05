<?php
/* @var $this PermissionsController */
/* @var $model Permissions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'perm_id'); ?>
		<?php echo $form->textField($model,'perm_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perm_title'); ?>
		<?php echo $form->textField($model,'perm_title',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAN_ADD_BIODATA'); ?>
		<?php echo $form->textField($model,'CAN_ADD_BIODATA',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAN_LIST_BIODATA'); ?>
		<?php echo $form->textField($model,'CAN_LIST_BIODATA',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAN_EDIT_BIODATA'); ?>
		<?php echo $form->textField($model,'CAN_EDIT_BIODATA',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAN_ADD_UPDATELIST'); ?>
		<?php echo $form->textField($model,'CAN_ADD_UPDATELIST',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAN_LIST_UPDATELIST'); ?>
		<?php echo $form->textField($model,'CAN_LIST_UPDATELIST',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAN_EDIT_UPDATELIST'); ?>
		<?php echo $form->textField($model,'CAN_EDIT_UPDATELIST',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->