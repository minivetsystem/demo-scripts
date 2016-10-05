<?php
include_once('includes/config.php');
$return = array();
if(isset($_POST_action) && $_POST_action!='' && $_POST_params!='') {
	if(function_exists($_POST_action)){
		if(isset($_POST_params['db_type']) && $_POST_params['db_type']!='') {
			if($_POST_params['db_type']=='MYSQL') {
				$db_h = $db;
			} else {
				$db_h = $db;
			}
			echo json_encode($_POST_action($db_h,$_POST_params));
		} else {
			echo json_encode($_POST_action($db,$_POST_params));
		}
	} else{
		$return['error'] = 2;
		$return['message'] = "Request not found"; 
		echo json_encode($return);
	}
}
elseif(isset($_GET_params) && $_GET_params!='' && $_GET_params!='') {
	if(function_exists($_GET_action)){
		if(isset($_GET_params['db_type']) && $_GET_params['db_type']!='') {
			if($_GET_params['db_type']=='MYSQL') {
				$db_h = $db;
			} else {
				$db_h = $db;
			}
			echo json_encode($_GET_action($db_h,$_GET_params));
		} else {
			echo json_encode($_GET_action($db,$_GET_params));
		}
	} else{
		$return['error'] = 2;
		$return['message'] = "Request not found"; 
		echo json_encode($return);
	}
}
else {
	$return['error'] = 2;
	$return['message'] = "Invalid Request.."; 
	echo json_encode($return);
}
?>