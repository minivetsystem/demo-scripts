<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_parent_id'); ?>
		<?php echo $form->dropDownList($model,'cat_parent_id', $categoryParents, array('encode' => false)); ?>
		<?php echo $form->error($model,'cat_parent_id'); ?>
        
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_title'); ?>
		<?php echo $form->textField($model,'cat_title',array('size'=>60,'maxlength'=>250,'class' => 'required')); ?>
		<?php echo $form->error($model,'cat_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_desc'); ?>
		<?php echo $form->textField($model,'cat_desc',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'cat_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_thumb'); ?>
		<?php echo $form->fileField($model,'cat_thumb',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'cat_thumb'); ?>
	</div>
	
    <?php if($model->isNewRecord!='1' && $model->cat_thumb!=''){ ?>
    <div class="row">
    	<label>&nbsp;</label>
         <?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/uploads/users/'.$model->cat_thumb,"cat_thumb",array("width"=>200)); ?>
    </div>
    <?php } ?>
    
    <?php if($model->isNewRecord=='1'){ ?>
		<?php echo $form->hiddenField($model,'cat_owner_id',array('value'=>Yii::app()->user->id)); ?>
	<?php } ?>
    
	<div class="row buttons">
    	<?php echo $form->hiddenField($model,'cat_order',array()); ?>
        <?php echo $form->hiddenField($model,'cat_color',array()); ?>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->