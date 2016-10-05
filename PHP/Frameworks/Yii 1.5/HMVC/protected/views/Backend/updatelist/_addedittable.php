<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'updatelist-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_title'); ?>
		<?php echo $form->textArea($model,'cat_title',array('attr-conv'=>'editor','rows'=>'20', 'cols'=>'30')); ?>
		<?php echo $form->error($model,'cat_title'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'show_columns'); ?><br>
		<?php echo $form->textField($model,'show_columns',array('class'=>'checkNumber','value'=>'3')); ?>
		<?php echo $form->error($model,'show_columns'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'cat_order'); ?><br>
		<?php echo $form->textField($model,'cat_order',array('size'=>60,'maxlength'=>250,'class'=>'required')); ?>
		<?php echo $form->error($model,'cat_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_color'); ?><br>
		<?php echo $form->textField($model,'cat_color',array('type'=>'color','size'=>60,'maxlength'=>250,'class'=>'required colorpicker-input')); ?>
		<?php echo $form->error($model,'cat_color'); ?>
	</div>
	
    <div class="row">
		<?php echo $form->labelEx($model,'table_remarks'); ?>
		<?php echo $form->textArea($model,'table_remarks',array('attr-conv'=>'editor','rows'=>'20', 'cols'=>'30')); ?>
		<?php echo $form->error($model,'table_remarks'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->