<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
header('Location: login.php');
}
?>
 
<?php
// including the database connection file
include_once("connection.php");
 
if(isset($_POST['update']))
{ 
$id = $_POST['id'];
$sup_ids = $_POST['sup_ids'];
 $coach_id = $_POST['coach_id'];
 $sup_id = $_POST['sup_id'];
 $raised_date = $_POST['raised_date'];
 $location = $_POST['location'];
 $room = $_POST['room'];
 $raised_by = $_POST['raised_by'];
 $catagory = $_POST['catagory'];
 $incident_type = $_POST['incident_type'];
 $platform = $_POST['platform'];
 $status = $_POST['status'];
 $incident_description = $_POST['incident_description'];
 $owner = $_POST['owner'];
 $possetion = $_POST['possetion'];
 $tt_number = $_POST['tt_number'];
 $raised_time = $_POST['raised_time'];
 $closed_date = $_POST['closed_date'];
 $closed_time = $_POST['closed_time'];
 $frequency = $_POST['frequency'];
 $duration = $_POST['duration'];
 $remark = $_POST['remark'];
// checking empty fields
if(empty($coach_id) || empty($sup_id) || empty($sup_ids)|| empty($raised_date)|| empty($location)|| empty($room) || empty($raised_by)|| empty($catagory)|| empty($incident_type)|| empty($platform)|| empty($status)|| empty($incident_description)|| empty($owner)|| empty($possetion)|| empty($tt_number)|| empty($raised_time)|| empty($closed_date)|| empty($closed_time)|| empty($frequency)|| empty($duration)|| empty($remark)) {
if(empty($coach_id)) {
echo "<font color='red'> Coach Groupe field is empty.</font><br/>";
}
if(empty($sup_id)) {
echo "<font color='red'>Supervisor groupe field is empty.</font><br/>";
}
if(empty($sup_ids)) {
echo "<font color='red'>Supervisor id field is empty.</font><br/>";
}
if(empty($raised_date)) {
	echo "<font color='red'>Raised date field is empty.</font><br/>";
} 
if(empty($location)) {
	echo "<font color='red'>Location field is empty.</font><br/>";
}
if(empty($room)) {
	echo "<font color='red'>Room field is empty.</font><br/>";
}
if(empty($raised_by)) {
	echo "<font color='red'>Raised by field is empty.</font><br/>";
}
if(empty($catagory)) {
	echo "<font color='red'>Catagory field is empty.</font><br/>";
}
if(empty($incident_type)) {
	echo "<font color='red'>Incident type field is empty.</font><br/>";
}
if(empty($platform)) {
	echo "<font color='red'>Platform field is empty.</font><br/>";
}
if(empty($status)) {
	echo "<font color='red'>Status field is empty.</font><br/>";
}
if(empty($incident_description)) {
	echo "<font color='red'>Incident description field is empty.</font><br/>";
}
if(empty($owner)) {
	echo "<font color='red'>Owner field is empty.</font><br/>";
}
if(empty($possetion)) {
	echo "<font color='red'>Possesion field is empty.</font><br/>";
}
if(empty($tt_number)) {
	echo "<font color='red'>tt number field is empty.</font><br/>";
}
if(empty($raised_time)) {
	echo "<font color='red'>Raised time field is empty.</font><br/>";
}
if(empty($closed_date)) {
	echo "<font color='red'>Closed date field is empty.</font><br/>";
}
if(empty($closed_time)) {
	echo "<font color='red'>Closed time field is empty.</font><br/>";
}
if(empty($frequency)) {
	echo "<font color='red'>Frequency field is empty.</font><br/>";
}
if(empty($duration)) {
	echo "<font color='red'>Duration field is empty.</font><br/>";
}
if(empty($remark)) {
	echo "<font color='red'>Remark field is empty.</font><br/>";
}
} else { 
//updating the table
$result = mysql_query("UPDATE records SET coach_id= '$coach_id', sup_id= '$sup_id', sup_ids= '$sup_ids', raised_date='$raised_date', location='$location', room='$room', raised_by='$raised_by', catagory='$catagory', incident_type='$incident_type', platform='$platform', status='$status', incident_description='$incident_description', owner='$owner', possetion='$possetion', tt_number='$tt_number', raised_time='$raised_time', closed_date='$closed_date', closed_time='$closed_time', frequency='$frequency', duration='$duration', remark='$remark' WHERE id=$id");
//redirectig to the display page. In our case, it is view.php
header("Location: view2.php");
}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM records WHERE id=$id");
 
while($res = mysql_fetch_array($result))
{
$coach_id = $res['coach_id'];
$sup_id = $res['sup_id'];
$sup_ids = $res['sup_ids'];
$raised_date = $res['raised_date'];
$location = $res['location'];
$room = $res['room'];
$raised_by = $res['raised_by'];
$catagory = $res['catagory'];
$incident_type = $res['incident_type'];
$platform = $res['platform'];
$status = $res['status'];
$incident_description = $res['incident_description'];
$owner = $res['owner'];
$possetion = $res['possetion'];
$tt_number = $res['tt_number'];
$raised_time = $res['raised_time'];
$closed_date = $res['closed_date'];
$closed_time = $res['closed_time'];
$frequency = $res['frequency'];
$duration = $res['duration'];
$remark = $res['remark'];
}
?>
<html>
<head> 
<title>Edit Data</title>
</head>
 
<body>
<a href="index.php">Home</a> | <a href="view.php">View Products</a> | <a href="logout.php">Logout</a>
<br/><br/>
<form name="form1" method="post" action="edit.php">
<table border="0">
<tr> 
<td>Coach Groupe</td>
<td><input  name="coach_id" value=<?php echo $coach_id;?>></td>
</tr>
<tr> 
<td>Supervisor Group</td>
<td><input  name="sup_id" value=<?php echo $sup_id;?>></td>
</tr>
<tr> 
<td>Supervisor Id</td>
<td><input  name="sup_ids" value=<?php echo $sup_ids;?>></td>
</tr>
<tr> 
<td>Raised Date</td>
<td><input  name="closed_date" value=<?php echo $closed_date;?>></td>
</tr>
<tr> 
<td>Location</td>
<td><input  name="location" value=<?php echo $location;?>></td>
</tr>
<tr> 
<td>Room</td>
<td><input  name="room" value=<?php echo $room;?>></td>
</tr>
<tr> 
<td>Raised By</td>
<td><input  name="raised_by" value=<?php echo $raised_by;?>></td>
</tr>
<tr> 
<td>Catagory</td>
<td><input  name="catagory" value=<?php echo $catagory;?>></td>
</tr>
<tr> 
<td>Incident Type</td>
<td><input  name="incident_type" value=<?php echo $incident_type;?>></td>
</tr>
<tr> 
<td>Platform</td>
<td><input  name="platform" value=<?php echo $platform;?>></td>
</tr>
<tr> 
<td>Status</td>
<td><input  name="status" value=<?php echo $status;?>></td>
</tr>
<tr> 
<td>Incident Description</td>
<td><input  name="incident_description" value=<?php echo $incident_description;?>></td>
</tr>
<tr> 
<td>Owner</td>
<td><input  name="owner" value=<?php echo $owner;?>></td>
</tr>
<tr> 
<td>Possetion</td>
<td><input  name="possetion" value=<?php echo $possetion;?>></td>
</tr>
<tr> 
<td>TT Number</td>
<td><input  name="tt_number" value=<?php echo $tt_number;?>></td>
</tr>
<tr> 
<td>Raised Time</td>
<td><input  name="raised_time" value=<?php echo $raised_time;?>></td>
</tr>
<tr> 
<td>Raised Date</td>
<td><input  name="raised_date" value=<?php echo $raised_date;?>></td>
</tr>
<tr> 
<td>Closed_time</td>
<td><input  name="closed_time" value=<?php echo $closed_time;?>></td>
</tr>
<tr> 
<td>Frequency</td>
<td><input  name="frequency" value=<?php echo $frequency;?>></td>
</tr>
<tr> 
<td>Duration</td>
<td><input  name="duration" value=<?php echo $duration;?>></td>
</tr>
<tr> 
<td>Remark</td>
<td><input  name="remark" value=<?php echo $remark;?>></td>
</tr>
<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>
