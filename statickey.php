<?php
function myTest() {
static $x=0;
echo $x;
$x++;
echo $x;
}
myTest();
?>
//when function is completed execution all of its variables are deleted ,
To not to get deleted and to further use we use static .
