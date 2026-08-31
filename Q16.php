<!-- Find the number of occurence of a word in a paragraph. -->

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
    <form action = "Q16.php" method="POST">
        
    <label for="paragraph">Enter your paragraph:</label><br>
    <textarea id="paragraph" name="paragraph" rows="5" cols="40" placeholder="Type your text here..."></textarea><br><br>
    <label>Enter the search word: </label>
    <input type="text" name="word"><br> 
    <button type="submit">Submit</button>
</form>
        

<?php

$para=$_POST["paragraph"];
$word=trim($_POST["word"]);

 $count= substr_count(strtolower($para), strtolower($word));
 echo "The word has occured $count times";

           
?>
</body>
</html>