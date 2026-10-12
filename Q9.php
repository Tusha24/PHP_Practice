<!DOCTYPE html>
<html>
<head>
    <title>String Concatenation</title>
</head>
<body>

<h2>String Concatenation</h2>

<form method="post">
    <label>Enter Short String:</label>
    <input type="text" name="short_string" required>
    <br><br>

    <label>Enter Long String:</label>
    <input type="text" name="long_string" required>
    <br><br>

    <input type="submit" name="submit" value="Create String">
</form>

<?php
if (isset($_POST['submit'])) {

    $shortString = $_POST['short_string'];
    $longString = $_POST['long_string'];

    // Create: Long String + Short String + Long String
    $newString = $longString . " " . $shortString . " " . $longString;

    echo "<h3>Result:</h3>";
    echo "<p><strong>$newString</strong></p>";
}
?>

</body>
</html>
