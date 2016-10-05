<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */
/* @var $form CActiveForm */
?>

<div id="updatelist-form" class="form">
<?php if(Yii::app()->user->hasFlash('updatelistSaved')) { ?>
    <div class="alert alert-success">
		<?php echo Yii::app()->user->getFlash('updatelistSaved'); ?>
    </div>
<?php } ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'updatelistdata-form',
	'enableAjaxValidation'=>false,
	'action'=>'/Backend/updatelist/savecatupdatedata',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($modeldata); ?>

	<?php
	$alreadyShown=false;
	$allCategory = Category::model()->findAll(array("order"=>"cat_order", "condition"=>"cat_active='1'"));
	foreach($allCategory as $eachCat) {
		$allGroups = Groups::model()->findAll(array("order"=>"group_id ASC", "condition"=>"is_active='1' AND ( used_in='".$eachCat->cat_id."' OR used_in LIKE '%,".$eachCat->cat_id."' OR used_in LIKE '".$eachCat->cat_id.",%' OR used_in LIKE '%,".$eachCat->cat_id.",%')","distinct"=>true));
		$allCats = array();
		foreach($allGroups as $eachGroup) {
			$allCats[] = $eachGroup->group_id;
		}
		if(count($allCats)>0){
			$GroupData = Groupdata::model()->findAll(array("order"=>"group_id, sort_order", "condition"=>"is_active='1' AND group_id IN ('".trim(implode("','",$allCats),',')."')"));
			if(count($GroupData)>0) {
				if($eachCat->as_table=='1') {
				?>
                <div id="head-<?=$eachCat->cat_id?>" class="mB15">
                	<h4 class="mB15 left wd70p">
						<?=$eachCat->cat_title?>
                    </h4>
                    <h5 align="right" class="mB15 right wd25p" style="margin-top:1%;">
                    	<?
                        $this->widget('application.extensions.fancybox.EFancyBox', array(
							'target'=>'#editTable',
							'config'=>array('type'=>'iframe', 'width'=>'96%', 'height'=>'98%', 'onStart'=>"js:function() { return confirm('Are you sure you want to proceed. All unsaved changes will be lost?') }", 'onClosed'=>"js:function() { window.location.reload(); }", 'scrolling'=>'yes'),
						));
						echo CHtml::link('Edit Table',array('/updatelist/edittable?id='.$eachCat->cat_id),array('id' => 'editTable','class'=>'btn btn-warning'));
						?>
						<? 
						echo CHtml::ajaxButton(
							'Delete Table',
							Yii::app()->createUrl('category/delete'),
							array(
									'type'=>'GET',
									'update'=>'js:$(this).serialize()',
									'data'=>array('id'=>$eachCat->cat_id, 'this_id'=>'js:this.id','ajax'=>'1'),
									'beforeSend' => "js:function() {
										if(!confirm('Are you sure you want to Delete this table?')) {
											return false;
										}
									}",
									'success' => "js:function( data )
									{
										if(data == '1') {
											$('#head-".$eachCat->cat_id."').remove();
											$('#data-table-".$eachCat->cat_id."').remove();
											$('#TABLE_ROW_TEMPLATE-".$eachCat->cat_id."').remove();
											jAlert('Table deleted successfully..','Alert');
										}
									}"                                                                            
							),
							array('id' => 'deleteTable','class'=>'btn btn-danger')
						); ?>
                    </h5>
                    <div class="clear"></div>
                </div>
                <?
				}
				else {
				?>
                <h4 class="mB15">
					<?=$eachCat->cat_title?>
                </h4>
                <?
				}
				?>
				<table id="data-table-<?=$eachCat->cat_id?>" width="100%" border="0" cellspacing="0" cellpadding="0" class="stdtable stdtablecb overviewtable2">
                    <thead>
                        <tr>
                        	<?
							foreach($GroupData as $eachGroupData) {
								?>
								<th><?=$eachGroupData->field_label?></th>
								<?
							}
							?>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th colspan="<?=count($GroupData)?>">
                                <span class="right">
                                    <input type="button" data-target="savecat-<?=$eachCat->cat_id?>" class="btn btn-success" value="Save All &quot;<?=(strlen($eachCat->cat_title)<80)?strip_tags($eachCat->cat_title):'Table Data'?>&quot;">
                                    &nbsp;&nbsp;
                                    <input type="button" data-target="addcatdata-<?=$eachCat->cat_id?>" class="btn btn-info" value="Add &quot;<?=(strlen($eachCat->cat_title)<80)?strip_tags($eachCat->cat_title):'Table Data'?>&quot;">
                                </span>
                                <span class="clear"></span>
                           </th>
                        </tr>
                    </tfoot>
                    <tbody>
                    	<?
						$max = 0;
						foreach($GroupData as $eachGroupData) {
							$getField = Fields::model()->findByPk($eachGroupData->field_id);
							if($getField && count($getField)>0) {
								if($getField->field_type!='INPUT_CHECKBOX' && $getField->field_type!='INPUT_RADIO') {
									$SQL="SELECT * FROM tbl_updatelistdata WHERE category_id='".$eachCat->cat_id."' AND list_id='".$_GET['id']."' AND group_id='".$eachGroupData->group_id."' AND group_data_id='".$eachGroupData->gd_id."' AND field_id='".$eachGroupData->field_id."'";
									$list= Yii::app()->db->createCommand($SQL)->queryAll();
									if($max<count($list)) {
										$max = count($list);
									}
								}
							}
						}
						if($max>0) {
							for($i=0;$i<$max;$i++) {
								?>
                                <tr>
                                <?
								$count = 0;
								foreach($GroupData as $eachGroupData) {
									$hiddenField = '';
									$getField = Fields::model()->findByPk($eachGroupData->field_id);
									if($getField && count($getField)>0) {
										$SQL="SELECT * FROM tbl_updatelistdata WHERE category_id='".$eachCat->cat_id."' AND list_id='".$_GET['id']."' AND group_id='".$eachGroupData->group_id."' AND group_data_id='".$eachGroupData->gd_id."' AND field_id='".$eachGroupData->field_id."' LIMIT ".$i.",1";
										$list= Yii::app()->db->createCommand($SQL)->queryAll();
										$eachVal = array();
											if(count($list)>0) {
												$eachVal = $list[0];
											} else {
												$eachVal = array(
													'category_id' => $eachCat->cat_id,
													'group_id' => $eachGroupData->group_id,
													'group_data_id' => $eachGroupData->gd_id,
													'data_value' => '',
												);
											}
											$fieldHtml = $getField->field_html;
											$fieldName = 'Groupdata['.$eachVal['category_id'].']['.$eachVal['group_id'].']['.$eachVal['group_data_id'].']['.$i.']';
											$eachGroupData = Groupdata::model()->findByPk($eachVal['group_data_id']);
											if($getField->field_type != 'TEXTAREA' && $getField->field_type != 'WYSIWYG') {
												if($getField->field_type=='INPUT_CHECKBOX') {
													$valparam = ' value="1"';
													if($eachVal['data_value']=='1') {
														$valparam .= ' checked="checked"';
														$hiddenField = '<input name="'.$fieldName.'" value="0" type="hidden" disabled="disabled">';
													} else {
														$hiddenField = '<input name="'.$fieldName.'" value="0" type="hidden">';
													}
													$fieldHtml = str_replace('>',' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldName.'" class="'.str_replace(',',' ',$eachGroupData->field_attr).'"'.$valparam.'>', $fieldHtml);
												}
												elseif($getField->field_type=='INPUT_CHECKBOXES') {
													$thisValues = array();
													if($eachVal['data_value']) {
														$thisValues = explode(',',$eachVal['data_value']);
													}
													list($class,$other) = explode('::',$eachGroupData->field_values);
													list($method,$query) = explode('->',$other);
													$modl = new $class;
													$res = $modl->model();
													$start = strstr($query, '(');
													$end = strrchr($query, ')');
													if($end && $start && $start<$end) {
														$fieldHTML1 = '';
														$attr = str_replace('findAll(array(','',$query);
														$attr = str_replace('))','',$attr);
														$attrExp = explode('=>',$attr);
														if(count($attrExp)==2) {
															$atts = array(str_replace('"','',$attrExp[0])=>str_replace('"','',$attrExp[1]));
														} else {
															$atts = '';
														}
														$values = $res->findAll($atts);
														$ind = 0;
														foreach($values as $eachV) {
															$xtra = in_array($eachV->role_id,$thisValues)?'checked="checked"':'';
															$fieldHTML1 .= str_replace('>',$xtra.' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldName.'['.$ind.']" class="'.str_replace(',',' ',$eachGroupData->field_attr).'" value="'.$eachV->role_id.'"><label for="'.$fieldName.'['.$ind.']">'.$eachV->role_name.'</label>', $fieldHtml);
															$ind++;
														}
														$fieldHtml = $fieldHTML1;
													}
												}
												else {
													$fieldHtml = str_replace('>',' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldName.'" class="'.str_replace(',',' ',$eachGroupData->field_attr).'" value="'.$eachVal['data_value'].'">', $fieldHtml);
												}
											}
											else {
												$fieldHtml = str_replace('></',' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldName.'" class="'.str_replace(',',' ',$eachGroupData->field_attr).'">'.$eachVal['data_value'].'</', $fieldHtml);
											}
										$count++;
										$deleteICON = '';
										if($count == count($GroupData)) {
											$deleteICON = '<a class="ficon-cancel-1 delete-row-but" href="#delete-row" class="btn">&nbsp;</a> ';
										}
										?>
										<td><?=$fieldHtml.$hiddenField.$deleteICON?></td>
										<?
									}
								}
								?>
                                <input type="hidden" name="recordcount[<?=$eachCat->cat_id?>][<?=$i?>]" value="1"/>
                                </tr>
                                <?
							}
						}
						if($max<=0) {
						?>
                        <tr>
							<?
						}
							$count = 0;$TABLE_ROW_TEMPLATE = '';
                            foreach($GroupData as $eachGroupData) {
                                $getField = Fields::model()->findByPk($eachGroupData->field_id);
                                if($getField && count($getField)>0) {
									{
										$hiddenField = '';
										$field = $getField->field_html;
										$fieldName = 'Groupdata['.$eachCat->cat_id.']['.$eachGroupData->group_id.']['.$eachGroupData->gd_id.']['.$max.']';
										if($getField->field_type=='TEXTAREA' || $getField->field_type=='WYSIWYG') {
											$field = str_replace('></',' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldName.'" class="'.str_replace(',',' ',$eachGroupData->field_attr).'"></', $field);
										}
										elseif($getField->field_type=='INPUT_CHECKBOXES') {
											list($class,$other) = explode('::',$eachGroupData->field_values);
											list($method,$query) = explode('->',$other);
											$modl = new $class;
											$res = $modl->model();
											$start = strstr($query, '(');
											$end = strrchr($query, ')');
											if($end && $start && $start<$end) {
												$fieldHTML = '';
												$attr = str_replace('findAll(array(','',$query);
												$attr = str_replace('))','',$attr);
												$attrExp = explode('=>',$attr);
												if(count($attrExp)==2) {
													$atts = array(str_replace('"','',$attrExp[0])=>str_replace('"','',$attrExp[1]));
												} else {
													$atts = '';
												}
												$values = $res->findAll($atts);
												$ind = 0;
												foreach($values as $eachV) {
													$fieldHTML .= str_replace('>',' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldName.'['.$ind.']" class="'.str_replace(',',' ',$eachGroupData->field_attr).'" value="'.$eachV->role_id.'"><label for="'.$fieldName.'['.$ind.']">'.$eachV->role_name.'</label>', $field);
													$ind++;
												}
												$field = $fieldHTML;
											}
										}
										else {
											$valparam = '';
											if($getField->field_type=='INPUT_CHECKBOX' || $getField->field_type=='INPUT_RADIO') {
												$valparam = ' value="1"';
											}
											if($getField->field_type=='INPUT_CHECKBOX') {
												$hiddenField = '<input name="'.$fieldName.'" value="0" type="hidden">';
											}
											$field = str_replace('>',' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldName.'" class="'.str_replace(',',' ',$eachGroupData->field_attr).'"'.$valparam.'>', $field);
										}
										$count++;
										$deleteICON = '';
										if($count == count($GroupData)) {
											$deleteICON = '<a class="ficon-cancel-1 delete-row-but" href="#delete-row" class="btn">&nbsp;</a> ';
										}
									}
									//Add Row Calculation//
									$hiddenFieldTemplate = '';
									$fieldTemplate = $getField->field_html;
									$fieldNameTemplate = 'Groupdata['.$eachCat->cat_id.']['.$eachGroupData->group_id.']['.$eachGroupData->gd_id.'][#COUNT#]';
									if($getField->field_type=='TEXTAREA' || $getField->field_type=='WYSIWYG') {
										$fieldTemplate = str_replace('></',' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldNameTemplate.'" class="'.str_replace(',',' ',$eachGroupData->field_attr).'" disabled="disabled"></', $fieldTemplate);
									}
									elseif($getField->field_type=='INPUT_CHECKBOXES') {
										list($class,$other) = explode('::',$eachGroupData->field_values);
										list($method,$query) = explode('->',$other);
										$modl = new $class;
										$res = $modl->model();
										$start = strstr($query, '(');
										$end = strrchr($query, ')');
										if($end && $start && $start<$end) {
											$fieldHTML = '';
											$attr = str_replace('findAll(array(','',$query);
											$attr = str_replace('))','',$attr);
											$attrExp = explode('=>',$attr);
											if(count($attrExp)==2) {
												$atts = array(str_replace('"','',$attrExp[0])=>str_replace('"','',$attrExp[1]));
											} else {
												$atts = '';
											}
											$values = $res->findAll($atts);
											$ind = 0;
											foreach($values as $eachV) {
												$fieldHTML .= str_replace('>',' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldNameTemplate.'['.$ind.']" class="'.str_replace(',',' ',$eachGroupData->field_attr).'" value="'.$eachV->role_id.'"><label for="'.$fieldNameTemplate.'['.$ind.']">'.$eachV->role_name.'</label>', $fieldTemplate);
												$ind++;
											}
											$fieldTemplate = $fieldHTML;
										}
									}
									else {
										$valparam = '';
										if($getField->field_type=='INPUT_CHECKBOX' || $getField->field_type=='INPUT_RADIO') {
											$valparam = ' value="1"';
										}
										if($getField->field_type=='INPUT_CHECKBOX') {
											$hiddenFieldTemplate = '<input name="'.$fieldNameTemplate.'" value="0" type="hidden" disabled="disabled">';
										}
										$fieldTemplate = str_replace('>',' placeholder="'.$eachGroupData->field_label.'" name="'.$fieldNameTemplate.'" class="'.str_replace(',',' ',$eachGroupData->field_attr).'"'.$valparam.' disabled="disabled">', $fieldTemplate);
									}
									$TABLE_ROW_TEMPLATE .= '<td>'.$fieldTemplate.$hiddenFieldTemplate.$deleteICON.'</td>';
									if($max<=0) {
									?>
									<td><?=$field.$hiddenField.$deleteICON?></td>
									<?
									}
                                }
                            }
							if($max<=0) {
                            ?>
                            <input type="hidden" name="recordcount[<?=$eachCat->cat_id?>][<?=$max?>]" value="1"/>
                        </tr>
                        	<?
							}
							?>
                    </tbody>
                </table>
                <table id="TABLE_ROW_TEMPLATE-<?=$eachCat->cat_id?>" style="display:none;height:0px;width:0px"><tbody><tr><?=$TABLE_ROW_TEMPLATE?></tr></tbody></table>
                <? if($eachCat->as_table=='1' && $alreadyShown==false) { ?>
                    <div class="row buttons">
                        <p align="right">
                        <?
						$alreadyShown=true;
                        $this->widget('application.extensions.fancybox.EFancyBox', array(
                            'target'=>'#addTable',
                            'config'=>array('type'=>'iframe','width'=>'96%','height'=>'98%', 'onStart'=>"js:function() { return confirm('Are you sure you want to proceed. All unsaved changes will be lost?') }", 'onClosed'=>"js:function() { window.location.reload(); }",'scrolling'=>'yes',),
                        ));
                        echo CHtml::link('Add New Table',array('/updatelist/addtable'),array('id'=>'addTable', 'class'=>'btn btn-primary'));
                        ?>
                        </p>
                    </div>
                <? } ?>
                <?
			}
		}
	}
	?>
	
	<div class="row buttons">
        <input type="hidden" name="inputIndex" value="<?=($max+2)?>" id="inputIndex" />
    	<input type="hidden" name="catSave" value="" id="catSave" />
        <input type="hidden" name="listid" value="<?=$updatelistid?>" id="listid" />
        <input type="hidden" name="previousRecCount" value="<?=$previousRecCount?>" id="previousRecCount" />
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<style type="text/css">
div[id^="ui-tooltip-"] {
	display:none !important;	
}
</style>
