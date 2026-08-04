<!DOCTYPE html>
<html>
<head>
<title>Generated Password</title>

<style>

body{
    background:#e8f5e9;
    font-family:Arial,sans-serif;
}

.box{
    width:650px;
    margin:50px auto;
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

$length = $_POST["length"];

/* Character Sets */

$uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$lowercase = "abcdefghijklmnopqrstuvwxyz";
$digits = "0123456789";
$special = "@#$%&*!?";

$allCharacters = $uppercase . $lowercase . $digits . $special;

$password = "";

/* Ensure one character from each category */

$password .= $uppercase[rand(0, strlen($uppercase)-1)];
$password .= $lowercase[rand(0, strlen($lowercase)-1)];
$password .= $digits[rand(0, strlen($digits)-1)];
$password .= $special[rand(0, strlen($special)-1)];

/* Fill remaining characters */

for($i=4; $i<$length; $i++)
{
    $password .= $allCharacters[rand(0, strlen($allCharacters)-1)];
}

/* Shuffle the password */

$password = str_shuffle($password);

?>

<div class="box">

<h2>Password Generated Successfully</h2>

<table>

<tr>
<th>Password Length</th>
<td><?php echo $length; ?></td>
</tr>

<tr>
<th>Generated Password</th>
<td><strong><?php echo $password; ?></strong></td>
</tr>

</table>

</div>

</body>
</html>