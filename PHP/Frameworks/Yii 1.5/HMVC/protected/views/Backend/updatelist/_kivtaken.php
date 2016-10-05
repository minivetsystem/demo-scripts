<?
if(!empty($model->FormFields[$eachCat->cat_id]['values'])) {
	foreach($model->FormFields[$eachCat->cat_id]['values'] as $k=>$eachBranch) {
		$branchField = @$eachBranch['branch'];
	?>
    <table data-id="branch-data-table-<?=$eachCat->cat_id?>" width="100%" border="0" cellspacing="0" cellpadding="0" class="stdtable stdtablecb overviewtable2">
        <thead>
            <tr>
                <th><?=$branchField?></th>
                <th><?=$model->FormFields[$eachCat->cat_id]['afterTable']?></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
               <th colspan="2">&nbsp;</th>
            </tr>
        </tfoot>
        <tbody><tr>
        	<td colspan="2">
            <? if(isset($model->FormFields[$eachCat->cat_id]['heading']) && $model->FormFields[$eachCat->cat_id]['heading'] != '') { ?>
            	<table data-parent-index="<?=$k?>" data-id="branch-data-table-record-<?=$eachCat->cat_id?>" width="100%" border="0" cellspacing="0" cellpadding="0" class="stdtable stdtablecb overviewtable2">
                	<thead>
                        <tr>
                           <? 
						   foreach($model->FormFields[$eachCat->cat_id]['heading'] as $eachHeading) {
							   echo '<td>'.$eachHeading.'</td>';
						   }
						   ?>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th colspan="<?=count($model->FormFields[$eachCat->cat_id]['heading'])?>">
                                <span class="right">
                                    <input type="button" data-saving="savecat-branch-<?=$eachCat->cat_id?>" class="btn btn-success" value="Save All &quot;<?=(strlen($eachCat->cat_title)<80)?strip_tags($eachCat->cat_title):'Table Data'?>&quot;">
                                    &nbsp;&nbsp;
                                    <input type="button" data-target="addbranchdata-<?=$eachCat->cat_id?>" class="btn btn-info" value="Add &quot;<?=(strlen($eachCat->cat_title)<80)?strip_tags($eachCat->cat_title):'Table Data'?>&quot;">
                                </span>
                                <span class="clear"></span>
                           </th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?
					if(!empty($eachBranch['branchdata'])) {
						$i = 0;
						foreach($eachBranch['branchdata'] as $eachRow) {
						?>
						<tr>
						<?
							foreach($eachRow as $eachtd) {
								echo '<td>'.$eachtd.'</td>';
							}
						?>
                        </tr>
                        <?
						}
					}
					?>
                    </tbody>
                </table>
            <? } ?>
            </td>
        </tr></tbody>
    </table>    
	<?
	}
	?>
    <?
	if(!empty($model->FormFields[$eachCat->cat_id]['templates'])) {
	?>
    <table id="branch-template-table-<?=$eachCat->cat_id?>" width="100%" border="0" cellspacing="0" cellpadding="0" class="stdtable stdtablecb overviewtable2" style="display:none;">
        <thead>
            <tr>
                <th><?=$model->FormFields[$eachCat->cat_id]['templates']['branch']?></th>
                <th><?=$model->FormFields[$eachCat->cat_id]['afterTable']?></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
               <th colspan="2">&nbsp;</th>
            </tr>
        </tfoot>
        <tbody><tr>
        	<td colspan="2">
            <? if(isset($model->FormFields[$eachCat->cat_id]['heading']) && $model->FormFields[$eachCat->cat_id]['heading'] != '') { ?>
            	<table data-parent-index="#BRANCH_COUNT#" id="branch-template-table-record-<?=$eachCat->cat_id?>" width="100%" border="0" cellspacing="0" cellpadding="0" class="stdtable stdtablecb overviewtable2">
                	<thead>
                        <tr>
                           <? 
						   foreach($model->FormFields[$eachCat->cat_id]['heading'] as $eachHeading) {
							   echo '<td>'.$eachHeading.'</td>';
						   }
						   ?>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                           <th colspan="<?=count($model->FormFields[$eachCat->cat_id]['heading'])?>">
                                <span class="right">
                                    <input type="button" data-saving="savecat-branch-<?=$eachCat->cat_id?>" class="btn btn-success" value="Save All &quot;<?=(strlen($eachCat->cat_title)<80)?strip_tags($eachCat->cat_title):'Table Data'?>&quot;">
                                    &nbsp;&nbsp;
                                    <input type="button" data-target="addbranchdata-<?=$eachCat->cat_id?>" class="btn btn-info" value="Add &quot;<?=(strlen($eachCat->cat_title)<80)?strip_tags($eachCat->cat_title):'Table Data'?>&quot;">
                                </span>
                                <span class="clear"></span>
                           </th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?
					if(!empty($model->FormFields[$eachCat->cat_id]['templates']['branchdata'])) {
						?>
						<tr>
						<?
						foreach($model->FormFields[$eachCat->cat_id]['templates']['branchdata'] as $eachTemptd) {
							?><td><?=$eachTemptd?></td><?
						}
						?>
                        </tr>
                        <?
					}
					?>
                    </tbody>
                </table>
            <? } ?>
            </td>
        </tr></tbody>
    </table>    
	<?
	}
	?>
    <?
}
?>
                