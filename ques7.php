<!-- Write a PHP script to get the current file name. -->

<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>
