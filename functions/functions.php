<?php 
	
	function safe_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  //$data = htmlentities($data,ENT_QUOTES,'UTF-8');
	  //$data = $db->real_escape_string($data);
	  return $data;
	}
	function xss_safe($data) {
		$data = htmlentities($data,ENT_QUOTES,'UTF-8');
	  	return $data;
	}
	function check_mail($data) {
		$domain = strstr($data,'@');
		$status = false;
		if($domain==='@gmail.com' or $domain==='@outlook.com' or $domain==='@yahoo.co.in' or $domain==='@yahoo.com') {
			$status=true;
		}
		return $status;
	}

?>