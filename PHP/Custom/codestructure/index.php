<?php
include_once('includes/config.php');
if(UNDER_CONSTRUCTION) {
	$PAGE='under_construction';
	include_once(PAGES_DIR.$PAGE.'.php');
	include_once(TEMPLATES_DIR.'index.tpl.php');
}
else {
	if($PAGE=='') {
		$PAGE = 'home';
	}
	
    
    if(!file_exists(PAGES_DIR.$PAGE.'.php') || !file_exists(TEMPLATES_DIR.$PAGE.'.tpl.php')) {
		$PAGE = 'error';
	} elseif(file_exists(PAGES_DIR.$PAGE.'.php')){
	   include_once(PAGES_DIR.$PAGE.'.php');
	}
	
    
	
	if(isset($NO_TEMPLATE) && $NO_TEMPLATE) {
		//only code// no template
	} else {
		$PAGE_TPL = $PAGE.'.tpl.php';
		if(isset($_REQUEST_AJAX) && $_REQUEST_AJAX) {
			include_once(TEMPLATES_DIR.$PAGE_TPL);
		} elseif((!isset($_REQUEST_AJAX) || !$_REQUEST_AJAX) && (isset($_REQUEST_FRAME) && $_REQUEST_FRAME)) {
			include_once(TEMPLATES_DIR.'iframe.tpl.php');
		} elseif((isset($BASE_PAGE_TEMPLATE) && $BASE_PAGE_TEMPLATE != "")) {
			include_once(TEMPLATES_DIR.$BASE_PAGE_TEMPLATE.'.tpl.php');
		} else {
			include_once(TEMPLATES_DIR.'index.tpl.php');
		}
	}
}
?>