<?php
/* @var $this AdminController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Administrator Login';

?>

<div class="loginboxinner">
    <?php 
	$form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
		'validateOnSubmit'=>true,
        ),
    )); 
	?>

    <div class="logo">
        <h1><span><?php echo CHtml::encode(Yii::app()->name); ?></span> :: Administrator</h1>
    </div><!--logo-->
    <p>&nbsp;</p>
    <div class="nousername">
        <div class="loginmsg"><?php echo $form->error($model,'username'); ?></div>
    </div>
    
    <div class="nopassword">
        <div class="loginmsg"><?php echo $form->error($model,'password'); ?></div>
    </div>
                    
    <div class="username">
        <div class="usernameinner">
            <?php echo $form->textField($model,'username'); ?>
        </div>
    </div>
        
    <div class="password">
        <div class="passwordinner">
            <?php echo $form->passwordField($model,'password'); ?>
        </div>
    </div>
        
        <?php echo CHtml::submitButton('Login'); ?>
        
    <div class="keep"><div class="checker" id="uniform-undefined"><span><?php echo $form->checkBox($model,'rememberMe'); ?></span><?php echo $form->label($model,'rememberMe',array("style"=>'width:auto !important;vertical-align: top; line-height: 16px; margin-left: 6px;')); ?></div> </div>
    
    <?php $this->endWidget(); ?>
    
</div>

