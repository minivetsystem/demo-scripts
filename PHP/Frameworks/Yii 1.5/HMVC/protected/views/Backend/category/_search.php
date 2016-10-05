<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_parent_id'); ?>
		<?php echo $form->textField($model,'cat_parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_title'); ?>
		<?php echo $form->textField($model,'cat_title',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_desc'); ?>
		<?php echo $form->textField($model,'cat_desc',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_thumb'); ?>
		<?php echo $form->textField($model,'cat_thumb',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_owner_id'); ?>
		<?php echo $form->textField($model,'cat_owner_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_creation_date'); ?>
		<?php echo $form->textField($model,'cat_creation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_hasoption'); ?>
		<?php echo $form->textField($model,'cat_hasoption',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_active'); ?>
		<?php echo $form->textField($model,'cat_active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->