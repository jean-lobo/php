<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form action="numinput.php" method="get">
<input type="number" name="age">
<input type="submit">  
  </form>
    <?php
    echo $_GET["age"];
    ?>

  </body>
</html>
