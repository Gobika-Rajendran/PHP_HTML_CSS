<!DOCTYPE html>
<html>
<head>
<title>Validation Result</title>

<style>

body{
    background:#f2f2f2;
    font-family:Arial,sans-serif;
}

.box{
    width:650px;
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
    text-align:left;
}

.success{
    color:green;
    font-weight:bold;
}

.error{
    color:red;
    font-weight:bold;
}

h2{
    text-align:center;
}

</style>

</head>

<body>

<?php

$email = $_POST["email"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];

/* Email Validation */

if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $emailMsg="Valid Email ID";
}
else
{
    $emailMsg="Invalid Email ID";
}

/* Password Validation */

if(strlen($password)>=8)
{
    $passwordMsg="Valid Password";
}
else
{
    $passwordMsg="Password must contain at least 8 characters";
}

/* Mobile Validation */

if(preg_match("/^[0-9]{10}$/",$mobile))
{
    $mobileMsg="Valid Mobile Number";
}
else
{
    $mobileMsg="Invalid Mobile Number";
}

?>

<div class="box">

<h2>Applicant Validation Report</h2>

<table>

<tr>
<th>Email ID</th>
<td><?php echo $email; ?></td>
<td><?php echo $emailMsg; ?></td>
</tr>

<tr>
<th>Password</th>
<td><?php echo str_repeat("*",strlen($password)); ?></td>
<td><?php echo $passwordMsg; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
<td><?php echo $mobileMsg; ?></td>
</tr>

</table>

</div>

</body>
</html>