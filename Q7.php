<!DOCTYPE html>
<html>
<head>
    <title>FizzBuzz String</title>
</head>
<body>

    <h2>Check String</h2>

    <form method="post">
        <label>Enter a string:</label>
        <input type="text" name="text" required>
        <br><br>

        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $text = $_POST["text"];

        $startsWithF = substr($text, 0, 1) == "F";
        $endsWithB = substr($text, -1) == "B";

        if ($startsWithF && $endsWithB) {
            $result = "FizzBuzz";
        } elseif ($startsWithF) {
            $result = "Fizz";
        } elseif ($endsWithB) {
            $result = "Buzz";
        } else {
            $result = $text;
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>

</body>
</html>