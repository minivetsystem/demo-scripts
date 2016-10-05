<?php
	
	
	
	
	
	
	
	function query($db,$params) {
		if(!empty($params)) {
			$params['query'] = stripslashes($params['query']);
			$result = $db->db_query($params['query']);
			if($result && count($result)>0) {
				$return['error'] = 0;
				$return['message'] = $result;
			}
			else {
				$return['error'] = 1;
				$return['message'] = NULL;
			}
		}
		else {
			$return['error'] = -1;
			$return['message'] = GENERAL_ERROR;
		}
		return $return;
	}
	
	
	// set cookie by ajax for unified key
	function setCookieValue($db,$params) {
		if(isset($params['KEY']) && isset($params['DATA'])) {
			setcookie($params['KEY'], $params['DATA'], time()+60*60*24,"/table_planner/",($_SERVER['HTTP_HOST'] == "localhost")?"":$_SERVER['HTTP_HOST']);
			$return['error'] = 0;
			$return['message'] = GENERAL_SUCCESS;
		}
		else {
			$return['error'] = 1;
			$return['message'] = GENERAL_ERROR;
		}
		return $return;
	}

?>