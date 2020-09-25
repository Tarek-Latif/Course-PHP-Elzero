<?php
/*
array_Fill (Index array,Number Element array,value element);
*/
echo "<h2> Exp No.1 (  array_Fill ) </h2>";
$array = array_fill (2,10,"Tarek");
echo "<pre>";
print_r($array);
echo"</pre>";
///////////////////////////////////////////////
echo "<h2> Exp No.2 (  array_Fill ) </h2>";
$array = array_fill (-2,10,"Tarek");
echo "<pre>";
print_r($array);
echo"</pre>";
///////////////////////////////////////////////
echo "<h2> Exp No.3 (  array_Fill ) </h2>";
$array = array_fill (2,10, array("Tarek","Ahmed","Ali")); // Multy Dunition Array
echo "<pre>";
print_r($array);
echo"</pre>";
///////////////////////////////////////////////
echo "<h2> Exp No.4 (  array_Fill ) </h2>";
$array = array_fill (1,3, array_fill(5,5,"Tarek")); // Multy Dunition Array
echo "<pre>";
print_r($array);
echo"</pre>";
///////////////////////////////////////////////