<?php
	$sql_host="localhost";
	$sql_usuario="root";
	$sql_pass="";
	$sql_db="bd_unicach";
	$db_conexion= mysql_connect("$sql_host", "$sql_usuario", "$sql_pass") or die(header ("Location:  $redir?error_login=0"));
	mysql_select_db("$sql_db");
	
?>
	<link rel="icon" type="image/png" href="./images/favicon.png" />
	<link rel="apple-itouch-icon" href="./images/favicon.png"> 
