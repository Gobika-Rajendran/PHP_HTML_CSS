<!DOCTYPE html>
<html>
<head>
<title>String Analysis Result</title>

<style>

body{
    background:#f2f2f2;
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

$title = $_POST["title"];

$vowels = 0;
$consonants = 0;
$digits = 0;
$special = 0;

$length = strlen($title);

for($i=0; $i<$length; $i++)
{
    $ch = $title[$i];

    if(ctype_alpha($ch))
    {
        if(stripos("AEIOU",$ch) !== false)
            $vowels++;
        else
            $consonants++;
    }
    elseif(ctype_digit($ch))
    {
        $digits++;
    }
    elseif($ch != " ")
    {
        $special++;
    }
}

?>

<div class="box">

<h2>String Analysis Report</h2>

<table>

<tr>
<th>Entered Title</th>
<td><?php echo $title; ?></td>
</tr>

<tr>
<th>Total Characters</th>
<td><?php echo strlen($title); ?></td>
</tr>

<tr>
<th>Number of Vowels</th>
<td><?php echo $vowels; ?></td>
</tr>

<tr>
<th>Number of Consonants</th>
<td><?php echo $consonants; ?></td>
</tr>

<tr>
<th>Number of Digits</th>
<td><?php echo $digits; ?></td>
</tr>

<tr>
<th>Number of Special Characters</th>
<td><?php echo $special; ?></td>
</tr>

</table>

</div>

</body>
</html>