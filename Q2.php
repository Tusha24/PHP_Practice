<!DOCTYPE html>
<html>
<head>
    <title>Closest to 100</title>
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

    $diff1 = abs(100 - $num1);
    $diff2 = abs(100 - $num2);

    if ($diff1 < $diff2) {
        echo "<h3>Closer number: $num1</h3>";
    } 
    elseif ($diff2 < $diff1) {
        echo "<h3>Closer number: $num2</h3>";
    } 
    else {
        echo "<h3>0</h3>";
    }
}
?>

</body>
</html>
