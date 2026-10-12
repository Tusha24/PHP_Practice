<?php

session_start();

require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login.php");
    exit();
}

$username = trim($_POST['username'] ?? "");
$password = $_POST['password'] ?? "";

if ($username == "" || $password == "") {

    $_SESSION['login_error'] = "Username and password are required.";

    header("Location: login.php");
    exit();
}

$sql = "SELECT id, username, password
        FROM registration
        WHERE username = ?";

$stmt = $conn->prepare($sql);

if ($stmt === false) {

    $_SESSION['login_error'] = "Database error.";

    header("Location: login.php");
    exit();
}

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {

    $user = $result->fetch_assoc();

    // Compare password with database value
    if ($password === $user['password']) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        $stmt->close();
        $conn->close();

        header("Location: home.php");
        exit();
    }
}

// Login failed
$stmt->close();
$conn->close();

$_SESSION['login_error'] = "Invalid username or password.";

header("Location: login.php");
exit();

?>
