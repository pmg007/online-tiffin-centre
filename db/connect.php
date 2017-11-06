<?php 
	$db=new mysqli('127.0.0.1','root','','minor');
	if($db->connect_errno){
		echo $db->connect_errno;
		die('Sorry,some technical problems');
	}
 ?>