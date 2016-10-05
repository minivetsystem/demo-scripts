<?php
/* @var $this BiodatasController */
/* @var $model Biodatas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'biodatas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <div class="row">
		<?php echo $form->labelEx($model,'biodata_title'); ?>
		<?php echo $form->textField($model,'biodata_title',array('size'=>60,'maxlength'=>250,'class'=>'required')); ?>
		<?php echo $form->error($model,'biodata_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference_code'); ?>
		<?php echo $form->textField($model,'reference_code',array('size'=>60,'maxlength'=>250,'class'=>'required')); ?>
		<?php echo $form->error($model,'reference_code'); ?>
	</div>

	<div class="row span11 mL0">
		<?php echo $form->labelEx($model,'biodata_desc'); ?>
		<?php echo $form->textArea($model,'biodata_desc',array('rows'=>6, 'cols'=>50, 'attr-conv'=>'editor','class'=>'required')); ?>
		<?php echo $form->error($model,'biodata_desc'); ?>
	</div>
	<div class="clear"></div>
    
	<div class="row span11 mL0">
		<?php echo $form->labelEx($model,'passport_photo'); ?>
		<?php echo $form->textArea($model,'passport_photo',array('attr-conv'=>'photoCrop','class'=>'required')); ?>
		<?php echo $form->error($model,'passport_photo'); ?>
	</div>
	<div class="clear"></div>
    
	<div class="row span11 mL0">
		<?php echo $form->labelEx($model,'maid_photo'); ?>
		<?php echo $form->textArea($model,'maid_photo',array('attr-conv'=>'photoCrop','class'=>'required')); ?>
		<?php echo $form->error($model,'maid_photo'); ?>
	</div>
	<div class="clear"></div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'maid_name'); ?>
		<?php echo $form->textField($model,'maid_name',array('size'=>60,'maxlength'=>250,'class'=>'required')); ?>
		<?php echo $form->error($model,'maid_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
		<?php echo $form->dateField($model,'dob',array('class'=>'required checkDate')); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'residence_address_home'); ?>
		<?php echo $form->textField($model,'residence_address_home',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'residence_address_home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'port_repatriated_to'); ?>
		<?php echo $form->textField($model,'port_repatriated_to',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'port_repatriated_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_no_home'); ?>
		<?php echo $form->textField($model,'contact_no_home',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'contact_no_home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education_level'); ?>
		<?php echo $form->textField($model,'education_level',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'education_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_of_siblings'); ?>
		<?php echo $form->textField($model,'number_of_siblings'); ?>
		<?php echo $form->error($model,'number_of_siblings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ages_of_children'); ?>
		<?php echo $form->textField($model,'ages_of_children',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'ages_of_children'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marital_status'); ?>
		<?php echo $form->textField($model,'marital_status',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'past_n_existing_illness'); ?>
		<?php echo $form->textField($model,'past_n_existing_illness',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'past_n_existing_illness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_illness'); ?>
		<?php echo $form->textField($model,'other_illness',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'other_illness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'physical_disabilities'); ?>
		<?php echo $form->textField($model,'physical_disabilities',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'physical_disabilities'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dietary_restrictions'); ?>
		<?php echo $form->textField($model,'dietary_restrictions',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'dietary_restrictions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'food_handling_pref'); ?>
		<?php echo $form->textField($model,'food_handling_pref',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'food_handling_pref'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preference_rest_day'); ?>
		<?php echo $form->textField($model,'preference_rest_day'); ?>
		<?php echo $form->error($model,'preference_rest_day'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_remark'); ?>
		<?php echo $form->textField($model,'other_remark',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'other_remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluation_of_skills'); ?>
		<?php echo $form->textArea($model,'evaluation_of_skills',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'evaluation_of_skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experience'); ?>
		<?php echo $form->textField($model,'experience',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observation'); ?>
		<?php echo $form->textField($model,'observation',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'observation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'availability_interview'); ?>
		<?php echo $form->textArea($model,'availability_interview',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'availability_interview'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->