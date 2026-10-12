<?php

session_start();

// Check whether user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>

<body>

    <h1>Welcome to Home Page</h1>

    <p>
        Welcome,
        <strong>
            <?php echo htmlspecialchars($_SESSION['username']); ?>
        </strong>
    </p>

    <p>You have successfully logged in.</p>

    <a href="logout.php">Logout</a>

</body>
</html>
