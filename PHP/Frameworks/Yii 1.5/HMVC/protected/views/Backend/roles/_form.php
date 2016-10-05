<div class="form">
<?php 
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'roles-form',
	'enableAjaxValidation'=>false,
)); 
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
    <div id="access_list" class="row">
    <?
	$i=0;
	if($roleAccess && count($roleAccess)>0 && (!isset($roleAccess->isnewrecord) || $roleAccess->isnewrecord != '1')) {
		foreach($roleAccess as $eachAccess) {
		?>
        <div class="row">
            <div class="span6">
                <?php echo $form->labelEx($eachAccess, '['.$i.']category_id'); ?>
                <?php echo $form->dropDownList($eachAccess, '['.$i.']category_id', $categoryLIST, array('empty' => 'Choose A Category','class' => 'required'));?>
                <?php echo $form->error($eachAccess,'['.$i.']category_id'); ?>
            </div>
            <div class="span6">
                <?php echo $form->labelEx($eachAccess, '['.$i.']permission_id'); ?>
                <?php echo $form->dropDownList($eachAccess, '['.$i.']permission_id', $permissionLIST, array('empty' => 'Choose A Permission set','class' => 'required'));?>
                <?php echo $form->error($eachAccess, '['.$i.']permission_id'); ?>
            </div>
            <div class="clear"></div>
        </div>
        <?
		$i++;
		}
    } else {
		?>
        <div class="row">
            <div class="span6">
                <?php echo $form->labelEx($roleAccess, '[0]category_id'); ?>
                <?php echo $form->dropDownList($roleAccess, '[0]category_id', $categoryLIST, array('empty' => 'Choose A Category','class' => 'required'));?>
                <?php echo $form->error($roleAccess,'[0]category_id'); ?>
            </div>
            <div class="span6">
                <?php echo $form->labelEx($roleAccess, '[0]permission_id'); ?>
                <?php echo $form->dropDownList($roleAccess, '[0]permission_id', $permissionLIST, array('empty' => 'Choose A Permission set','class' => 'required'));?>
                <?php echo $form->error($roleAccess, '[0]permission_id'); ?>
            </div>
            <div class="clear"></div>
        </div>
        <?
	}
	?>
    </div>
    <div class="row">
    	<div id="accessSetTemplate" style="display:none; visibility:hidden; height:0px; width:0px;">
            <div class="row">
                <div class="span6">
                    <?php echo $form->labelEx($roleAccessTemplate, '[#COUNT#]category_id'); ?>
                    <?php echo $form->dropDownList($roleAccessTemplate, '[#COUNT#]category_id', $categoryLIST, array('empty' => 'Choose A Category','class' => 'required', 'disabled'=>'disabled'));?>
                    <?php echo $form->error($roleAccessTemplate,'[#COUNT#]category_id'); ?>
                </div>
                <div class="span6">
                    <?php echo $form->labelEx($roleAccessTemplate, '[#COUNT#]permission_id'); ?>
                    <?php echo $form->dropDownList($roleAccessTemplate, '[#COUNT#]permission_id', $permissionLIST, array('empty' => 'Choose A Permission set','class' => 'required', 'disabled'=>'disabled'));?>
                    <?php echo $form->error($roleAccessTemplate, '[#COUNT#]permission_id'); ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    	<div class="span9">
			<?
            echo CHtml::button('Add New Set', array('id' => 'addAccessSet','class'=>'btn btn-default right'));
            ?>
        	<div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="row">
		<?php echo $form->labelEx($model,'role_type'); ?>
        <?php echo ZHtml::enumDropDownList($model,'role_type', array('empty' => 'Choose A Role Type','class' => 'required'));?>
		<?php echo $form->error($model,'role_type'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'role_name'); ?>
		<?php echo $form->textField($model,'role_name',array('size'=>60,'maxlength'=>250,'class' => 'required')); ?>
		<?php echo $form->error($model,'role_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role_short_desc'); ?>
		<?php echo $form->textField($model,'role_short_desc',array('size'=>60,'maxlength'=>250,'class' => 'required')); ?>
		<?php echo $form->error($model,'role_short_desc'); ?>
	</div>

	<div class="row buttons">
    	<input type="hidden" id="accessCount" name="accessCount" value="<?=$i?>">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
