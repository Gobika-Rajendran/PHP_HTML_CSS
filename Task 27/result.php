<!DOCTYPE html>
<html>
<head>
<title>Registration Success</title>

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

$customerid = trim($_POST["customerid"]);
$name = trim($_POST["name"]);
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = trim($_POST["email"]);
$mobile = trim($_POST["mobile"]);
$address = trim($_POST["address"]);

/* Validation */

if(empty($customerid) || empty($name) || empty($email) || empty($mobile) || empty($address))
{
    echo "<h2 class='error'>All fields are mandatory.</h2>";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
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

<h2>Customer Registration Successful</h2>

<table>

<tr>
<th>Customer ID</th>
<td><?php echo $customerid; ?></td>
</tr>

<tr>
<th>Customer Name</th>
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
<th>Email ID</th>
<td><?php echo $email; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Address</th>
<td><?php echo $address; ?></td>
</tr>

<tr>
<th>Registration Status</th>
<td><strong>Successfully Registered</strong></td>
</tr>

</table>

</div>

<?php

}

?>

</body>
</html>