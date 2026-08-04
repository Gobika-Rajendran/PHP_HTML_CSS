<!DOCTYPE html>
<html>
<head>
<title>Booking Confirmation</title>

<style>

body{
    background:#e0f7fa;
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
    background:#b2ebf2;
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
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$package = $_POST["package"];
$persons = $_POST["persons"];
$date = $_POST["date"];

/* Package Price */

switch($package)
{
    case "Ooty Tour":
        $price = 8000;
        break;

    case "Kodaikanal Tour":
        $price = 10000;
        break;

    case "Goa Tour":
        $price = 15000;
        break;

    case "Kerala Tour":
        $price = 18000;
        break;

    default:
        $price = 0;
}

$total = $price * $persons;

?>

<div class="box">

<h2>Booking Confirmation</h2>

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
<th>Email ID</th>
<td><?php echo $email; ?></td>
</tr>

<tr>
<th>Travel Package</th>
<td><?php echo $package; ?></td>
</tr>

<tr>
<th>Number of Persons</th>
<td><?php echo $persons; ?></td>
</tr>

<tr>
<th>Journey Date</th>
<td><?php echo $date; ?></td>
</tr>

<tr>
<th>Package Cost (Per Person)</th>
<td>₹ <?php echo number_format($price,2); ?></td>
</tr>

<tr>
<th>Total Amount</th>
<td><strong>₹ <?php echo number_format($total,2); ?></strong></td>
</tr>

</table>

<br>

<h3 style="text-align:center;color:green;">
Your travel package has been booked successfully.
Have a safe and happy journey!
</h3>

</div>

</body>
</html>