<?php
	function sanitizepostdata($data) {
		return trim(addslashes($data));
	}
	
	function sanitizedbdata($data) {
		return trim(stripslashes($data));
	}
	
	function addCssFile($cssFile,$POSITION=POS_HEAD) {
		global $STYLES_TO_INCLUDE;
		if(file_exists($cssFile)) {
			$STYLES_TO_INCLUDE[$POSITION][] = $cssFile;
		}
	}
	
	function renderCssFiles($POSITION=POS_HEAD) {
		global $STYLES_TO_INCLUDE;$ALL_CSS = '';
		if(!empty($STYLES_TO_INCLUDE[$POSITION])) {
			foreach($STYLES_TO_INCLUDE[$POSITION] as $eachCSS) {
				$ALL_CSS .= "<link rel=\"stylesheet\" href=\"".$eachCSS."\">"."\n";
			}
		}
		if($ALL_CSS != '') {
			echo $ALL_CSS;
		}
	}
	
	function addJsFile($jsFile,$POSITION=POS_HEAD) {
		global $SCRIPTS_TO_INCLUDE;
		if(file_exists($jsFile)) {
			$SCRIPTS_TO_INCLUDE[$POSITION][] = $jsFile;
		}
	}
	
	function renderJsFiles($POSITION=POS_HEAD) {
		global $SCRIPTS_TO_INCLUDE;$ALL_JS = '';
		if(!empty($SCRIPTS_TO_INCLUDE[$POSITION])) {
			foreach($SCRIPTS_TO_INCLUDE[$POSITION] as $eachJS) {
				$ALL_JS .= "<script type=\"text/javascript\" src=\"".$eachJS."\"></script>"."\n";
			}
		}
		if($ALL_JS != '') {
			echo $ALL_JS;
		}
	}

	function executeScriptAfterPageLoad($forjQuery = true) {
		global $SCRIPT_PENDING_FOR_EXECUTION;
		$allCode = '';
		if($SCRIPT_PENDING_FOR_EXECUTION && count($SCRIPT_PENDING_FOR_EXECUTION)) {
			foreach($SCRIPT_PENDING_FOR_EXECUTION as $eachCode) {
				$allCode .= $eachCode."\n";
			}
		}
		if($allCode!='') {
			if($forjQuery) {
				echo "<script>\n$(function(){\r\t".$allCode."});\n</script>\r\n";
			}
			else {
				echo "<script>\n".$allCode."});\n</script>\r\n";
			}
		}
	}
		
	function addScriptForExec($code) {
		global $SCRIPT_PENDING_FOR_EXECUTION;
		$SCRIPT_PENDING_FOR_EXECUTION[] = $code;
	}
	
	function saveDataToDB($db,$params) {
		$return = array();
		$error_str = '';
		if($params['table']!='' && is_array($params['data']) && $params['mode']!='' && $params['db_type']!='') {
			$DB_HANDLER = $db;
			if($params['mode']=='add') {
				if(isset($params['data']['callback']) && function_exists($params['data']['callback'])) {
					$callback_fn = $params['data']['callback'];
					unset($params['data']['callback']);
				} else {
					$callback_fn = '';
				}
				$insArr = $params['data'];
				$table = $params['table'];
				$insID = $DB_HANDLER->db_insert($table,$insArr);
				if($insID && is_numeric($insID)) {
					if($callback_fn!='') {
						$tempParams = $params['data'];
						$callback_fn($db,$tempParams);
					}
					$return['error'] = 0;
					$return['message'] = $insID;
				} else {
					$return['error'] = 1;
					$return['message'] = "Insertion failed";
				}
			} 
			elseif($params['mode']=='edit') {
				if($params['condition']=='') {
					$return['error'] = 1;
					$return['message'] = 'No condition found for update';
				}
				$updArr = $params['data'];
				$table = $params['table'];
				$params['condition'] = stripslashes($params['condition']);
				$upd = $DB_HANDLER->db_update($table,$updArr,$params['condition']);
				if($upd==true) {
					$return['error'] = 0;
					$return['message'] = $upd;
				} else {
					$return['error'] = 1;
					$return['message'] = "update failed";
				}
			}
			else {
				$return['error'] = 1;
				$return['message'] = 'Invalid Mode selected!';
			}
			
			
		} else {
			$error_str = 'Invalid Parameter set!';
			$return['error'] = 1;
			$return['message'] = $error_str;
		}
		return $return;
	}
	
	function insertMultipleDataToDB($db,$params) {
		$return = array();
		if($params['table']!='' && is_array($params['data']) && $params['db_type']!='') {
			$DB_HANDLER = $db;
			$table = $params['table'];
			$processFlag = true;
			$count = 0;
			foreach($params['data'] as $eachDataSet) {
				$insArr = $eachDataSet;
				$insID = $DB_HANDLER->db_insert($table,$insArr);
				$processFlag == $processFlag||is_numeric($insID);
				$count++;
			}
			if($processFlag) {
				$return['error'] = 0;
				$return['message'] = $count;
			}
			else {
				$return['error'] = 1;
				$return['message'] = "Insertion failed";
			}
		}
		else {
			$return['error'] = 1;
			$return['message'] = 'Invalid Parameter set!';
		}
		return $return;
	}

	function writeLOG($content) {
		if(file_exists("console.log")) {
			$fp = fopen('console.log','w');
		} else {
			$fp = fopen('console.log','w');
		}
		fputs($fp,$content);
		fclose($fp);
	}
		
	//Upload image
	//Params :: Image[ $_FILES[name] ], UPLOAD DIR, NEW NAME, $ACCEPT
	//Return :: 
	/*
		-1 :: Not uploaded
		-2 :: trying to upload file without extension
		-3 :: trying to upload file that is not accepted
		-4 :: UPLOAD_ERR_OK returns false
		-5 :: not uploaded
	*/	 
	function UploadImage($IMG,$UPLOAD_DIR='uploads/',$NEW_NAME,$accept = array('png','jpeg','jpg','gif')) {
		$ret = -1;
		if($IMG != '' && $UPLOAD_DIR != '') {
			$fileExtArr = explode('.',$IMG['name']);
			if(count($fileExtArr)>1) {
				$fileExt = $fileExtArr[count($fileExtArr)-1];
				if(in_array($fileExt,$accept)) {
					if($NEW_NAME=='') {
						$NEW_NAME = date('YmdHis').'_Upload'.$fileExt;
					}
					if($IMG['error'] == UPLOAD_ERR_OK) {
						$UPLOAD_DIR = rtrim($UPLOAD_DIR,'/');
						if(!file_exists($UPLOAD_DIR)) {
							mkdir($UPLOAD_DIR, 0777, true);
						}
						if(move_uploaded_file($IMG['tmp_name'],$UPLOAD_DIR.'/'.$NEW_NAME)) {
							$ret = 1;
						} else {
							$ret = -5;
						}
					} else {
						$ret = -4;
					}
				} else {
					$ret = -3;
				}
			} else {
				$ret = -2;
			}
		}
		return $ret;
	}
	
	/*
	parameters :: 
	top_offset = "60",
	msg_type = "info/success/warning/error",
	msg_align = "left/center/right",
	msg_width = "350",
	msg_delay = "5000",
	*/
	function setNotification($message,$top_offset=150,$message_type="success",$message_align="center",$message_width=390,$message_delay=6000) {
		if($message_type != '' && $top_offset != '' && $message_align != '' && is_numeric($message_width) && is_numeric($message_delay)) {
			$_SESSION['NOTIFICATION']['THIS_NOTE'] = array(
												'message'=>$message,
												'message_type'=>$message_type,
												'message_top_offset'=>$top_offset,
												'message_align'=>$message_align,
												'message_width'=>$message_width,
												'message_delay'=>$message_delay
										);
		}
	}

	function displayNotification() {
		if(isset($_SESSION['NOTIFICATION']['THIS_NOTE']['message']) && !empty($_SESSION['NOTIFICATION']['THIS_NOTE']['message'])) {
			$notification = $_SESSION['NOTIFICATION']['THIS_NOTE'];
			addScriptForExec("$.fn.PopInformation('".$notification['message']."','".$notification['message_type']."','".$notification['message_top_offset']."','".$notification['message_align']."','".$notification['message_width']."','".$notification['message_delay']."');");
			$_SESSION['NOTIFICATION']['THIS_NOTE']['message'] = '';
		}
	}
		
	function cropStringToWidth($string,$clip_length,$repeater='..') {
		$retstr = '';
		if(strlen($string)>$clip_length) {
			$retstr = substr($string,0,$clip_length).$repeater;
		} else {
			$retstr = $string;
		}
		return $retstr;
	}
		
		
	function redirect($path) {
		if(!empty($path)) {
			if(filter_var($path,FILTER_VALIDATE_URL)) {
				@header("location:".$path);
			} else {
				if(trim($path,"/") != '') {
					@header("location:".HTTP_PATH.trim($path,"/")."/");
				} else {
					@header("location:".HTTP_PATH);
				}
			}
		} else {
			@header("location:".HTTP_PATH);
		}
		exit;
	}
	
	function include_file($file) {
		if(DEBUG_MODE == true) {
			$include_resp = @shell_exec("php -l ".$file);
			if(stripos($include_resp, 'Parse error') === 0) {
				include_once($file);
			}
		} else {
			include_once($file);
		}
	}
	
	function getBrowser() {
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
		$bname = 'Unknown';
		$platform = 'Unknown';
		$version= "";
	
		//First get the platform?
		if(preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		}
		elseif(preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		}
		elseif(preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'windows';
		}
	   
		// Next get the name of the useragent yes seperately and for good reason
		if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) {
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		}
		elseif(preg_match('/Firefox/i',$u_agent)) {
			$bname = 'Mozilla Firefox';
			$ub = "Firefox";
		}
		elseif(preg_match('/Chrome/i',$u_agent)) {
			$bname = 'Google Chrome';
			$ub = "Chrome";
		}
		elseif(preg_match('/Safari/i',$u_agent)) {
			$bname = 'Apple Safari';
			$ub = "Safari";
		}
		elseif(preg_match('/Opera/i',$u_agent)) {
			$bname = 'Opera';
			$ub = "Opera";
		}
		elseif(preg_match('/Netscape/i',$u_agent)) {
			$bname = 'Netscape';
			$ub = "Netscape";
		}
	   
		// finally get the correct version number
		$known = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) .
		')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		if(!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number just continue
		}
	   
		// see how many we have
		$i = count($matches['browser']);
		if($i != 1) {
			//we will have two since we are not using 'other' argument yet
			//see if version is before or after the name
			if(strripos($u_agent,"Version") < strripos($u_agent,$ub)){
				$version= $matches['version'][0];
			}
			else {
				$version= $matches['version'][1];
			}
		}
		else {
			$version= $matches['version'][0];
		}
	   
		// check if we have a number
		if($version==null || $version=="") {
			$version="?";
		}
	   
		return array(
			'userAgent' => $u_agent,
			'name'      => $bname,
			'version'   => $version,
			'platform'  => $platform,
			'pattern'    => $pattern
		);
	} 
?>