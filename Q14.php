<!-- Calculate the circumference and area of the circle  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "Q14.php" method="POST">
        Enter a the radius:
        <input type="number" name="rad">

        <input type="submit" value="Submit">
</form>

<?php

$radius=$_POST["rad"];

            $area = pi() * pow($radius, 2);
            $circumference = 2 * pi() * $radius;
            
            echo "<br>The area of the circle is $area </br>";
            echo "<br>The circumference of the circle is $circumference</br>";
?>
</body>
</html>