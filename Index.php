<html>
<body>


<?php
echo '<h1>' . getenv('WEBSITE_SITE_NAME') . '</h1>';
echo 'Current PHP version: ' . phpversion() . "<br />";

$i=1;
while($i<=5)
  {
  echo "The number is " . $i . "<br />";
  $i++;
  }

phpinfo();

?>

</body>
</html>
