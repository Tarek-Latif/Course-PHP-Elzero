<?php
/*
Array_Sum (Array);
*/
echo "<h2> Exp No.1 ( Sum array ) </h2>";
$array = array(20,30,10,40,100);
$sum = array_sum($array);
echo "<pre>";
print_r($array);
echo "</pre>";
echo $sum;
////////////////////////////////////////
echo "<h2> Exp No.2 ( Sum array ) </h2>";
$array = array(20,30,"Osama",40,"Tarek",70.5);
$sum = array_sum($array);
echo "<pre>";
print_r($array);
echo "</pre>";
echo $sum;
////////////////////////////////////////
echo "<h2> Exp No.3 ( Sum array ) </h2>";
$array = array(
    0 => "Tarek",
    1 => 10,
    2 => 10,
    3 => 1.5,
);
$sum = array_sum($array); // sum Value array
echo "<pre>";
print_r($array);
echo"</pre>";
echo $sum;
//////////////////////////////////////
