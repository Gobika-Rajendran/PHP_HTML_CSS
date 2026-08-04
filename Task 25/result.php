<!DOCTYPE html>
<html>
<head>
<title>Performance Evaluation Result</title>

<style>

body{
    background:#f3e5f5;
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
    background:#e1bee7;
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

$empid = $_POST["empid"];
$name = $_POST["name"];
$department = $_POST["department"];
$score = $_POST["score"];

/* Decision-Making Statements */

if($score >= 90)
{
    $rating = "Outstanding";
}
elseif($score >= 80)
{
    $rating = "Excellent";
}
elseif($score >= 70)
{
    $rating = "Very Good";
}
elseif($score >= 60)
{
    $rating = "Good";
}
elseif($score >= 50)
{
    $rating = "Average";
}
else
{
    $rating = "Needs Improvement";
}

?>

<div class="box">

<h2>Employee Performance Evaluation Result</h2>

<table>

<tr>
<th>Employee ID</th>
<td><?php echo $empid; ?></td>
</tr>

<tr>
<th>Employee Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Department</th>
<td><?php echo $department; ?></td>
</tr>

<tr>
<th>Performance Score</th>
<td><?php echo $score; ?></td>
</tr>

<tr>
<th>Employee Rating</th>
<td><strong><?php echo $rating; ?></strong></td>
</tr>

</table>

</div>

</body>
</html>