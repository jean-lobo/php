<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$pharse = "giraffe academy";
echo $pharse;
echo substr($pharse, 8);
echo str_replace("giraffe","panda",$pharse);
echo substr($pharse, 8, 3);
echo 40;
echo -40.847;
echo 40.998;
echo 5+9;
echo 10%3;
echo 59*8;
echo 4+5*10;
echo mb_strtolower($pharse);
echo mb_strtoupper($pharse);
echo strlen($pharse);
echo $pharse[0];
echo $pharse[1];
echo "<br>";
$pharse[0]="B";
echo $pharse;
$num=10;
echo $num;
$num++;
echo $num;
$num--;
$num=$num+25;
$num +=25;
$num -=5;
echo $num;
echo abs(100);
echo pow(2,4);
echo sqrt(144);
echo max(2,10);
echo min(2,10);
echo round(3.7);
echo ceil(3.3);
echo floor(3.9);
//get user i/p
?>
<form action="a.php" method="get">
Name:<input type="text" name="name">
<input type="number" name="age" value="">
<input type="submit" >
</form>
<br>
<?php
echo $_GET["name"]; ?>
<?php echo $_GET['age']; ?>
<form class="" action="a.php" method="get">
  <input type="number" name="num1" >
<input type="number" name="num2" >
<input type="submit">
<?php echo $_GET['num1']+$_GET['num2']; ?>  
</form>
</body>
</html>
