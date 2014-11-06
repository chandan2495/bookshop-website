<?php
require_once('mysql.php');

$ordertrackingid=$_GET['orderTrackingID'];

$query=mysql_query("select orderid from `bookshop`.`order` where `ordertrackingnumber`='$ordertrackingid'");

if($query)
{
	$res=mysql_fetch_array($query);
	$detailorderid=$res['orderid'];

	$query1=mysql_query("select * from `bookshop`.`orderdetails` where `detailorderid`='$detailorderid'");

	
	echo "<div class='container'>";
	include("sidebar.php");
	echo "<div class='col-sm-9 col-lg-9 col-md-9'>";
	echo "<center><h2>Order Details</h2></center>";
	echo "<table class='table table-striped' id='carttable'>";
	echo "<tr><th>S.No.</th><th>Book Name</th><th>Quantity</th><th>Price</th><th></th></tr>";
	$count=1;
	$grand=0;
	while(($res=mysql_fetch_array($query1)))
	{
		$bookname=$res['bookname'];
		$price=$res['detailprice'];
		$quantity=$res['detailquantity'];
		$bookid=$res['detailbookid'];
		echo "<tr>";
		echo "<td>";
		echo $count;
		echo "</td><td><a href='books.php?bookid=$bookid'>";
		echo $bookname;
		echo "</a></td><td>";
		echo $quantity;
		echo "</td><td>";
		echo $price * $quantity;
		$grand+=$price * $quantity;
		echo "</td></tr>";
		$count=$count+1;
	}
	echo "<tr><th>Grand Total</th><th></th><th></th><th>$grand</th>";
	echo "</table>";
	echo "<div class='button_group'>";
	echo "<a href='yourorder.php' class='btn btn-primary btn-lg con_sh'>Back to your orders</a>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}
else
echo mysql_error();

?>

