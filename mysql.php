
<?php
$conn=mysql_connect("localhost","root","");

if(!$conn)
die('Unable to connect'.mysql_error);

$status=mysql_select_db('bookshop',$conn);

if(!$status)
die('Unable to select database'.mysql_error);


?>