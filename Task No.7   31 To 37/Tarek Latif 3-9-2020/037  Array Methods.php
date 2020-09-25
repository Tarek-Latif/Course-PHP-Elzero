<?php
/*
Array_Push : array_Push (Array , value1,value2,value3 , ....) Add element Last Element
*/
echo "<h2> Exp No.1  (  array_Push ) </h2>";

$langs = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
);
echo "<pre>";
print_r($langs); // The Main Array
echo "<pre>";
array_push ($langs, "python","MySQL","Ajax","XML");
echo"<pre>";
print_r($langs); // The Main Array After Adding Me elements
echo "<pre>";
///////////////////////////////////////////////////////
/*
Array_Unshift : Array_Unshift (Array , value1,value2,value3 , ....) Add element First Element
*/
echo "<h2> Exp No.2  (  Array_Unshift ) </h2>";
$langs = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
);
echo "<pre>";
print_r($langs); // The Main Array
echo "<pre>";
Array_Unshift ($langs, "python","MySQL","Ajax","XML");
echo"<pre>";
print_r($langs); // The Main Array After Adding Me elements
echo "<pre>";
///////////////////////////////////////////
