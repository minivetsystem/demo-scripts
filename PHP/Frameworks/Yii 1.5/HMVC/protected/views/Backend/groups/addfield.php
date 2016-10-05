<?php
/* @var $this GroupsController */
/* @var $model Groups */
?>
<fieldset class="cu_fieldset">
    <legend class="<?=(isset($POSTDATA['gd_id']) && $POSTDATA['gd_id'] != '')?'ficon-chevron-right':'ficon-chevron-down'?>"><?=isset($POSTDATA['field_label'])?$POSTDATA['field_label']:'Untitled'?><?='-'.$POSTDATA['field_type']?></legend>
    <div class="tool-bar"><a href="#" class="ficon-move">&nbsp;</a><a href="#" class="ficon-trash-1">&nbsp;</a></div>
    <div align="left" class="collapsible <?=(isset($POSTDATA['gd_id']) && $POSTDATA['gd_id'] != '')?'close':'open'?>">
        <div class="fields_holder span8">
            <label>Field Title</label><input name="Groupdata[<?=$POSTDATA['cu_index']?>][field_label]" type="text" placeholder="Field Label" class="required" value="<?=isset($POSTDATA['field_label'])?$POSTDATA['field_label']:''?>">
            <label>Field Name Attribute</label><input name="Groupdata[<?=$POSTDATA['cu_index']?>][field_name]" type="text" placeholder="Field name" class="required" value="<?=isset($POSTDATA['field_name'])?$POSTDATA['field_name']:''?>">
            <label>Field Desc</label><textarea name="Groupdata[<?=$POSTDATA['cu_index']?>][field_desc]" placeholder="Field description"><?=isset($POSTDATA['field_desc'])?$POSTDATA['field_desc']:''?></textarea>
        </div>
        <? if($POSTDATA['field_type']=='Checkboxes' || $POSTDATA['field_type']=='Dropdown') { ?>
        <div class="fields_holder span8">
        	<label>Value Stack</label><textarea class="required" name="Groupdata[<?=$POSTDATA['cu_index']?>][field_values]" placeholder="Field Value Stack"><?=isset($POSTDATA['field_values'])?$POSTDATA['field_values']:''?></textarea>
        </div>
        <? } ?>
        <div class="clear mB10">&nbsp;</div>
        <div class="panel panel-default span8">
            <div class="panel-heading"><h4 class="panel-title">Validations</h4></div>
            <div class="panel-body">
            	<select multiple class="chosen span11" name="Groupdata[<?=$POSTDATA['cu_index']?>][field_attr][]">
                	<option <?=(isset($POSTDATA['field_attr']) && in_array('required',$POSTDATA['field_attr']))?'selected':''?> value="required">Required</option>
                    <option <?=(isset($POSTDATA['field_attr']) && in_array('checkEmail',$POSTDATA['field_attr']))?'selected':''?> value="checkEmail">Check Email</option>
                    <option <?=(isset($POSTDATA['field_attr']) && in_array('checkNumber',$POSTDATA['field_attr']))?'selected':''?> value="checkNumber">Check Number</option>
                </select>
            </div>
        </div>
    </div>
    <?
	if(isset($POSTDATA['gd_id']) && $POSTDATA['gd_id'] != '') {
	?>
		<input type="hidden" name="Groupdata[<?=$POSTDATA['cu_index']?>][gd_id]" value="<?=$POSTDATA['gd_id']?>">
    <?
	}
	?>
    <input type="hidden" name="Groupdata[<?=$POSTDATA['cu_index']?>][sort_order]" value="<?=(isset($POSTDATA['sort_order']) && $POSTDATA['sort_order'] != '')?$POSTDATA['sort_order']:''?>">
    <input type="hidden" name="Groupdata[<?=$POSTDATA['cu_index']?>][field_id]" value="<?=$POSTDATA['field_id']?>">
</fieldset>
<script type="text/javascript">
$(function(){
	$('.chosen').chosen();
});
</script>