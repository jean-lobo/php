<?php
$phrase= "giraffe academy";
echo strlen($phrase);//length of string
echo str_word_count($phrase);//count of words
echo strrev($phrase);//reverse of string
echo strpos($phrase,8,3);//specific text within a string that is position
echo str_replace("giraffe","horse",$phrase);
?>
