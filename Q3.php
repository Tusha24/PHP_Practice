<!DOCTYPE html>
<html>
<head>
    <title>Check Integer Range</title>
</head>
<body>

<form method="post">
    Enter first integer:
    <input type="number" name="num1" required><br><br>

    Enter second integer:
    <input type="number" name="num2" required><br><br>

    <input type="submit" value="Check">
</form>

<?php
 {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if (($num1 >= 40 && $num1 <= 50) &&
        ($num2 >= 40 && $num2 <= 50)) {

        echo "<h3>In the range 40 and 50</h3>";
    } 
    elseif (($num1 >= 50 && $num1 <= 60) &&
        ($num2 >= 50 && $num2 <= 60)) {
        echo "<h3>In the range 50 and 60</h3>";
    }
}
?>

</body>
</html>
