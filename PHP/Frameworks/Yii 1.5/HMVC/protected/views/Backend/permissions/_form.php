<?php
/* @var $this PermissionsController */
/* @var $model Permissions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permissions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'perm_title'); ?>
		<?php echo $form->textField($model,'perm_title',array('size'=>60,'maxlength'=>250,'class' => 'required')); ?>
		<?php echo $form->error($model,'perm_title'); ?>
	</div>

	<div class="row inline">
		<?php echo $form->labelEx($model,'CAN_CREATE'); ?>
		<?php echo $form->checkBox($model,'CAN_CREATE',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'CAN_CREATE'); ?>
	</div>

	<div class="row inline">
		<?php echo $form->labelEx($model,'CAN_READ'); ?>
		<?php echo $form->checkBox($model,'CAN_READ',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'CAN_READ'); ?>
	</div>

	<div class="row inline">
		<?php echo $form->labelEx($model,'CAN_UPDATE'); ?>
        <?php echo $form->checkBox($model,'CAN_UPDATE',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'CAN_UPDATE'); ?>
	</div>

	<div class="row inline">
		<?php echo $form->labelEx($model,'CAN_DELETE'); ?>
        <?php echo $form->checkBox($model,'CAN_DELETE',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'CAN_DELETE'); ?>
	</div>

	<div class="row inline">
		<?php echo $form->labelEx($model,'is_active'); ?>
        <?php echo $form->checkBox($model,'is_active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->