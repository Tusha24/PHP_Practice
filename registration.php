<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post" action="processreg.php">

    Username:
    <input type="text" name="username" required>
    <br><br>

    Email Address:
    <input type="email" name="email" required>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Mobile No:
    <input type="text" name="mobile" required>
    <br><br>

    Country:
    <select name="country" required>
        <option value="">-- Select Country --</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Canada">Canada</option>
        <option value="Australia">Australia</option>
    </select>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    Confirm Password:
    <input type="password" name="confirm_password" required>
    <br><br>

    <input type="checkbox" name="terms" value="Agreed" required>
    I agree to the terms and condition
    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

</body>
</html>
