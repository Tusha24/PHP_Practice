<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "Q13.php" method="POST">
        Enter a number:
        <input type="number" name="num">

        <input type="submit" value="Submit">
</form>

<?php

$num=$_POST["num"];

if ($num%2==0) {
    echo "Even Number";}
else {
    echo "Odd Number"; }
?>
</body>
</html>