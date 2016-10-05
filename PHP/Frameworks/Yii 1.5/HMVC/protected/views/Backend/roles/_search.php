<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'role_id'); ?>
		<?php echo $form->textField($model,'role_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'role_name'); ?>
		<?php echo $form->textField($model,'role_name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'role_short_desc'); ?>
		<?php echo $form->textField($model,'role_short_desc',array('size'=>60,'maxlength'=>250)); ?>
	</div>
    
	<div class="row">
		<?php echo $form->label($model,'role_creation_date'); ?>
		<?php echo $form->textField($model,'role_creation_date'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->label($model,'role_perm_set_id'); ?>
		<?php echo $form->textField($model,'role_perm_set_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->