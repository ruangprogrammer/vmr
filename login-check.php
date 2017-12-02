<?php
require_once('admin/config.php');

$var_username = $_POST['frm_username'];  
$var_password = $_POST['frm_password'];  //echo $var_password;
$sql_check="select * from member where 
			member_username='".$var_username."'"; //echo $sql_check; exit();
$result = mysql_query($sql_check);
$getUser = mysql_num_rows($result);
$getDataUser = mysql_fetch_array($result);    //echo $getDataUser['member_password']; exit();
if ($getUser === 1) 
{
	
	if (password_verify($var_password,$getDataUser['member_password']))
	{
		session_start();
		$_SESSION['username']=$getDataUser['member_username'];
		$_SESSION['password']=$getDataUser['member_password'];
		$_SESSION['member_id']=$getDataUser['member_id'];
		$_SESSION['level']=$getDataUser['member_level'];  //echo $_SESSION['level']; exit();
		header('location: member-area.html'); 
	}
	else
	{
		header('location: login-gagal.html');
	}	
	
}
else
{
	header('location: login-gagal.html');
}




?>