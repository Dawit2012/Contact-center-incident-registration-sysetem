<?php session_start(); ?>
<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($Id ,$coach_id, $sup_id,$sup_ids, $raised_date, $location, $room, $raised_by, $catagory, $incident_type, $platform, $status,$incident_description, $owner, $possetion, $raised_time, $closed_date, $closed_time, $frequency, $duration, $remark, $error)
 {
 ?>
 <!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<img src="telecom51.jpg">
<body>
<style>
h1 {color:blue; font-family: courier; font-size: 160%;}
h2 {color:red; font-family: verdana; font-size: 100%;}
body {
background-color: #B2D22A ;

}
label {
float : left;
width : 200px;
}
</style>
<script>
function onSubmit () {
var myIdElem = document.getElementById("myId");
alert ("Id: " + myIdElem.value);
var myDateElem = document.getElementById("myDate");
alert("Date: " + myDateElem.value);
var myLocationElem = document.getElementById("myLocation");
alert ("Location: " + myLocationElem.value);
var myRoom = document.getElementById("myRoom");
alert ("Room: " + myRoomElem.value);
var myRaisedBy = document.getElementById("myRasedBy");
alert ("RaisedBy: " + myRaisedByElem.value);
var myCatagory = document.getElementById("myCatagory");
alert ("Catagory: " + myCatagoryElem.value);
var myIncidentType = document.getElementById("myIncidentType");
alert ("IncidentType: " + myIncidentTypeElem.value);
var myStatus = document.getElementById("myStatus");
alert ("Status: " + myStatusElem.value);
var myIncidentDescription = document.getElementById("myIncidentDescription");
alert ("myIncidentDescription: " + mymyIncidentDescriptionElem.value);
var myOwner = document.getElementById("myOwner");
alert ("Owner: " + myOwnerElem.value);
var myPossetion = document.getElementById("myPossetion");
alert ("Possetion: " + myPossetionElem.value);
var myTTNumber = document.getElementById("myTTNumber");
alert ("TTNumber: " + myTTNumberElem.value);
var myTimeElem = document.getElementById("myTime");
alert("Time: " + myTimeElem.value);
var myHouseNumberElem = document.getElementById("myHouseNumber");
alert ("House number: " + myHouseNumberElem.value);
var myPostCodeElem = document.getElementById("myPostCode");
alert ("Post code: " + myPostCodeElem.value);
var myBirthCountryElem = document.getElementById("myBirthCountry");
alert ("Birth country: " + myBirthCountryElem.value);
var myTimeElem = document.getElementById("myTime");
alert("Time: " + myTimeElem.value);
var myResidenceCountryElem = document.getElementById("myResidenceCountry");
alert ("Residence country: " + myResidenceCountryElem.value);
var myPicsElem = document.getElementById("myPics");
var numPics = myPicsElem.files.length;
for (var i = 0; i < numPics; i++) {
var thisPic = myPicsElem.files[i];
alert("File " + (i+1) + " of " + numPics + ": " +
thisPic.fileName + " {" +
thisPic.fileSize + " bytes}");
}
return false;
}
</script>
</head>
<body>
<h1>Well Come To Ethio System Incident Report Portal</h1>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <div>
<strong><label>Coach Groupe:</label></strong> <input  name="coach_id" value="<?php echo $coach_id; ?>" /><br/>
<strong><label>Superviser Groupe:</label></strong> <input  name="sup_id" value="<?php echo $sup_id; ?>" /><br/>
<strong><label>Superviser Id:</label></strong> <input  name="sup_ids" value="<?php echo $sup_ids; ?>" /><br/>
 <strong><label>Raised Date:</label></strong> <input type="number" name="raised_date" value="<?php echo $raised_date; ?>" /><br/>
 <strong><label>Location:</label></strong> <input type="text" list="location" name="location" value="<?php echo $location; ?>" /><br/>
 <strong><label>Room:</label></strong> <input type="text" list="room" name="room" value="<?php echo $room; ?>" /><br/>
 <strong><label>Raised By:</label></strong> <input type="text" list="raisedBy" name="raised_by" value="<?php echo $raised_by; ?>" /><br/>
 <strong><label>Catagory:</label></strong> <input type="text" list="catagory" name="catagory" value="<?php echo $catagory; ?>" /><br/>
 <strong><label>Incident Type:</label></strong> <input type="text" list="incidentType" name="incident_type" value="<?php echo $incident_type; ?>" /><br/>
  <strong><label>Platform:</label></strong> <input type="text" list="platform" name="platform" value="<?php echo $platform; ?>" /><br/>
  <strong><label>Status:</label></strong> <input type="text" list="status" name="status" value="<?php echo $status; ?>" /><br/>
   <strong><label>Incident Description :</label></strong> <input type="text" size="40" name="incident_description" value="<?php echo $incident_description; ?>" /><br/>
  <strong><label>Owner:</label></strong> <input type="text" list="owner" name="owner" value="<?php echo $owner; ?>" /><br/>
  <strong><label>Possetion:</label></strong> <input type="text" list="possetion" name="possetion" value="<?php echo $possetion; ?>" /><br/>
  <strong><label>Raised Time:</label></strong> <input type="number" name="raised_time" value="<?php echo $raised_time; ?>" /><br/>
  <strong><label>Closed Date:</label></strong> <input type="number" name="closed_date" value="<?php echo $closed_date; ?>" /><br/>
  <strong><label>Closed Time:</label></strong> <input type="number" name="closed_time" value="<?php echo $closed_time; ?>" /><br/>
   <strong><label>Frequency:</label></strong> <input type="number" name="frequency" value="<?php echo $frequency; ?>" /><br/>
    <strong><label>Duration:</label></strong> <input type="number" name="duration" value="<?php echo $duration; ?>" /><br/>
     <strong><label>Remark:</label></strong><input type="text" size="40" name="remark" value="<?php echo $remark; ?>" /><br/></br>          
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 include('connection.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $sup_ids = mysql_real_escape_string(htmlspecialchars($_POST['sup_ids']));
 $coach_id = $_POST['coach_id'];
 $sup_id = $_POST['sup_id'];
 $raised_date = mysql_real_escape_string(htmlspecialchars($_POST['raised_date']));
 $location = mysql_real_escape_string(htmlspecialchars($_POST['location']));
 $room = mysql_real_escape_string(htmlspecialchars($_POST['room']));
 $raised_by = mysql_real_escape_string(htmlspecialchars($_POST['raised_by']));
 $catagory = mysql_real_escape_string(htmlspecialchars($_POST['catagory']));
 $incident_type = mysql_real_escape_string(htmlspecialchars($_POST['incident_type']));
 $platform = mysql_real_escape_string(htmlspecialchars($_POST['platform']));
 $status = mysql_real_escape_string(htmlspecialchars($_POST['status']));
 $incident_description = mysql_real_escape_string(htmlspecialchars($_POST['incident_description']));
 $owner = mysql_real_escape_string(htmlspecialchars($_POST['owner']));
 $possetion = mysql_real_escape_string(htmlspecialchars($_POST['possetion']));
 //$tt_number = mysql_real_escape_string(htmlspecialchars($_POST['tt_number']));
 $raised_time = mysql_real_escape_string(htmlspecialchars($_POST['raised_time']));
 $closed_date = mysql_real_escape_string(htmlspecialchars($_POST['closed_date']));
 $closed_time = mysql_real_escape_string(htmlspecialchars($_POST['closed_time']));
 $frequency = mysql_real_escape_string(htmlspecialchars($_POST['frequency']));
 $duration = mysql_real_escape_string(htmlspecialchars($_POST['duration']));
 $remark = mysql_real_escape_string(htmlspecialchars($_POST['remark']));
 $Id = $_SESSION['id'];
 
 // check to make sure both fields are entered
 if ( $coach_id == '' || $sup_id == ''|| $sup_ids == ''|| $raised_date == '' || $location == '' || $room == '' || $raised_by == '' || $catagory == '' || $incident_type == '' || $platform == '' || $status == '' || $owner == '' || $possetion == ''  || $raised_time == '' || $closed_date == '' || $closed_time == '' || $frequency == '' || $duration == '' || $remark == '' || $incident_description == '')
 {
 // generate error message
 $error = 'Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($coach_id, $sup_id, $sup_ids, $raised_date, $location, $room, $raised_by, $catagory, $incident_type, $platform, $status, $incident_description, $owner, $possetion, $raised_time, $closed_date, $closed_time, $frequency, $duration, $remark, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT records SET id='$Id', coach_id= '$coach_id', sup_id= '$sup_id', sup_ids= '$sup_ids', raised_date='$raised_date', location='$location', room='$room', raised_by='$raised_by', catagory='$catagory', incident_type='$incident_type', platform='$platform', status='$status', incident_description='$incident_description', owner='$owner', possetion='$possetion', tt_number='', raised_time='$raised_time', closed_date='$closed_date', closed_time='$closed_time', frequency='$frequency', duration='$duration', remark='$remark'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: view.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','','','','','','','','','','','','','','','','','','');
 }
?>
<datalist id="location">
<option value="TPO">
<option value="OAP">
<option value="legehar">
<option value="other">
</datalist>
<datalist id="room">
<option value="Room1">
<option value="Room2">
<option value="legeharTR">
<option value="legeharOther">
<option value="FOR1">
<option value="FOR2">
<option value="F1R1">
<option value="F1R2">
<option value="F2R1">
<option value="F2R2">
<option value="OAP-TR">
<option value="OAP other">
<option value="TPO-05">
<option value="TPO-06">
<option value="TPO-07">
<option value="TPO TR">
<option value="TPO other">
<option value="other">
</datalist>
<datalist id="raisedBy">
<option value="Advisors">
<option value="Ahmed">
<option value="Alemtsehay">
<option value="Anwar">
<option value="Banchi">
<option value="Biruktawit">
<option value="Coaches">
<option value="Deressa">
<option value="Eden">
<option value="Eyob">
<option value="Feben">
<option value="Front Office">
<option value="G/libanos">
<option value="Girmay">
<option value="Hailemariam">
<option value="Megersa">
<option value="Mieraf">
<option value="Mekedes">
<option value="Meseret">
<option value="Riyad">
<option value="Roman">
<option value="Samuel">
<option value="Supervisor">
<option value="Tewoderos">
<option value="Tigist">
<option value="Tilaye">
<option value="Yonatan">
<option value="Zenageberel">
</datalist>
<datalist id="catagory">
<option value="ISD">
<option value="Network">
<option value="other">
</datalist>
<datalist id="incidentType">
<option value="PC Software Problem">
<option value="PC Hardware Problem">
<option value="Headset Problem">
<option value="Zsmart CC&B Problem">
<option value="Power Problem">
<option value="Zsmart TT Problem">
<option value="Request">
<option value="VC Manager problem">
<option value="Network problem">
</datalist>
<datalist id="platform">
<option value="Legehar">
<option value="Kirkos">
<option value="Both">
<option value="other">
</datalist>
<datalist id="status">
<option value="Closed">
<option value="Open">
<option value="Observation">
</datalist>
<datalist id="owner">
<option value="Advisors">
<option value="Ahmed">
<option value="Alemtsehay">
<option value="Anwar">
<option value="Banchi">
<option value="Biruktawit">
<option value="Coaches">
<option value="Deressa">
<option value="Eden">
<option value="Eyob">
<option value="Feben">
<option value="Front Office">
<option value="G/libanos">
<option value="Girmay">
<option value="Hailemariam">
<option value="Megersa">
<option value="Mieraf">
<option value="Mekedes">
<option value="Meseret">
<option value="Riyad">
<option value="Roman">
<option value="Samuel">
<option value="Supervisor">
<option value="Tewoderos">
<option value="Tigist">
<option value="Tilaye">
<option value="Yonatan">
<option value="Zenageberel">
</datalist>
<datalist id="possetion">
<option value="Incident">
<option value="Advisors">
<option value="Coaches">
<option value="IT Aplication">
<option value="IT Application Supervisor">
<option value="ITHD">
<option value="KB">
<option value="KB Supervisor">
<option value="Manager">
<option value="NNOC">
<option value="Supervisor">
<option value="Telephony">
<option value="Telephony Supervisor">
<option value="FO">
<option value="FO Coaches">
<option value="FO Supervisor">
</datalist>