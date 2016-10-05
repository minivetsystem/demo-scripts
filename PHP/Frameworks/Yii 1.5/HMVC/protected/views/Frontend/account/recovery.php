<?php 
$this->pageTitle=Yii::app()->name . ' - Password Recovery';
$this->breadcrumbs=array(
	'Password Recovery',
);
?>

<h1>Recovery Password</h1>

<div class="form">

<?php 
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'passwordrecovery-form',
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

	<?php //echo CHtml::errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>	
	
	<div class="row submit">
		<?php echo CHtml::submitButton("Restore"); ?>
	</div>

<?php endif; ?>

<?php $this->endWidget(); ?>

</div><!-- form -->