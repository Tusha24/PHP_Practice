<!-- Calculate the grade of student marks by a student -->

<!-- Calculate the circumference and area of the circle  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "Q15.php" method="POST">
        Enter the grade of the Student:
        <input type="number" name="grade">

        <input type="submit" value="Submit">
</form>

<?php

$grade=$_POST["grade"];

           if ($grade>800 && $grade<=1000) {
            echo "Class I";
           }
           elseif ($grade>600 && $grade<=800){
            echo "Class II";
           }
           elseif ($grade>400 && $grade<=600){
            echo "Class III";
           }
           else {
            echo "Fail";
           }
?>
</body>
</html>