<?php 
$this->pageTitle=Yii::app()->name . ' - Reset Password';
$this->breadcrumbs=array(
	'Reset Password',
);
?>

<h1>Reset Password</h1>


<div class="form">

<?php 
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'resetpassword-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); 
?>

<?php if(Yii::app()->user->hasFlash('recoveryMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
</div>
<?php else: ?>
	<?php echo CHtml::errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verifyPassword'); ?>
		<?php echo $form->passwordField($model,'verifyPassword'); ?>
		<?php echo $form->error($model,'verifyPassword'); ?>
	</div>

	<div class="row submit">
	<?php echo CHtml::submitButton("Save"); ?>
	</div>

<?php endif; ?>

<?php $this->endWidget(); ?>

</div><!-- form -->