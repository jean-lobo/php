<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$grades=array("Jim"=>"A","Pam"=>"B","oscar"=>"c");
echo $grades["Jim"];
echo $grades["oscar"];
$grades["Jim"]="F";
echo $grades["Jim"];
echo count($grades);

?>
  </body>
</html>
