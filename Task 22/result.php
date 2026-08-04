<!DOCTYPE html>
<html>
<head>
<title>Salary Report</title>

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
$empid = $_POST["empid"];
$basic = $_POST["basic"];

/* User-defined Function to Calculate Gross Salary */

function calculateGrossSalary($basic)
{
    $hra = $basic * 0.20;
    $da = $basic * 0.10;

    return $basic + $hra + $da;
}

/* User-defined Function to Calculate Deductions */

function calculateDeductions($gross)
{
    return $gross * 0.05;
}

/* User-defined Function to Calculate Net Salary */

function calculateNetSalary($gross,$deduction)
{
    return $gross - $deduction;
}

$gross = calculateGrossSalary($basic);
$deduction = calculateDeductions($gross);
$net = calculateNetSalary($gross,$deduction);

?>

<div class="box">

<h2>Employee Salary Report</h2>

<table>

<tr>
<th>Employee Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Employee ID</th>
<td><?php echo $empid; ?></td>
</tr>

<tr>
<th>Basic Salary</th>
<td>$ <?php echo number_format($basic,2); ?></td>
</tr>

<tr>
<th>Gross Salary</th>
<td>$ <?php echo number_format($gross,2); ?></td>
</tr>

<tr>
<th>Deductions (5%)</th>
<td>$ <?php echo number_format($deduction,2); ?></td>
</tr>

<tr>
<th>Net Salary</th>
<td><strong>$ <?php echo number_format($net,2); ?></strong></td>
</tr>

</table>

</div>

</body>
</html>