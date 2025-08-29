<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
header('Location: login.php');
}
?>
 
<?php
//including the database connection file
include("connection.php");
 
//getting id of the data from url
$id = $_GET['tt_number'];
 
//deleting the row from table
$result=mysql_query("DELETE FROM records WHERE tt_number=$id");
 
//redirecting to the display page (view.php in our case)
header("Location:view2.php");
?>
