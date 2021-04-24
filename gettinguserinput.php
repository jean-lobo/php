<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="gettinguserinput.php" method="get">
<input type="text" name="fname">
<input type="submit">
</form>
<?php echo $_GET["fname"];?>
Your name is <?php echo $_GET["fname"];?>
</body>
</html>
