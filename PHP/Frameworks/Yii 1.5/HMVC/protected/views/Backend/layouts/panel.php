<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

   
<div class="vernav2 iconmenu">
	<?php 
        $this->widget('application.components.Backend.com_smenu.SMenu', array()); 
    ?> 
    <br><br>
</div><!--leftmenu-->
<div class="centercontent">
    <div class="pageheader">
        <?php if(isset($this->breadcrumbs)):?>
        
        <?php $this->widget('application.components.Backend.com_breadcrumb.AdminBreadCrumb', array(
		  'crumbs' => $this->breadcrumbs,
		  'delimiter' => ' &raquo; ', // if you want to change it &rarr;
		)); ?>
        
        <?php endif?>
		&nbsp;
    </div>
    
    <div id="<?php echo Yii::app()->controller->id.'_contentwrapper' ?>" class="contentwrapper">

		<?php echo $content; ?>
        <br clear="all">
        
	</div>
    
    <br clear="all">
    
</div>

<?php $this->endContent(); ?>