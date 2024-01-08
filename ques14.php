<!-- Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/"). -->

<?php
$all_lines = file('https://www.w3resource.com/');
foreach ($all_lines as $line_num => $line)
 {
 	echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
 }
?>
