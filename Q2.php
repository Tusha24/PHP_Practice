//Take the name as an input from the user and display it 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Q2.php" method="post">
        Name: 
        <input type="text" name="name">

        <input type="submit" value="Submit">

</form>

<?php

$name=$_POST["name"];
echo "Your name is $name"

?>
</body>
</html>