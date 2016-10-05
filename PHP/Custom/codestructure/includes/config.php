<?php
	ob_start();
	session_start();	
	error_reporting(E_ALL);
	define("DIRECTORY_PATH",'codestrutcture');
	define("REMOTE",false);
	define("DEBUG_MODE",false);
	define("DEFAULT_LANG","en");
    
    define("UNDER_CONSTRUCTION",false);
	
	if(!REMOTE) {
		define("PROJECT_START_INDEX","2");
		define("SUBMIT_GUEST_DATA_FOR_PRINTING_METHOD", "GET");
		define("HTTP_PATH", "http://".$_SERVER['HTTP_HOST']."/".DIRECTORY_PATH."/");
		define("PHYSICAL_PATH", $_SERVER['DOCUMENT_ROOT']."/".DIRECTORY_PATH."/");
	} else {
		define("PROJECT_START_INDEX","2");
		define("SUBMIT_GUEST_DATA_FOR_PRINTING_METHOD", "POST");
		define("HTTP_PATH", "http://".$_SERVER['HTTP_HOST']."/".DIRECTORY_PATH."/");
		define("PHYSICAL_PATH", $_SERVER['DOCUMENT_ROOT']."/".DIRECTORY_PATH."/");
	}
	define("PAGE_TITLE", "");
	
	
	//****DON'T CHANGE ANYTHING FROM HERE ON*****//
	define("ADMIN_PAGE_TITLE", "Bigpage ADMIN - ");
	define("ADMIN_LOGO", "Bigpage Admin");
	define("PAGES_DIR","pages/");
	define("TEMPLATES_DIR","templates/");
	define("INC_DIR","includes/");
	define("ASSETS_DIR","assets/");
	define("JS_DIR",ASSETS_DIR."js/");
	define("CSS_DIR",ASSETS_DIR."css/");
	define("IMAGES_DIR",ASSETS_DIR."images/");
	define("UPLOADS_DIR","uploads/");
	define("POS_HEAD","HEAD");
	define("POS_FOOT","FOOT");
	
	global $CURRENT_URL, $SCRIPT_PENDING_FOR_EXECUTION, $LANG, $STYLES_TO_INCLUDE, $SCRIPTS_TO_INCLUDE, $db, $PAGE_PARAMS, $VARS, $PAGE_SLUG;
	$SCRIPT_PENDING_FOR_EXECUTION = $STYLES_TO_INCLUDE = $SCRIPTS_TO_INCLUDE = array();
	$VARS = array();
	
	$v = explode('/', str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']));
	$PAGE=$v[PROJECT_START_INDEX];
	$PAGE_SLUG=$v[PROJECT_START_INDEX];
	$PAGE = ($PAGE!='')?$PAGE:'home';
	$PAGE_PARAMS = array();
	if(count($v)>PROJECT_START_INDEX) {
		for($i=PROJECT_START_INDEX+1;$i<count($v);$i++) {
			$PAGE_PARAMS[] = $v[$i];
		}
	}
	
	foreach($_GET as $k=>$v) {
		if($v!='') {
			${'_GET_'.$k} = $v;
		} else {
			${'_GET_'.$k} = '';
		}
	}
	
	foreach($_POST as $k=>$v) {
		if($v!='') {
			${'_POST_'.$k} = $v;
		} else {
			${'_POST_'.$k} = '';
		}
	}
	
	foreach($_REQUEST as $k=>$v) {
		if($v!='') {
			${'_REQUEST_'.$k} = $v;
		} else {
			${'_REQUEST_'.$k} = '';
		}
	}
	
	
		
	if(REMOTE) {
		define("DB_HOST","localhost");
		define("DB_USER","eruitco_dbuser");
		define("DB_PASSWORD","db_eruit_2013");
		define("DB_NAME","eruitco_web");
		define("DB_CHARSET","utf8");
	} else {
		define("DB_HOST","localhost");
		define("DB_USER","root");
		define("DB_PASSWORD","");
		define("DB_NAME","table_planner");
		define("DB_CHARSET","utf8");
	}
	include_once(INC_DIR."dbClass.php");
	$db = new dbClass();
	$req = rtrim($_SERVER['REQUEST_URI'],'/');
	$CURRENT_URL = 'http://'.$_SERVER['HTTP_HOST'].$req.'/';
	include_once("CORE_FUNCTIONS.php");
	
	@ini_set('session.cookie_lifetime', 0);
	if(!isset($_COOKIE['SITE_LANG']) || $_COOKIE['SITE_LANG'] == "") {
		$LANG = DEFAULT_LANG;
		setcookie("SITE_LANG", $LANG, time()+60*60*24,"/table_planner/",($_SERVER['HTTP_HOST'] == "localhost")?"":$_SERVER['HTTP_HOST']);
	}
	elseif(isset($_COOKIE['SITE_LANG']) && $_COOKIE['SITE_LANG'] != "") {
		$LANG = $_COOKIE['SITE_LANG'];
		if(@file_exists(INC_DIR."lang/".$_COOKIE['SITE_LANG'].".inc")) {
			include_once(INC_DIR."lang/".$_COOKIE['SITE_LANG'].".inc");
		}
	}
	if(@file_exists(INC_DIR."lang/".$LANG.".inc")) {
		include_once(INC_DIR."lang/".$LANG.".inc");
	}
	else {
		include_once(INC_DIR."lang/en.inc");
	}
	
	include_once("functions.php");

	// for mozilla use only
	/*if(isset($_SERVER['HTTP_USER_AGENT']) && $PAGE != "download-mozilla") {
		$agent = $_SERVER['HTTP_USER_AGENT'];
		$browser = @get_browser($agent, true);
		$browser = getBrowser();
		if(strrpos($browser["name"],"Firefox")<=0) {
			redirect("download-mozilla/");
		}
	}*/
	
	echo '<pre>';
	print_r($GLOBALS);
?>