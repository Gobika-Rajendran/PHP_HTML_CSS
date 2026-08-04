<!DOCTYPE html>
<html>
<head>
<title>Admission Acknowledgement</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

.box{
    width:600px;
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

th,td{
    padding:10px;
}

h2{
    color:green;
    text-align:center;
}

</style>

</head>

<body>

<?php

if(
empty($_POST["name"]) ||
empty($_POST["dob"]) ||
empty($_POST["gender"]) ||
empty($_POST["email"]) ||
empty($_POST["mobile"]) ||
empty($_POST["address"]) ||
empty($_POST["course"])
)
{
    echo "<h2 align='center'>All mandatory fields are required.</h2>";
    exit();
}

$name=$_POST["name"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$course=$_POST["course"];

?>

<div class="box">

<h2>Admission Application Submitted Successfully</h2>

<p><strong>Application Acknowledgement</strong></p>

<table>

<tr>
<th>Field</th>
<th>Details</th>
</tr>

<tr>
<td>Name</td>
<td><?php echo $name; ?></td>
</tr>

<tr>
<td>Date of Birth</td>
<td><?php echo $dob; ?></td>
</tr>

<tr>
<td>Gender</td>
<td><?php echo $gender; ?></td>
</tr>

<tr>
<td>Email</td>
<td><?php echo $email; ?></td>
</tr>

<tr>
<td>Mobile Number</td>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<td>Address</td>
<td><?php echo $address; ?></td>
</tr>

<tr>
<td>Course Applied</td>
<td><?php echo $course; ?></td>
</tr>

</table>

<br>

<h3>Your admission application has been received successfully.</h3>

</div>

</body>
</html>