<?php
/* @var $this FieldsController */
/* @var $model Fields */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fields-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'field_name'); ?>
		<?php echo $form->textField($model,'field_name',array('class' => 'required')); ?>
		<?php echo $form->error($model,'field_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'field_type'); ?>
        <?php echo ZHtml::enumDropDownList($model,'field_type', array('empty' => 'Choose A field Type','class' => 'required'));?>
		<?php echo $form->error($model,'field_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'field_html'); ?>
		<?php echo $form->textArea($model,'field_html',array('rows'=>6, 'cols'=>50,'class' => 'required')); ?>
		<?php echo $form->error($model,'field_html'); ?>
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