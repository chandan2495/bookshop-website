<?php
require_once('./mysql.php');

 	$name=$_POST['name'];
 	$username=$_POST['username'];
 	$password=$_POST['password'];
 	$email=$_POST['emailid'];
 	$query=mysql_query("insert into user values(NULL,'$name','$username','$password','$email',NULL,NULL)");
 	if($query){
 	echo "Successfully registered";
 	header('Location: ./index.php');
 }
 	else
 	echo "Registration failed";    


?>