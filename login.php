<?php session_start(); ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login </title>
    <meta name="keywords" content="" />
<meta name="description" content="" />
    
    <link rel="stylesheet" href="css/reset.css">

    
        <link rel="stylesheet" href="css/style.css">

    <link href="default.css" rel="stylesheet" type="text/css" />
    
    
  </head>

  <body>
  
  <?php
include("connection.php");
 
if(isset($_POST['submit'])) {
$id = mysql_real_escape_string($_POST['id']);
$pass = mysql_real_escape_string($_POST['password']);
 
if($id == "" || $pass == "") {
echo "Either username or password field is empty.";
echo "<br/>";
echo "<a href='login.php'>Go back</a>";
} else {
$result = mysql_query("SELECT * FROM login WHERE id='$id' AND password=md5('$pass')",$conn)
or die("Could not execute the select query.");
$row = mysql_fetch_assoc($result);
if(is_array($row) && !empty($row)) {
$validuser = $row['coach_id'];
$_SESSION['valid'] = $validuser;
$_SESSION['name'] = $row['name'];
$_SESSION['id'] = $row['id'];
} else {
echo "Invalid username or password.";
echo "<br/>";
echo "<a href='login.php'>Go back</a>";
}
$empstatus=$row['user_type'];
$dbname=$row['name']; 
if($empstatus=="admin"){
        
    $_SESSION['admin']=$id;
     
     $numfields=mysql_num_fields($result);
     echo  '<font size="4"face="monotype"color="blue">well come &nbsp;&nbsp;'.$dbname.'&nbsp;</font><br><br><hr>';
         echo '<font size="3"color="blue"face="monotype">you are loged in as administrator &nbsp;<a href="view2.php">Click here to go to your home page</a></font>';    
        
    
 
}
if($empstatus=="advisor"){

	$_SESSION['advisor']=$id;
	 
	$numfields=mysql_num_fields($result);
	echo  '<font size="4"face="monotype"color="blue">well come &nbsp;&nbsp;'.$dbname.'&nbsp;</font><br><br><hr>';
	echo '<font size="3"color="blue"face="monotype">you are loged in as Advisor &nbsp;<a href="new.php">Click here to go to your home page</a></font>';


	 

}
if($empstatus=="supervisor"){

	$_SESSION['supervisor']=$id;

	$numfields=mysql_num_fields($result);
	echo  '<font size="4"face="monotype"color="blue">well come &nbsp;&nbsp;'.$dbname.'&nbsp;</font><br><br><hr>';
	echo '<font size="3"color="blue"face="monotype">you are loged in as Supervisor &nbsp;<a href="view3.php">Click here to go to your home page</a></font>';




}
if($empstatus=="coach"){

	$_SESSION['coach']=$id;

	$numfields=mysql_num_fields($result);
	echo  '<font size="4"face="monotype">well come &nbsp;&nbsp;'.$dbname.'&nbsp;</font><br><br><hr>';
	echo '<font size="3"color="blue"face="monotype">you are loged in as Coach &nbsp;<a href="view2.php">Click here to go to your home page</a></font>';




}
}

}else {
?>
<form name="form1" method="post" action="">
    <div class="wrap">
		<div class="avatar">
      <img src="logopic.jpg">
		</div>
		<input type="text" name="id" placeholder="id" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" name="password" placeholder="password" required>
		<br></br>
		<button type="submit" name="submit">Sign in</button>
	</div>
    
        <script src="js/index.js"></script>

    
</form>    
 <?php
}
?>   
  </body>
</html>
