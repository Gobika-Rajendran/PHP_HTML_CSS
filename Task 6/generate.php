<!DOCTYPE html>
<html>
<head>
    <title>Employee Email ID</title>

<style>

body{
    background:#f2f2f2;
    font-family:Arial,sans-serif;
}

.box{
    width:600px;
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

$name = $_POST["name"];

/* String Manipulation Functions */

$name = strtolower($name);          // Convert to lowercase
$name = str_replace(" ","",$name);  // Remove spaces

$email = $name . "@company.com";

?>

<div class="box">

<h2>Employee Email ID Generated</h2>

<table>

<tr>
<th>Employee Name</th><td>
    <?php echo $_POST["name"]; ?></td>
</tr>

<tr>
<th>Generated Email ID</th>
<td><?php echo $email; ?></td>
</tr>

</table>

</div>

</body>
</html>