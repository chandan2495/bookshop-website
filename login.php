<?php
session_start();
require_once('./mysql.php');


 	$username=$_POST['loginusername'];
 	$password=$_POST['loginpassword'];

 	$query=mysql_query("select * from user where username='$username' and password='$password'");
 	if($query){
 		$res=mysql_fetch_array($query);
 	$_SESSION['user']=$res['name'];
 	$_SESSION['userid']=$res['userid'];

 	header('Location: ./index.php');
 }
?>