<?php
session_start();

require_once("mysql.php");
$bookid=$_GET['bookid'];
if(isset($_SESSION['userid']))
$userid=$_SESSION['userid'];

$query1=mysql_query("select quantity from cart where bookid=$bookid and userid=$userid");
if(mysql_num_rows($query1)>0){
		$res=mysql_fetch_array($query1);
	$quantity=$res['quantity'];
	$quantity=$quantity+1;
	$query=mysql_query("update cart set quantity=$quantity where bookid=$bookid and userid=$userid");

}
else
{
$query=mysql_query("insert into cart Values(NULL,'$userid',1,'$bookid')");
}
header('Location: ./cart.php');

?>