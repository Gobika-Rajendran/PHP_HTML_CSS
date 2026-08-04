<!DOCTYPE html>
<html>
<head>
<title>Customer Dashboard</title>

<style>

body{
    background:#e3f2fd;
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

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$customerid = trim($_POST["customerid"]);
$password = trim($_POST["password"]);

if($customerid!="" && $password!="")
{

?>

<div class="box">

<h2>Login Successful</h2>

<table>

<tr>
<th>Customer Name</th>
<td>Gobika</td>
</tr>

<tr>
<th>Customer ID</th>
<td><?php echo $customerid; ?></td>
</tr>

<tr>
<th>Account Number</th>
<td>123456789012</td>
</tr>

<tr>
<th>Account Type</th>
<td>Savings Account</td>
</tr>

<tr>
<th>Available Balance</th>
<td>$85,000</td>
</tr>

<tr>
<th>Branch</th>
<td>Chennai Main Branch</td>
</tr>

<tr>
<th>Mobile Number</th>
<td>9876543210</td>
</tr>

<tr>
<th>Email</th>
<td>gobi@gmail.com</td>
</tr>

</table>

</div>

<?php

}
else
{

echo "<h2 class='error'>Please enter both Customer ID and Password.</h2>";

}

}
else
{

echo "<h2 class='error'>Access Denied! Please login using the login form.</h2>";

}

?>

</body>
</html>