<?php
// Initialize error messages
$usernameError = "";
$emailError = "";
$genderError = "";
$mobileError = "";
$countryError = "";
$passwordError = "";
$confirmPasswordError = "";

$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form values
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $mobile = trim($_POST["mobile"]);
    $country = isset($_POST["country"]) ? $_POST["country"] : "";
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Username validation
    if (empty($username)) {
        $usernameError = "Username is required";
    } elseif (!preg_match("/^[a-zA-Z0-9 ]+$/", $username)) {
        $usernameError = "Username should contain only alphanumeric characters and spaces";
    }

    // Email validation
    if (empty($email)) {
        $emailError = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
    }

    // Gender validation
    if (empty($gender)) {
        $genderError = "Please select gender";
    }

    // Mobile validation
    if (empty($mobile)) {
        $mobileError = "Mobile number is required";
    } elseif (!preg_match("/^\+?[0-9]+$/", $mobile)) {
        $mobileError = "Mobile number should contain only numbers and an optional + symbol";
    }

    // Country validation
    if (empty($country)) {
        $countryError = "Please select country";
    }

    // Password validation
    if (empty($password)) {
        $passwordError = "Password is required";
    } elseif (strlen($password) < 8) {
        $passwordError = "Password must be at least 8 characters long";
    }

    // Confirm password validation
    if (empty($confirmPassword)) {
        $confirmPasswordError = "Please confirm your password";
    } elseif ($password != $confirmPassword) {
        $confirmPasswordError = "Passwords do not match";
    }

    // If there are no errors
    if (
        empty($usernameError) &&
        empty($emailError) &&
        empty($genderError) &&
        empty($mobileError) &&
        empty($countryError) &&
        empty($passwordError) &&
        empty($confirmPasswordError)
    ) {
        echo "<h2 style='color:green;'>Registration Successful!</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style>
        .error {
            color: red;
        }

        .field-error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>

<h2>Registration Form</h2>

<form method="post" action="Q3.php">

    <!-- Username -->
    Username:
    <input type="text" name="username"
           value="<?php echo htmlspecialchars($username); ?>">

    <?php if (!empty($usernameError)) { ?>
        <span class="field-error">* <?php echo $usernameError; ?></span>
    <?php } ?>

    <br><br>


    <!-- Email -->
    Email Address:
    <input type="text" name="email"
           value="<?php echo htmlspecialchars($email); ?>">

    <?php if (!empty($emailError)) { ?>
        <span class="field-error">* <?php echo $emailError; ?></span>
    <?php } ?>

    <br><br>


    <!-- Gender -->
    Gender:
    <input type="radio" name="gender" value="Male"
        <?php if ($gender == "Male") echo "checked"; ?>> Male

    <input type="radio" name="gender" value="Female"
        <?php if ($gender == "Female") echo "checked"; ?>> Female

    <?php if (!empty($genderError)) { ?>
        <span class="field-error">* <?php echo $genderError; ?></span>
    <?php } ?>

    <br><br>


    <!-- Mobile -->
    Mobile No:
    <input type="text" name="mobile"
           value="<?php echo htmlspecialchars($mobile); ?>">

    <?php if (!empty($mobileError)) { ?>
        <span class="field-error">* <?php echo $mobileError; ?></span>
    <?php } ?>

    <br><br>


    <!-- Country -->
    Country:
    <select name="country">
        <option value="">-- Select Country --</option>
        <option value="India" <?php if ($country == "India") echo "selected"; ?>>
            India
        </option>
        <option value="USA" <?php if ($country == "USA") echo "selected"; ?>>
            USA
        </option>
        <option value="UK" <?php if ($country == "UK") echo "selected"; ?>>
            UK
        </option>
        <option value="Canada" <?php if ($country == "Canada") echo "selected"; ?>>
            Canada
        </option>
        <option value="Australia" <?php if ($country == "Australia") echo "selected"; ?>>
            Australia
        </option>
    </select>

    <?php if (!empty($countryError)) { ?>
        <span class="field-error">* <?php echo $countryError; ?></span>
    <?php } ?>

    <br><br>


    <!-- Password -->
    Password:
    <input type="password" name="password">

    <?php if (!empty($passwordError)) { ?>
        <span class="field-error">* <?php echo $passwordError; ?></span>
    <?php } ?>

    <br><br>


    <!-- Confirm Password -->
    Confirm Password:
    <input type="password" name="confirm_password">

    <?php if (!empty($confirmPasswordError)) { ?>
        <span class="field-error">* <?php echo $confirmPasswordError; ?></span>
    <?php } ?>

    <br><br>


    <!-- Terms and Conditions -->
    <input type="checkbox" name="terms" value="Agreed">
    I agree to the terms and condition

    <br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>
