<!DOCTYPE html>
<html>
<head>
<title>Attendance Report</title>

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

.error{
    color:red;
    text-align:center;
    font-size:20px;
}

</style>

</head>

<body>

<?php

$name = $_POST["name"];
$regno = $_POST["regno"];
$workingdays = $_POST["workingdays"];
$presentdays = $_POST["presentdays"];

/* User-defined Function */

function calculateAttendance($present,$working)
{
    return ($present/$working)*100;
}

if($presentdays > $workingdays)
{
    echo "<h2 class='error'>Days Present cannot be greater than Total Working Days.</h2>";
}
else
{

$percentage = calculateAttendance($presentdays,$workingdays);

if($percentage >= 75)
{
    $status = "Eligible for Examination";
}
else
{
    $status = "Not Eligible for Examination";
}

?>

<div class="box">

<h2>Attendance Report</h2>

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
<th>Total Working Days</th>
<td><?php echo $workingdays; ?></td>
</tr>

<tr>
<th>Days Present</th>
<td><?php echo $presentdays; ?></td>
</tr>

<tr>
<th>Attendance Percentage</th>
<td><?php echo number_format($percentage,2); ?> %</td>
</tr>

<tr>
<th>Examination Eligibility</th>
<td><?php echo $status; ?></td>
</tr>

</table>

</div>

<?php

}

?>

</body>
</html>