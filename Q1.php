<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
</head>
<body>

<h2>Enter Your Details</h2>

<form method="post" action="">
    Full Name:
    <input type="text" name="fullname" required>
    <br><br>

    Email Address:
    <input type="email" name="email" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    echo "<h3>Submitted Details:</h3>";
    echo "Full Name: " . $fullname . "<br>";
    echo "Email Address: " . $email;
}
?>

</body>
</html>
