<?php
//// Array Reverse : array_reverse (Array , Preseve)
echo "<h2> Exp No.1 (  Array Reverse) </h2>";
$langs = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
    "PHP",
);
echo "<pre>";
print_r($langs); // The Main Sort array
echo"<pre>";
$reversed = array_reverse($langs,false);//// false ( By dufult ) 
echo "<pre>";
print_r($langs); // The Main After Revers
echo"<pre>";
//////////////////////////////////////////////////////////
//// Array Reverse : array_reverse (Array , Preseve)
echo "<h2> Exp No.2 (  Array Reverse) </h2>";
$langs = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
    "PHP",
);
echo "<pre>";
print_r($langs); // The Main Sort array
echo"<pre>";
$reversed = array_reverse($langs,true);/// true (keep The Key array)
echo "<pre>";
print_r($langs); // The Main After Revers
echo"<pre>";
//////////////////////////////////////////////////////////
//// Shuffle : Shuffle (Array)
echo "<h2> Exp No.3 (  Array Shuffle) </h2>";
$langs = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
    "PHP",
);
echo "<pre>";
print_r($langs); // The Main Sort array
echo"<pre>";
shuffle($langs); /// Mix All Element In the array ( Rand Elemant)
echo "<pre>";
print_r($langs); // The Main After The Shuffle
echo"<pre>";
///////////////////////////////////////////

