<?php 
// mysql_connect("database-host", "username", "password")
$conn=mysqli_connect("localhost","root");
//$conn = mysqli_connect("localhost","root") 
//or die("cannot connected");
 
// mysql_select_db("database-name", "connection-link-identifier")
//@mysqli_select_db("test2",$conn);
mysqli_select_db($conn,"test2");
?>