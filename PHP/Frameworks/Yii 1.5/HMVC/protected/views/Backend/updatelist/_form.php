<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'updatelistaddedit-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'list_title'); ?>
		<?php echo $form->dateField($model,'list_title',array('size'=>60,'maxlength'=>250,'class'=>'required')); ?>
		<?php echo $form->error($model,'list_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_desc'); ?>
		<?php echo $form->textArea($model,'list_desc',array('rows'=>6, 'cols'=>50,'class'=>'required')); ?>
		<?php echo $form->error($model,'list_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->checkBox($model,'is_active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->