<!DOCTYPE html>
<html>
<head>
    <title>Insert String in Middle</title>
</head>
<body>

    <h2>Insert a String into the Middle of Another String</h2>

    <form method="post">
        Enter 4-character string:
        <input type="text" name="str1" maxlength="4" required>
        <br><br>

        Enter string to insert:
        <input type="text" name="str2" required>
        <br><br>

        <input type="submit" value="Insert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $str1 = $_POST["str1"];
        $str2 = $_POST["str2"];

        $middle = strlen($str1) / 2;

        $result = substr($str1, 0, $middle) .
                  $str2 .
                  substr($str1, $middle);

        echo "<h3>Result: $result</h3>";
    }
    ?>

</body>
</html>