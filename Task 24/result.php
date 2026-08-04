<!DOCTYPE html>
<html>
<head>
<title>Employee Profile</title>

<style>

body{
    background:#e3f2fd;
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
    background:#bbdefb;
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

$empid = trim($_POST["empid"]);
$name = trim($_POST["name"]);
$age = $_POST["age"];
$gender = $_POST["gender"];
$department = trim($_POST["department"]);
$designation = trim($_POST["designation"]);
$email = trim($_POST["email"]);
$mobile = trim($_POST["mobile"]);
$salary = $_POST["salary"];

/* Validation */

if(empty($empid) || empty($name) || empty($department) || empty($designation))
{
    echo "<h2 class='error'>All fields are mandatory.</h2>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "<h2 class='error'>Invalid Email ID.</h2>";
}
elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
    echo "<h2 class='error'>Mobile Number must contain exactly 10 digits.</h2>";
}
else
{

?>

<div class="box">

<h2>Employee Profile Information</h2>

<table>

<tr>
<th>Employee ID</th>
<td><?php echo $empid; ?></td>
</tr>

<tr>
<th>Employee Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Age</th>
<td><?php echo $age; ?></td>
</tr>

<tr>
<th>Gender</th>
<td><?php echo $gender; ?></td>
</tr>

<tr>
<th>Department</th>
<td><?php echo $department; ?></td>
</tr>

<tr>
<th>Designation</th>
<td><?php echo $designation; ?></td>
</tr>

<tr>
<th>Email ID</th>
<td><?php echo $email; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Salary</th>
<td>$ <?php echo number_format($salary,2); ?></td>
</tr>

<tr>
<th>Profile Status</th>
<td>Employee Information Submitted Successfully</td>
</tr>

</table>

</div>

<?php

}

?>

</body>
</html>