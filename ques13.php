<!-- Display string, values within a table -->

<?php

$a = 1000;
$b = 1200;
$c = 1400;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table border = "2px">
        <tr>
        <td>Salary of Mr A is</td><td><?php echo $a ?>$</td>
        </tr>
        <tr>
        <td>Salary of Mr B is</td><td><?php echo $b ?>$</td>
        </tr>
        <tr>
        <td>Salary of Mr C is</td><td><?php echo $c ?>$</td>
        </tr>
    </table>
</body>
</html>