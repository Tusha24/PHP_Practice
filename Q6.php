<!DOCTYPE html>
<html>
<head>
    <title>Check Number in Array</title>
</head>
<body>

    <h2>Check Number in Array</h2>

    <form method="post">
        <label>Enter numbers separated by commas:</label>
        <input type="text" name="numbers" placeholder="10,20,30,40,50" required>
        <br><br>

        <label>Enter number to search:</label>
        <input type="number" name="search" required>
        <br><br>

        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Convert input string into an array
        $numbers = explode(",", $_POST["numbers"]);

        // Remove spaces and convert values to integers
        $numbers = array_map('intval', $numbers);

        $search = (int)$_POST["search"];

        if (in_array($search, $numbers)) {
            echo "<h3>Result: true</h3>";
            echo "The number $search is present in the array.";
        } else {
            echo "<h3>Result: false</h3>";
            echo "The number $search is not present in the array.";
        }
    }
    ?>

</body>
</html>