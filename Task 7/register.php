<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>

<style>

body{
    background:#f2f2f2;
    font-family:Arial,sans-serif;
}

.box{
    width:650px;
    margin:30px auto;
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
    text-align:left;
}

h2{
    text-align:center;
    color:green;
}

</style>

</head>

<body>

<?php

if(
empty($_POST["name"]) ||
empty($_POST["regno"]) ||
empty($_POST["email"]) ||
empty($_POST["mobile"]) ||
empty($_POST["course"]) ||
empty($_POST["gender"])
)
{
    echo "<h2 align='center'>All fields are mandatory!</h2>";
    exit();
}

$name=$_POST["name"];
$regno=$_POST["regno"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$course=$_POST["course"];
$gender=$_POST["gender"];

?>

<div class="box">

<h2>Course Registration Successful</h2>

<table>

<tr>
<th>Student Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Register Number</th>
<td><?php echo $regno; ?></td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $email; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Course</th>
<td><?php echo $course; ?></td>
</tr>

<tr>
<th>Gender</th>
<td><?php echo $gender; ?></td>
</tr>

</table>

<br>

<h3 align="center">Your course registration has been completed successfully.</h3>

</div>

</body>
</html>