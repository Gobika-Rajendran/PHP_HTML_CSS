<!DOCTYPE html>
<html>
<head>
<title>Appointment Confirmation</title>

<style>

body{
    background:#e8f5e9;
    font-family:Arial,sans-serif;
}

.box{
    width:700px;
    margin:40px auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;
}

table{
    width:100%;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid black;
}

th{
    background:#c8e6c9;
}

th,td{
    padding:10px;
    text-align:left;
}

h2{
    text-align:center;
    color:green;
}

.error{
    color:red;
    text-align:center;
    font-size:20px;
}

</style>

</head>

<body>

<?php

$parentname = trim($_POST["parentname"]);
$studentname = trim($_POST["studentname"]);
$class = trim($_POST["class"]);
$teachername = trim($_POST["teachername"]);
$meetingdate = $_POST["meetingdate"];
$slot = $_POST["slot"];
$mobile = trim($_POST["mobile"]);

/* Validation */

if(empty($parentname) || empty($studentname) || empty($class) || empty($teachername))
{
    echo "<h2 class='error'>All fields are mandatory.</h2>";
}
elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
    echo "<h2 class='error'>Mobile Number must contain exactly 10 digits.</h2>";
}
else
{

?>

<div class="box">

<h2>Appointment Confirmation</h2>

<table>

<tr>
<th>Parent Name</th>
<td><?php echo $parentname; ?></td>
</tr>

<tr>
<th>Student Name</th>
<td><?php echo $studentname; ?></td>
</tr>

<tr>
<th>Class</th>
<td><?php echo $class; ?></td>
</tr>

<tr>
<th>Teacher Name</th>
<td><?php echo $teachername; ?></td>
</tr>

<tr>
<th>Meeting Date</th>
<td><?php echo $meetingdate; ?></td>
</tr>

<tr>
<th>Meeting Slot</th>
<td><?php echo $slot; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Registration Status</th>
<td><strong>Appointment Confirmed</strong></td>
</tr>

</table>

</div>

<?php

}

?>

</body>
</html>