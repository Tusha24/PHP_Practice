<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>

<h2>Registration Details</h2>

<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    echo "Username: " . $username . "<br>";
    echo "Email Address: " . $email . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Mobile No: " . $mobile . "<br>";
    echo "Country: " . $country . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Confirm Password: " . $confirm_password . "<br>";

    if (isset($_POST['terms'])) {
        echo "Terms and Conditions: Agreed<br>";
    }

}

?>

</body>
</html>
