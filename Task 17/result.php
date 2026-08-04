<!DOCTYPE html>
<html>
<head>
<title>Mobile Bill Summary</title>

<style>

body{
    background:#e8f5e9;
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

</style>

</head>

<body>

<?php

$name=$_POST["name"];
$mobile=$_POST["mobile"];
$plan=$_POST["plan"];
$minutes=$_POST["minutes"];

/* User-defined Function */

function calculateBill($plan,$minutes)
{
    switch($plan)
    {
        case "Basic":
            return 100 + ($minutes * 0.50);

        case "Standard":
            return 200 + ($minutes * 0.75);

        case "Premium":
            return 300 + ($minutes * 1.00);

        default:
            return 0;
    }
}

$total=calculateBill($plan,$minutes);

?>

<div class="box">

<h2>Mobile Bill Summary</h2>

<table>

<tr>
<th>Customer Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Mobile Number</th>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<th>Tariff Plan</th>
<td><?php echo $plan; ?></td>
</tr>

<tr>
<th>Call Minutes Used</th>
<td><?php echo $minutes; ?></td>
</tr>

<tr>
<th>Total Bill Amount</th>
<td><strong>₹ <?php echo number_format($total,2); ?></strong></td>
</tr>

</table>

</div>

</body>
</html>