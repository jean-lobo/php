<?php
$x=5;//used to access a global variable from within a function
$y=10;
function mytest(){
  global $x,$y;//global key word makes it accessable anywhere in the program inside and outside class
  $y = $x+$y;
}
mytest();
echo $y;
?>
