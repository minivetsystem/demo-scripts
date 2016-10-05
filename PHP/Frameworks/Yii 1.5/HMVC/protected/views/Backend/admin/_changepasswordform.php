<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'changepassword-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php if(Yii::app()->admin_user->hasFlash('success')): ?> 
    <div class="alert alert-success">
        <?php echo Yii::app()->admin_user->getFlash('success'); ?>
    </div>
	 
	<?php endif; ?>

	<div class="row">
		<?php echo $form->labelEx($model,'currentPassword'); ?>
		<?php echo $form->passwordField($model,'currentPassword',array('size'=>60,'maxlength'=>128,'class' => 'required')); ?>
		<?php echo $form->error($model,'currentPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'newPassword'); ?>
		<?php echo $form->passwordField($model,'newPassword',array('size'=>60,'maxlength'=>128,'class' => 'required')); ?>
		<?php //echo $form->error($model,'newPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'newPassword_repeat'); ?>
		<?php echo $form->passwordField($model,'newPassword_repeat',array('size'=>60,'maxlength'=>128,'class' => 'required')); ?>
		<?php //echo $form->error($model,'newPassword_repeat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Change Password'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->