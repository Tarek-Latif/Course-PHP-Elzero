<?php
/*
Sort : sort (Array , Sorying Type)
*/
/////////////////////////////////////
echo "<h2> Exp No.1 (  Array Sort (SORT_REGULAR ) </h2>";
$langs = array(
    "HTML",
    10,
    "Css",
    "JS",
    20,
    "ruby",
    "PHP",
    15,
);
echo "<pre>";
print_r($langs); // The Main Sort array
echo"<pre>";
sort($langs);
echo"<pre>";
print_r($langs); // The Main Sort array After sort
echo"<pre>";
/////////////////////////////////////////////////////////
echo "<h2> Exp No.2 (  Array Sort ( SORT_STRING ) </h2>";
$langs = array(
    "HTML",
    10,
    "Css",
    "JS",
    20,
    "ruby",
    "PHP",
    15,
);
echo "<pre>";
print_r($langs); // The Main Sort array
echo"<pre>";
sort($langs, SORT_STRING);
echo"<pre>";
print_r($langs); // The Main Sort array After sort
echo"<pre>";
////////////////////////////////////////////////////
// Rsort : resort(array,sorting Type)
echo "<h2> Exp No.3 (  Array Sort ( Rsort (SORT_REGULAR ) </h2>";
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
rsort($langs, SORT_REGULAR); /// prnt array Revrce (معكوس)
echo"<pre>";
print_r($langs); // The Main Sort array After sort
echo"<pre>";
///////////////////////////////////////////////
