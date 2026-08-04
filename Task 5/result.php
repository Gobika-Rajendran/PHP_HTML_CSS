<!DOCTYPE html>
<html>
<head>
<title>Student Result</title>

<style>

body{
    background:#f2f2f2;
    font-family:Arial,sans-serif;
}

.result{
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

$name=$_POST["name"];
$regno=$_POST["regno"];
$tamil=$_POST["tamil"];
$english=$_POST["english"];
$maths=$_POST["maths"];
$science=$_POST["science"];
$social=$_POST["social"];

/* Function to Calculate Total */

function calculateTotal($t,$e,$m,$s,$ss)
{
    return $t+$e+$m+$s+$ss;
}

/* Function to Calculate Average */

function calculateAverage($total)
{
    return $total/5;
}

/* Function to Determine Grade */

function findGrade($average)
{
    if($average>=90)
        return "A+";
    elseif($average>=80)
        return "A";
    elseif($average>=70)
        return "B";
    elseif($average>=60)
        return "C";
    elseif($average>=50)
        return "D";
    else
        return "Fail";
}

$total=calculateTotal($tamil,$english,$maths,$science,$social);

$average=calculateAverage($total);

$grade=findGrade($average);

?>

<div class="result">

<h2>Student Result</h2>

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
<th>Average Marks</th>
<td><?php echo number_format($average,2); ?></td>
</tr>

<tr>
<th>Grade</th>
<td><?php echo $grade; ?></td>
</tr>

</table>

</div>

</body>
</html>