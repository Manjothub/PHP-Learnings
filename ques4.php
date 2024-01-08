<?php

$name = $_POST['name'];
echo "<h3> Hello $name </h3>"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method = "POST">
        Enter Your Name<br>
        <input type="text" name = "name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>