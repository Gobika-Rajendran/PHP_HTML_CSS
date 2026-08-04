<!DOCTYPE html>
<html>
<head>
<title>BMI Result</title>

<style>

body{
    background:#e8f5e9;
    font-family:Arial,sans-serif;
}

.box{
    width:650px;
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
$height = $_POST["height"];
$weight = $_POST["weight"];

$bmi = $weight / ($height * $height);

if($bmi < 18.5)
{
    $status = "Underweight";
    $recommendation = "Eat a balanced diet and consult a nutritionist if necessary.";
}
elseif($bmi >= 18.5 && $bmi < 25)
{
    $status = "Normal Weight";
    $recommendation = "Maintain your healthy lifestyle with regular exercise.";
}
elseif($bmi >= 25 && $bmi < 30)
{
    $status = "Overweight";
    $recommendation = "Exercise regularly and reduce high-calorie foods.";
}
else
{
    $status = "Obese";
    $recommendation = "Consult a doctor and follow a healthy diet and exercise plan.";
}

?>

<div class="box">

<h2>BMI Report</h2>

<table>

<tr>
<th>Person Name</th>
<td><?php echo $name; ?></td>
</tr>

<tr>
<th>Height</th>
<td><?php echo $height; ?> m</td>
</tr>

<tr>
<th>Weight</th>
<td><?php echo $weight; ?> kg</td>
</tr>

<tr>
<th>Body Mass Index (BMI)</th>
<td><?php echo number_format($bmi,2); ?></td>
</tr>

<tr>
<th>Health Status</th>
<td><?php echo $status; ?></td>
</tr>

<tr>
<th>Health Recommendation</th>
<td><?php echo $recommendation; ?></td>
</tr>

</table>

</div>

</body>
</html>