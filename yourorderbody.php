<?php

require_once("mysql.php");

$userid=$_SESSION['userid'];

$query=mysql_query("select * from `order` where orderuserid=$userid");

if($query==false)
	echo mysql_error();

if($query)
{
	echo "<div class='container'>";
	include("sidebar.php");
	echo "<div class='col-sm-9 col-lg-9 col-md-9'>";
	echo "<center><h2>Cart Details</h2></center>";
	echo "<table class='table table-striped' id='carttable'>";
	echo "<tr><th>S.No.</th><th>OrderTrackingID</th><th>Amount</th><th>Status</th><th></th></tr>";
	$count=1;
	while(($res=mysql_fetch_array($query)))
	{
		$orderTrackingID=$res['ordertrackingnumber'];
		$orderamount=$res['orderamount'];
		$orderstatus=$res['orderstatus'];
		echo "<tr>";
		echo "<td>";
		echo $count;
		echo "</td><td><a href='orderdetails.php?orderTrackingID=$orderTrackingID'>";
		echo $orderTrackingID;
		echo "</a></td><td>";
		echo $orderamount;
		echo "</td><td>";
		echo $status;
		echo "</td><td><a href='deleteorder.php?orderid=$orderTrackingID&userid=$userid'>Cancel</a></td></tr>";
		$count=$count+1;
	}
	
	echo "</table>";
	echo "</div>";
	echo "</div>";
}
else
echo "<h3> No orders pending.</h3>";

?>