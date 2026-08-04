<!DOCTYPE html>
<html>
<head>
<title>Student Details</title>
</head>

<body>

<center>

<h2>Submitted Student Details</h2>

<?php

$name = $_POST["name"];
$regno = $_POST["regno"];
$department = $_POST["department"];
$year = $_POST["year"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];

echo "<table border='1' cellpadding='10'>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Name</td><td>$name</td></tr>";

echo "<tr><td>Register Number</td><td>$regno</td></tr>";

echo "<tr><td>Department</td><td>$department</td></tr>";

echo "<tr><td>Year</td><td>$year</td></tr>";

echo "<tr><td>Gender</td><td>$gender</td></tr>";

echo "<tr><td>Email</td><td>$email</td></tr>";

echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";

echo "</table>";

?>

</center>

</body>
</html>