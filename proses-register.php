<?php
require_once('admin/config.php');
$var_email  = $_POST['frm_email'];
$var_username = $_POST['frm_password'];
$var_password = $_POST['frm_password'];
$rondom = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
$var_code = md5($rondom);
$sqlMemberTemp =mysql_query("INSERT INTO member_temp SET 
								member_temp_username = '".$var_username."',
								member_temp_email = '".$var_email."',
								member_temp_password = '".$var_password."',
								member_temp_code = '".$var_code."'
							");	
							//echo $sql; exit();

if($sqlMemberTemp){
	header('location: register.html');
}


?>