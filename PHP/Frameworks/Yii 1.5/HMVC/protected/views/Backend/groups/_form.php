<?php
/* @var $this GroupsController */
/* @var $model Groups */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groups-form',
	'enableAjaxValidation'=>false,
)); ?>
<div class="form row-fluid">
    <div class="left-side span7">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
    
        <?php echo $form->errorSummary($model); ?>
    
        <div class="row">
            <?php echo $form->labelEx($model,'group_title'); ?>
            <?php echo $form->textField($model,'group_title',array('size'=>60,'maxlength'=>250,'class'=>'required')); ?>
            <?php echo $form->error($model,'group_title'); ?>
        </div>
    
        <div class="row">
            <?php echo $form->labelEx($model,'group_desc'); ?>
            <?php echo $form->textArea($model,'group_desc',array('maxlength'=>250,'rows'=>6, 'cols'=>50,'class'=>'required')); ?>
            <?php echo $form->error($model,'group_desc'); ?>
        </div>
    
        <div class="row">
            <?php echo $form->labelEx($model,'used_in'); ?>
            <?php echo $form->dropDownList($model,'used_in', CHtml::listData(Category::model()->findAll(array('order' => 'cat_id')),'cat_id','categoryTitleText'), array('multiple'=>'true','class'=>'span9')); ?>
            <?php echo $form->error($model,'used_in'); ?>
        </div>
        
        <div id="custom-fields" class="row sortable">
        	<? 
			if(isset($CUSTOM_FIELDS) && $CUSTOM_FIELDS != '') {
				foreach($CUSTOM_FIELDS as $eachField) { 
					$this->renderPartial('addfield', array('POSTDATA'=>$eachField)); 
				}
			}
			?>
        </div>
    
        <div class="row">
            <?php echo $form->labelEx($model,'is_active'); ?>
            <?php echo $form->checkBox($model,'is_active',array('size'=>1,'maxlength'=>1)); ?>
            <?php echo $form->error($model,'is_active'); ?>
        </div>
    
        <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>
	</div>
    <div class="span5">
    	<? if(isset($AVAILABLE_FIELDS) && $AVAILABLE_FIELDS != '') { ?>
    	<div class="panel panel-default span8">
            <div class="panel-heading"><h4 class="panel-title">Available Fields</h4></div>
            <div class="panel-body">
                <?php echo $AVAILABLE_FIELDS; ?>
            </div>
        </div>
        <? } ?>
    </div>
</div>
<?php $this->endWidget(); ?>

<!-- form -->
<script type="text/javascript">
<? if(isset($AVAILABLE_FIELDS) && $AVAILABLE_FIELDS != '') { ?>
$.noConflict();
<? } ?>
$(function(){
	$(".sortable").sortable({ 
		handle: '.ficon-move',
		placeholder: "ui-state-highlight",
		stop: function(event, ui) {
			$(".sortable>fieldset").each(function(i, el){
				var ind = parseInt(i)+1; 
				$(el).find('input[name*="[sort_order]"]').val(ind);
			});
		}
	});
	$(document).on("click", "fieldset.cu_fieldset legend", function() {
		if($(this).parent().find('.collapsible').hasClass('open')) {
			$(this).removeClass('ficon-chevron-down');
			$(this).addClass('ficon-chevron-right');
			$(this).parent().find('.collapsible').removeClass('open');
			$(this).parent().find('.collapsible').addClass('close');
		}
		else {
			$(this).removeClass('ficon-chevron-right');
			$(this).addClass('ficon-chevron-down');
			$(this).parent().find('.collapsible').removeClass('close');
			$(this).parent().find('.collapsible').addClass('open');
		}
	});
	$(document).on("click", "fieldset.cu_fieldset a[href='#']", function(e) {
		e.preventDefault();
		if($(this).hasClass('ficon-trash-1')) {
			var $this = $(this);
			jConfirm("Are you sure you want to delete this Custom Field?","Delete Confirmation",function(r) {
				if(r != null && r) {
					if($this.parents('fieldset.cu_fieldset').find('input[name*="[gd_id]"]').val() != undefined) {
						$.ajax({
							'type': 'GET',
							'data': {
								'gd_id': $this.parents('fieldset.cu_fieldset').find('input[name*="[gd_id]"]').val(),
								'ajax': '1',
							},
							'beforeSend': function () {
								$.fn.waitingDialog({});
							},
							'success': function (data) {
								var json = $.parseJSON(data);
								if(json.returnData) {
									$.fn.closeWaitingDialog();
									$this.parents('fieldset.cu_fieldset').remove();
								}
							},
							'url': '/Backend/groups/deletefield',
							'cache': false
						});
					} else {
						$this.parents('fieldset.cu_fieldset').remove();
					}
				}
			});
		}
	});
	
	//$(".sortable").disableSelection();
	$('#Groups_used_in').chosen();
});
</script>