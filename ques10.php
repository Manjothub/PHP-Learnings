<!-- Check whether the page is called from 'https' or 'http' -->

<?php
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https is enabled';
}
else
{
echo 'http is enabled'."\n";
}
?>
