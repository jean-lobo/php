<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="buildmidlabs.php" method="get">
  <input type="text" name="color">
  <input type="text" name="pluralnoun">
  <input type="text" name="celebrity">
</form>
<?php
$color=$_GET['color'];
$pluralnoun=$_GET['pluralnoun'];
$celebrity=$_GET['celebrity'];
echo "ROSES ARE $color";
echo "$pluralnoun are blue";
echo "i love $celebrity" ;

?>
  </body>
</html>
