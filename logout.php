<?php
session_start();
require_once('./mysql.php');

 	unset($_SESSION['user']);

 	header('Location: ./index.php');
 
?>