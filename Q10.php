<!-- To display string and value within a table  -->

<?php
$name = "John";
$age = 25;
$city = "Kolkata";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Table</title>
</head>
<body>

<table border="1">
    <tr>
        <th>String</th>
        <th>Value</th>
    </tr>

    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>

    <tr>
        <td>Age</td>
        <td><?php echo $age; ?></td>
    </tr>

    <tr>
        <td>City</td>
        <td><?php echo $city; ?></td>
    </tr>
</table>

</body>
</html>
