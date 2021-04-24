<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="b.php" method="get">
      <input type="text" name="color" value="nameS">
      <input type="text" name="pluralnoun" value="">
<input type="text" name="celebrity" value="">
<input type="submit" name="" value="submit">
    </form>
    <?php
$color = $_GET["color"];
$pluralnoun = $_GET["pluralnoun"];
$celebrity = $_GET['celebrity'];


    echo "Roses are $color <br>";
    echo "$pluralnoun are blue <br>";
    echo "I love $celebrity <br>";


?>
  </body>
</html>
