<!DOCTYPE html>
<html>
<head>
<title>Patient Registration Report</title>

<style>

body{
    background:#f2f2f2;
    font-family:Arial,sans-serif;
}

.box{
    width:700px;
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
empty($_POST["age"]) ||
empty($_POST["gender"]) ||
empty($_POST["mobile"]) ||
empty($_POST["email"]) ||
empty($_POST["address"]) ||
empty($_POST["bloodgroup"])
)
{
    echo "<h2 align='center'>All fields are mandatory!</h2>";
    exit();
}

$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$address=$_POST["address"];
$bloodgroup=$_POST["bloodgroup"];

?>

<div class="box">

<h2>Patient Registration Successful</h2>

<table>

<tr>
<th>Patient Name</th>
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
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Email</th>
<td><?php echo $email; ?></td>
</tr>

<tr>
<th>Address</th>
<td><?php echo $address; ?></td>
</tr>

<tr>
<th>Blood Group</th>
<td><?php echo $bloodgroup; ?></td>
</tr>

</table>

<br>

<h3 align="center">Patient registration completed successfully.</h3>

</div>

</body>
</html>