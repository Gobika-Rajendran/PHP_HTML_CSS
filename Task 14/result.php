<!DOCTYPE html>
<html>
<head>
<title>Sales Report</title>

<style>

body{
    background:#e3f2fd;
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

$product = $_POST["product"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];

/* User-defined Function */

function calculateSales($qty,$rate)
{
    return $qty * $rate;
}

$total = calculateSales($quantity,$price);

?>

<div class="box">

<h2>Sales Report</h2>

<table>

<tr>
<th>Product Name</th>
<td><?php echo $product; ?></td>
</tr>

<tr>
<th>Quantity</th>
<td><?php echo $quantity; ?></td>
</tr>

<tr>
<th>Price per Unit</th>
<td>₹ <?php echo $price; ?></td>
</tr>

<tr>
<th>Total Sales Value</th>
<td><strong>₹ <?php echo number_format($total,2); ?></strong></td>
</tr>

</table>

</div>

</body>
</html>