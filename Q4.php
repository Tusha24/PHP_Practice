<!DOCTYPE html>
<html>
<head>
    <title>Uppercase Last Three Characters</title>
</head>
<body>

<form method="post">
    Enter a string:
    <input type="text" name="text" required><br><br>

    <input type="submit" value="Convert">
</form>

<?php
 {

    $str = $_POST["text"];
    $length = strlen($str);

    if ($length <= 3) {
        $result = strtoupper($str);
    } else {
        $result = substr($str, 0, $length - 3) .
                  strtoupper(substr($str, -3));
    }

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
