<?php
/* 
array_rand(array,Number element array)
*/
echo "<h2> Exp No.1 ( array_rand ) </h2>";
$array = array("Osama","ahmed","Ali","Tarek","Sameh");
$randomkey = array_rand($array,3);
echo "<pre>";
print_r($array);
echo "</pre>";
echo $array[$randomkey[0]] . "<br>";
echo $array[$randomkey[1]] . "<br>";
echo $array[$randomkey[2]] . "<br>";
/////////////////////////////
echo "<h2> Exp No.2 ( array_rand ) </h2>";
$array = array("Osama","ahmed","Ali","Tarek","Sameh");
$randomkey = array_rand($array,2);
echo "<pre>";
print_r($randomkey);
echo "</pre>";
echo $array[$randomkey[0]] . "<br>";
echo $array[$randomkey[1]] . "<br>";
/////////////////////////////