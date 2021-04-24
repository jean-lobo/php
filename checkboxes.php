<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <form action="checkboxes.php" method="post">
apples<input type="checkbox" name="fruits[]" value="apples">
oranges<input type="checkbox" name="fruits[]" value="oranges">
pears<input type="checkbox" name="fruits[]" value="pears">
  </form>
  <body>
    <?php
$fruits = $_POST["fruits"];
echo $fruits[1];

    ?>
  </body>
</html>
