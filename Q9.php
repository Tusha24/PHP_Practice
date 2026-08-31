//Check if the email address is valid or not 

<!DOCTYPE html>
<html>
<body>

<form method="post">
    Email:
    <input type="text" name="email">
    <input type="submit" value="Check">
</form>

<?php



    $email = $_POST["email"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email address";
    } else {
        echo "Invalid email address";
    }


?>

</body>
</html>
