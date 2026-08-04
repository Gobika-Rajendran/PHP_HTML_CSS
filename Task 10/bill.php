<!DOCTYPE html>
<html>
<head>
<title>Electricity Bill</title>

<style>

body{
    background:#f2f2f2;
    font-family:Arial,sans-serif;
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

$name = $_POST["name"];
$units = $_POST["units"];

/* Electricity Slab Calculation */

if($units <= 100)
{
    $bill = $units * 1.50;
}
elseif($units <= 200)
{
    $bill = (100 * 1.50) + (($units - 100) * 2.50);
}
elseif($units <= 300)
{
    $bill = (100 * 1.50) + (100 * 2.50) + (($units - 200) * 4.00);
}
else
{
    $bill = (100 * 1.50) + (100 * 2.50) + (100 * 4.00) + (($units - 300) * 6.00);
}

?>

<div class="box">

<h2>Electricity Bill</h2>

<table>

<tr>
<th>Consumer Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Units Consumed</th>
<td><?php echo $units; ?></td>
</tr>

<tr>
<th>Total Bill Amount</th>
<td>₹ <?php echo number_format($bill,2); ?></td>
</tr>

</table>

</div>

</body>
</html>