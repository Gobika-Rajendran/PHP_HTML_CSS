<!DOCTYPE html>
<html>
<head>
    <title>Customer Invoice</title>

    <style>

    body{
        background:#f2f2f2;
        font-family:Arial,sans-serif;
    }

    .invoice{
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
        text-align:center;
    }

    h2{
        text-align:center;
        color:green;
    }

    </style>

</head>

<body>

<?php

$customer = $_POST["customer"];
$product = $_POST["product"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$discount = $_POST["discount"];
$tax = $_POST["tax"];

/* Calculations */

$subtotal = $quantity * $price;

$discountAmount = ($subtotal * $discount) / 100;

$amountAfterDiscount = $subtotal - $discountAmount;

$taxAmount = ($amountAfterDiscount * $tax) / 100;

$grandTotal = $amountAfterDiscount + $taxAmount;

?>

<div class="invoice">

<h2>Customer Invoice</h2>

<table>

<tr>
<th>Customer Name</th>
<td><?php echo $customer; ?></td>
</tr>

<tr>
<th>Product</th>
<td><?php echo $product; ?></td>
</tr>

<tr>
<th>Quantity</th>
<td><?php echo $quantity; ?></td>
</tr>

<tr>
<th>Price per Unit</th>
<td>₹ <?php echo number_format($price,2); ?></td>
</tr>

<tr>
<th>Subtotal</th>
<td>₹ <?php echo number_format($subtotal,2); ?></td>
</tr>

<tr>
<th>Discount (<?php echo $discount; ?>%)</th>
<td>- ₹ <?php echo number_format($discountAmount,2); ?></td>
</tr>

<tr>
<th>Amount After Discount</th>
<td>₹ <?php echo number_format($amountAfterDiscount,2); ?></td>
</tr>

<tr>
<th>GST Tax (<?php echo $tax; ?>%)</th>
<td>₹ <?php echo number_format($taxAmount,2); ?></td>
</tr>

<tr>
<th><b>Grand Total</b></th>
<td><b>₹ <?php echo number_format($grandTotal,2); ?></b></td>
</tr>

</table>

<br>

<h3 align="center">Thank You for Shopping With Us!</h3>

</div>

</body>
</html>