<?php
require_once('mysql.php');

$bookid=$_GET['bookid'];
$userid=$_GET['userid'];

$query=mysql_query("delete from cart where userid=$userid and bookid=$bookid");
if($query)
{
 header('Location: ./cart.php');
}

?>