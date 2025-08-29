<html>
<head>
<title>Register</title>
</head>
 
<body>
<a href="index.php">Home</a> <br />
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
</body>
</html>
