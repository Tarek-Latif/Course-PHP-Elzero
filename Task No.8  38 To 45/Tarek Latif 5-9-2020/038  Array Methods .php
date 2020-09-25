<?php
/*
Array_pop : array_pop(array)  /// Delete and print Last Element In array
*/
echo "<h2> Exp No.1  (  Array_POP ) </h2>";
$langs = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
    "PHP",
);
echo "<pre>";
print_r($langs);
echo"</pre>";
$lastLang=array_pop($langs);
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $lastLang;
/////////////////////////////////////////////
//Array_Shift : arrArray_Shift(array)  /// Delete and print LaFirst Element In array
echo "<h2> Exp No.2  (  Array_Shif ) </h2>";
$langs = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
    "PHP",
);
echo "<pre>";
print_r($langs);
echo"</pre>";
$lastLang=array_shift($langs);
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $lastLang;