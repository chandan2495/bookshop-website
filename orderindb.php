<?php
session_start();
include('./mysql.php');

$name=$_POST['inputname'];
$email=$_POST['inputemail'];
$phone=$_POST['inputphone'];
$address=$_POST['inputaddress'];
$city=$_POST['inputcity'];
$state=$_POST['inputstate'];
$zip=$_POST['inputzip'];

$userid=$_SESSION['userid'];
$amount=$_SESSION['amount'];

$query=mysql_query("INSERT INTO `bookshop`.`order` (`orderid`, `orderuserid`, `orderamount`, `ordershipname`, `orderaddress`, `ordercity`, `orderstate`, `orderzip`, `orderphone`, `orderemail`, `orderstatus`, `orderdate`, `ordershipped`, `ordertrackingnumber`) VALUES (NULL, '$userid', '$amount', '$name', '$address', '$city', '$state', '$zip', '$phone', '$email', 'Confirm', CURRENT_TIMESTAMP, '1', NULL);");

if($query)
{
$orderid=mysql_insert_id();
$ordertrack="ekart".$orderid;
echo $ordertrack;

$query1=mysql_query("UPDATE `bookshop`.`order` SET `ordertrackingnumber` = '$ordertrack' WHERE `order`.`orderid` ='$orderid';");

$query2=mysql_query("select * from `cart` ,`books` where userid='$userid' and `cart`.bookid=`books`.bookid");


while(($res=mysql_fetch_array($query2)))
{
	$bookid=$res['bookid'];
	$bookname=$res['book_name'];
	$price=$res['price'];
	$quantity=$res['quantity'];

	mysql_query("INSERT INTO `bookshop`.`orderdetails` (`detailid`, `detailorderid`, `detailbookid`, `bookname`, `detailprice`, `detailquantity`) VALUES (NULL, '$orderid', '$bookid', '$bookname', '$price', '$quantity');");
}

mysql_query("delete from cart where userid=$userid");
}
else
	echo mysql_error();

header('Location: ./yourorder.php');

?>