<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="urlget.php" method="get">
<input type="text" name="name">
<input type="number" name="age">
<input type="submit">
</form>
<?php
echo $_GET["name"];
echo $_GET["age"];
?>
</body>
</html>
