<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
header('Location: login.php');
}
?>
 
<?php
//including the database connection file
include_once("connection.php");
 
//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM records WHERE id=".$_SESSION['id']." ORDER BY id DESC");
?>
 
<html>
<head>
<title>Homepage</title>
</head>
 
<body>
<a href="index.php">Home</a> | <a href="new.php">Add New Data</a> | <a href="logout.php">Logout</a>
<br/><br/>
<table width='80%' border=0>
<tr bgcolor='#CCCCCC'>
<td>ID</td>
<td>Raised Date</td>
<td>Location </td>
<td>Room</td>
<td>Raised By</td>
<td>Cattagory</td>
<td>Incident Type </td>
<td>Platform</td>
<td>Status</td>
<td>Incident Description</td>
<td>owner </td>
<td>possesion</td>
<td>TT Numbwer</td>
<td>Raised Time</td>
<td>Closed Date </td>
<td>Closed Time</td>
<td>Frequency</td>
<td>Duration</td>
<td>Remark </td>
</tr>
<?php
while($res = mysql_fetch_array($result)) { 
echo "<tr>";
echo "<td>".$res['id']."</td>";
echo "<td>".$res['raised_date']."</td>";
echo "<td>".$res['location']."</td>";
echo "<td>".$res['room']."</td>";
echo "<td>".$res['raised_by']."</td>";
echo "<td>".$res['catagory']."</td>";
echo "<td>".$res['incident_type']."</td>";
echo "<td>".$res['platform']."</td>";
echo "<td>".$res['status']."</td>";
echo "<td>".$res['incident_description']."</td>";
echo "<td>".$res['owner']."</td>";
echo "<td>".$res['possetion']."</td>";
echo "<td>".$res['tt_number']."</td>";
echo "<td>".$res['raised_time']."</td>";
echo "<td>".$res['closed_date']."</td>";
echo "<td>".$res['closed_time']."</td>";
echo "<td>".$res['frequency']."</td>";
echo "<td>".$res['duration']."</td>";
echo "<td>".$res['remark']."</td>"; 
echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
}
?>
</table> 
</body>
</html>
