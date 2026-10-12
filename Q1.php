<!DOCTYPE html>
<html>
<head>
    <title>Check Range</title>
</head>
<body>

<form method="post">
    Enter first integer:
    <input type="number" name="num1" required><br><br>

    Enter second integer:
    <input type="number" name="num2" required><br><br>

    Enter third integer:
    <input type="number" name="num3" required><br><br>

    <input type="submit" value="Check">
</form>

<?php
 {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    if ($num1 >= 20 && $num1 <= 50 &&
        $num2 >= 20 && $num2 <= 50 &&
        $num3 >= 20 && $num3 <= 50) {
        
        echo "<h3>True</h3>";
    } else {
        echo "<h3>False</h3>";
    }
}
?>

</body>
</html>
