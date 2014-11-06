<?php

 require_once("mysql.php");
 $catid=$_SESSION['catid'];
 
 $query=mysql_query("select * from books where catid=$catid");

 if($query)
 {
 	echo "<div class='container'>";
 	include("sidebar.php");
 	$count=0;
 	while(($res=mysql_fetch_array($query)))
 	{
 		$bookid=$res['bookid'];
 		$bookname=$res['book_name'];
 		$image=$res['image'];
 		$author=$res['author_name'];
 		$price=$res['price'];
 		echo "<div class='col-sm-3 col-lg-3 col-md-3 bookthumbnail'>";
 		echo "<div class='thumbnail'>";
 		echo "<a href='books.php?bookid=$bookid'><img src='$image'></img></a>";
 		echo "<div class='caption'>";
	    echo "<h4><a href='books.php?bookid=$bookid'>$bookname</a></h4>";
        echo "<h6>$author</h6>";
        echo "<h4 class='pull-Down'>Rs. $price</h4>";

        echo "</div>";
        echo "</div>";
        echo "</div>";

        $count=$count+1;
 	}
 	echo "</div>";
 }
 else
 	echo "Not found";

?>