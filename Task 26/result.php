<!DOCTYPE html>
<html>
<head>
<title>Examination Result</title>

<style>

body{
    background:#e8f5e9;
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

$name = $_POST["name"];
$regno = $_POST["regno"];
$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST["m3"];
$m4 = $_POST["m4"];
$m5 = $_POST["m5"];

/* User-defined Function */

function calculatePercentage($total)
{
    return ($total / 500) * 100;
}

$total = $m1 + $m2 + $m3 + $m4 + $m5;
$percentage = calculatePercentage($total);

/* Control Structure */

if($percentage >= 75)
{
    $class = "Distinction";
}
elseif($percentage >= 60)
{
    $class = "First Class";
}
elseif($percentage >= 50)
{
    $class = "Second Class";
}
elseif($percentage >= 40)
{
    $class = "Pass";
}
else
{
    $class = "Fail";
}

?>

<div class="box">

<h2>Examination Result Analysis</h2>

<table>

<tr>
<th>Student Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Register Number</th>
<td><?php echo $regno; ?></td>
</tr>

<tr>
<th>Total Marks</th>
<td><?php echo $total; ?> / 500</td>
</tr>

<tr>
<th>Percentage</th>
<td><?php echo number_format($percentage,2); ?> %</td>
</tr>

<tr>
<th>Class Obtained</th>
<td><strong><?php echo $class; ?></strong></td>
</tr>

</table>

</div>

</body>
</html>