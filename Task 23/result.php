<!DOCTYPE html>
<html>
<head>
<title>Policy Summary</title>

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

</style>

</head>

<body>

<?php

$name = $_POST["name"];
$age = $_POST["age"];
$term = $_POST["term"];
$coverage = $_POST["coverage"];

/* Premium Calculation */

if($age <= 30)
{
    $rate = 0.02;
}
elseif($age <= 45)
{
    $rate = 0.03;
}
elseif($age <= 60)
{
    $rate = 0.04;
}
else
{
    $rate = 0.05;
}

/* User-defined Function */

function calculatePremium($coverage,$rate,$term)
{
    return ($coverage * $rate) * $term;
}

$premium = calculatePremium($coverage,$rate,$term);

?>

<div class="box">

<h2>Insurance Policy Summary</h2>

<table>

<tr>
<th>Policy Holder Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Age</th>
<td><?php echo $age; ?> Years</td>
</tr>

<tr>
<th>Policy Term</th>
<td><?php echo $term; ?> Years</td>
</tr>

<tr>
<th>Coverage Amount</th>
<td>₹ <?php echo number_format($coverage,2); ?></td>
</tr>

<tr>
<th>Premium Rate</th>
<td><?php echo ($rate*100); ?> %</td>
</tr>

<tr>
<th>Premium Amount</th>
<td><strong>$ <?php echo number_format($premium,2); ?></strong></td>
</tr>

<tr>
<th>Policy Status</th>
<td>Policy Eligible</td>
</tr>

</table>

</div>

</body>
</html>