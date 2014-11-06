<?php

 require_once("mysql.php");
 $bookid=$_SESSION['bookid'];
 
 $query=mysql_query("select * from books where bookid=$bookid");

 if($query)
 {
 	echo "<div class='container'>";
 	include("sidebar.php");
 	$count=0;
 	if(($res=mysql_fetch_array($query)))
 	{
 		$bookid=$res['bookid'];
 		$bookname=$res['book_name'];
 		$image=$res['image'];
 		$author=$res['author_name'];
 		$price=$res['price'];
 		$aboutauthor=$res['aboutauthor'];
 		$aboutbook=$res['aboutbook'];
 		echo "<div class='col-sm-9 col-lg-9 col-md-9'> <div class='row'> <div class='col-sm-4 col-lg-4 col-md-4'>";
 		echo "<div class='thumbnail'>";
 		echo "<a href='books.php?bookid=$bookid'><img src='$image'></img></a>";
 		echo "</div></div>";
 		echo "<div class='col-sm-8 col-lg-8 col-md-8'>";
 		echo "<h2>$bookname</h2>";
 		echo "<h3>by $author</h2></br></br>";
 		echo "<h2>Rs. $price</h2> </br>";
 		echo "<form action='addcart.php?bookid=$bookid' method='post'>";
 		echo "<input type='submit' class='form-control btn-primary' value='Add To Cart'";
 		if(isset($_SESSION['user']))
 		{
 		echo "/></form></br></br>";
 	}
 	else
 	{
 		echo " disabled/></form>";
 		echo "<h4 style='color:red'>Please login to Add book to cart</h4> </br></br>";
 	}
 		echo "<p style='font-family:sans-serif; font-size:17px'><b>About Book:</b> $aboutbook</p></br></br>";
 		echo "<p style='font-family:sans-serif; font-size:17px'><b>About Author:</b> $aboutauthor</p>";
 		echo "</div></div></div>";
 	}
 	echo "</div>";
 }
 else
 	echo "Not found";

?>