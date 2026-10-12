<?php

// Include database connection
include("connect.php");

// Check whether form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Extract form values
    $username = $_POST["username"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $country = $_POST["country"];
    $password = $_POST["password"];

    // Insert data into registration table
    $sql = "INSERT INTO registration
            (username, email, gender, mobile, country, password)
            VALUES
            ('$username', '$email', '$gender', '$mobile', '$country', '$password')";

    // Check whether data was inserted
    if ($conn->query($sql) === TRUE) {

        // Successful insertion
        header("Location: login.php");
        exit();

    } else {

        // Insertion failed
        header("Location: registration.php");
        exit();
    }
}

?>
