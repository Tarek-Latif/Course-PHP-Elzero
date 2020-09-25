<?php
/*
ASort : sort (Array , Sorying Type)
*/
/////////////////////////////////////
echo "<h2> Exp No.1 (  Array Arsort (SORT_REGULAR ) </h2>";
$langs = array(
    "HTML"   => 70,
    "Css"   => 80,
    "JS"    =>40,
    "ruby"  =>55,
    "PHP"   =>60,
);
echo "<pre>";
print_r($langs); // The Main Sort array
echo"<pre>";
arsort($langs, SORT_REGULAR);/// Sorting Value
echo"<pre>";
print_r($langs); // The Main Sort array After sort
echo"<pre>";
//////////////////////////////////////////////////////////
////ARSort : sort (Array , Sorying Type)
echo "<h2> Exp No.2 (  Array asort (SORT_REGULAR ) </h2>";
$langs = array(
    "HTML"   => 70,
    "Css"   => 80,
    "JS"    =>40,
    "ruby"  =>55,
    "PHP"   =>60,
);
echo "<pre>";
print_r($langs); // The Main Sort array
echo"<pre>";
asort($langs, SORT_REGULAR);/// Sorting Value
echo"<pre>";
print_r($langs); // The Main Sort array After sort
echo"<pre>";
//////////////////////////////////////////////////////////
////kSort : ksort (Array , Sorying Type)
echo "<h2> Exp No.3 (  Array kSort (SORT_REGULAR ) </h2>";
$langs = array(
    "HTML"   => 80,
    "Css"   => 45,
    "JS"    =>95,
    "ruby"  =>90,
    "PHP"   =>30,
);
echo "<pre>";
print_r($langs); // The Main Sort array
echo"<pre>";
ksort($langs, SORT_REGULAR);/// Sorting Key
echo"<pre>";
print_r($langs); // The Main Sort array After sort
echo"<pre>";
//////////////////////////////////////////////////////////
////kRSort : kRsort (Array , Sorying Type)
echo "<h2> Exp No.4 (  Array krSort (SORT_REGULAR ) </h2>";
$langs = array(
    "HTML"   => 70,
    "Css"   => 80,
    "JS"    =>40,
    "ruby"  =>55,
    "PHP"   =>60,
);
echo "<pre>";
print_r($langs); // The Main Sort array
echo"<pre>";
krsort($langs, SORT_REGULAR);/// Sorting Key
echo"<pre>";
print_r($langs); // The Main Sort array After sort
echo"<pre>";
//////////////////////////////////////////////////////////