<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        label {
            display: inline-block;
            width: 100px;
        }

        input[type="text"],
        input[type="password"] {
            width: 220px;
            padding: 7px;
        }

        input[type="submit"] {
            padding: 8px 20px;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="login-container">

    <h2>Login</h2>

    <?php
    if (isset($_SESSION['login_error'])) {
        echo '<p class="error">* ' .
             htmlspecialchars($_SESSION['login_error']) .
             '</p>';

        unset($_SESSION['login_error']);
    }
    ?>

    <form action="loginprocess.php" method="post">

        <p>
            <label>Username:</label>
            <input type="text" name="username" required>
        </p>

        <p>
            <label>Password:</label>
            <input type="password" name="password" required>
        </p>

        <p>
            <input type="submit" value="Login">
        </p>

    </form>

</div>

</body>
</html>
