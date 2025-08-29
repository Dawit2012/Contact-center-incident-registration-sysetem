<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Neonix by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="logo">
		<h1><a href="#">Neonix</a></h1>
		<h2><a href="http://www.freecsstemplates.org/">by Free Css Templates </a></h2>
	</div>
	<div id="menu">
		<ul>
			<li class="first"><a href="#">My Blog</a></li>
			<li><a href="#">My Photos</a></li>
			<li><a href="#">My Favorites</a></li>
			<li><a href="#">About Me</a></li>
			<li><a href="#">Contact Me</a></li>
		</ul>
	</div>
</div>
<div id="content">
	
	<div id="colTwo">
		<?php
include("connection.php");
 
if(isset($_POST['submit'])) {
$id = $_POST['id'];
$name = $_POST['name'];
$user_type = $_POST['user_type'];
$pass = $_POST['password'];
$coach_id = $_POST['coach_id'];
$sup_id = $_POST['sup_id']; 
if($id == ""  || $pass == "" || $name == "" || $user_type == "" || $coach_id == "" || $sup_id == "" ) {
echo "All fields should be filled. Either one or many fields are empty.";
echo "<br/>";
echo "<a href='register.php'>Go back</a>";
} else {
mysql_query("INSERT INTO login(id, name, user_type, password, coach_id, sup_id) VALUES('$id', '$name', '$user_type', md5('$pass'),'$coach_id','$sup_id')", $conn)
or die("Could not execute the insert query.");
echo "Registration successfully";
echo "<br/>";
echo "<a href='login.php'>Login</a>";
}
} else {
?>
<p><font size="+2">Register</font></p>
<form name="form1" method="post" action="">
<table width="75%" border="0">
<tr> 
<td width="10%">ID</td>
<td><input type="text" name="id"></td>
</tr>
<tr> 
<td width="10%">Full Name</td>
<td><input type="text" name="name"></td>
</tr>
<tr> 
<td>User Type</td>
<td><input type="text" name="user_type"></td>
</tr>
<tr> 
<td width="10%">Coach Groupe</td>
<td><input type="text" name="coach_id"></td>
</tr>
<tr> 
<td width="10%">Supervisor Groupe</td>
<td><input type="text" name="sup_id"></td>
</tr>
<tr> 
<tr> 
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr> 
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
<?php
}
?>
		<div style="clear: both;">&nbsp;</div>
	</div>
</div>
<div id="footer">
	<p>Copyright &copy; 2006 Neonix. Designed by <a href="http://www.freecsstemplates.org/"><strong>Free CSS Templates</strong></a></p>
</div>
</body>
</html>
