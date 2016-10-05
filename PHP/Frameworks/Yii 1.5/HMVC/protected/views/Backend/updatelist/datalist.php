<?php
/* @var $this UpdatelistController */
/* @var $model Updatelist */

$this->breadcrumbs=array(
	'Updatelists'=>array('manage'),
	$model->list_id=>array('view','id'=>$model->list_title),
	'Manage Data',
);
?>
<div id="updatelist-form" class="form">
<?php if(Yii::app()->user->hasFlash('updatelistSaved')) { ?>
    <div class="alert alert-success">
		<?php echo Yii::app()->user->getFlash('updatelistSaved'); ?>
    </div>
<?php } ?>

<?php
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'updatelistdata-form',
	'enableAjaxValidation'=>false,
	'action'=>'/Backend/updatelist/savecatupdatedata',
)); 
?>
<div class="row buttons">
    <p align="right">
    <?
    $alreadyShown=true;
    $this->widget('application.extensions.fancybox.EFancyBox', array(
        'target'=>'#addTable',
        'config'=>array('type'=>'iframe','width'=>'96%','height'=>'98%', 'onStart'=>"js:function() { return confirm('Are you sure you want to proceed. All unsaved changes will be lost?') }", 'onClosed'=>"js:function() { window.location.reload(); }",'scrolling'=>'yes',),
    ));
    echo CHtml::link('Add New Table',array('/updatelist/addtable?list_id='.$model->list_id),array('id'=>'addTable', 'class'=>'btn btn-primary'));
    ?>
    </p>
</div>
<?php
	$allCategory = Category::model()->findAll(array("order"=>"as_table, cat_order", "condition"=>"cat_active='1' AND cat_parent_id='1' AND (as_table_for='0' OR as_table_for='".$model->list_id."')"));
	foreach($allCategory as $eachCat) {
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
				echo CHtml::link('Edit Table',array('/updatelist/edittable?id='.$eachCat->cat_id),array('id' => 'editTable','class'=>'btn btn-warning mR10'));
				
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
				);
				?>
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
		
		//if it's not KIV and TAKENS
		if(!in_array($eachCat->cat_id,array('15','17'))) {
			?>
			<table id="data-table-<?=$eachCat->cat_id?>" width="100%" border="0" cellspacing="0" cellpadding="0" class="stdtable stdtablecb overviewtable2">
				<thead>
					<tr>
					<?
					if(!empty($model->FormFields[$eachCat->cat_id]['heading'])) {
						foreach($model->FormFields[$eachCat->cat_id]['heading'] as $eachHeading) {
							?>
							<th><?=$eachHeading?></th>
							<?
						}
					}
					?>
					</tr>
				</thead>
				<tfoot>
					<tr>
					   <th colspan="<?=count($model->FormFields[$eachCat->cat_id]['heading'])?>">
							<span class="right">
								<input type="button" data-target="savecat-<?=$eachCat->cat_id?>" class="btn btn-success" value="Save All &quot;<?=(strlen($eachCat->cat_title)<80)?strip_tags($eachCat->cat_title):'Table Data'?>&quot;">
								&nbsp;&nbsp;
								<input type="button" data-target="addcatdata-<?=$eachCat->cat_id?>" class="btn btn-info" value="Add &quot;<?=(strlen($eachCat->cat_title)<80)?strip_tags($eachCat->cat_title):'Table Data'?>&quot;">
							</span>
							<span class="clear"></span>
					   </th>
					</tr>
				</tfoot>
				<?
				if(!empty($model->FormFields[$eachCat->cat_id]['values'])) {
					?>
					<tbody>
					<?
					$i = 0;
					foreach($model->FormFields[$eachCat->cat_id]['values'] as $eachRow) {
						?>
						<tr>
						<?
						foreach($eachRow as $eachColumn) {
							?>
							<td><?=$eachColumn?></td>
							<?
						}
						?>
						</tr>
						<?
					}
					?>
					</tbody>
					<?
				}
				?>
			</table>
			<table id="TABLE_ROW_TEMPLATE-<?=$eachCat->cat_id?>" style="display:none;height:0px;width:0px"><tbody><tr>
			<?
			if(!empty($model->FormFields[$eachCat->cat_id]['templates'])) {
				foreach($model->FormFields[$eachCat->cat_id]['templates'] as $eachTemplate) {
					?>
					<td><?=$eachTemplate?></td>
					<?
				}
			}
			?>
			</tr></tbody></table>
        <?
		}
		else {
			$this->renderPartial('_kivtaken', array('model'=>$model, 'eachCat'=>$eachCat));
		}
		?>
        <input type="hidden" name="inputIndex-<?=$eachCat->cat_id?>" value="<?=count($model->FormFields[$eachCat->cat_id]['values'])?>" id="inputIndex-<?=$eachCat->cat_id?>" />
        <?
	}
?>
	<div class="row buttons">
    	<input type="hidden" name="catSave" value="" id="catSave" />
        <input type="hidden" name="listid" value="<?=$model->list_id?>" id="listid" />
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<style type="text/css">
div[id^="ui-tooltip-"] {
	display:none !important;	
}
</style>