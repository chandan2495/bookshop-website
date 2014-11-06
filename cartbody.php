<?php

include("mysql.php");

$userid=$_SESSION['userid'];

$query=mysql_query("select * from cart c,books b where c.userid='$userid' and b.bookid=c.bookid");

if($query)
{
	echo "<div class='container'>";
	include("sidebar.php");
	echo "<div class='col-sm-9 col-lg-9 col-md-9'>";
	echo "<center><h2>Cart Details</h2></center>";
	echo "<table class='table table-striped' id='carttable'>";
	echo "<tr><th>S.No.</th><th>Book Name</th><th>Quantity</th><th>Price</th><th></th></tr>";
	$count=1;
	$grand=0;
	while(($res=mysql_fetch_array($query)))
	{
		$bookname=$res['book_name'];
		$price=$res['price'];
		$quantity=$res['quantity'];
		$bookid=$res['bookid'];
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
		echo "</td><td><a href='delete.php?bookid=$bookid&userid=$userid'><span class='glyphicon glyphicon-remove-circle'></span></a></td></tr>";
		$count=$count+1;
	}
	$_SESSION['amount']=$grand;
	echo "<tr><th>Grand Total</th><th></th><th></th><th>$grand</th>";
	echo "</table>";
	echo "<div class='button_group'>";
	echo "<a href='index.php' class='btn btn-primary btn-lg con_sh'>Continue Shopping>></a>";
	if($grand>0)
	echo "<a href='placeorder.php' class='btn btn-primary btn-lg pyo'>Place Your Order</a>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}
else
echo "<h3> No books in your cart yet.</h3>";

?>