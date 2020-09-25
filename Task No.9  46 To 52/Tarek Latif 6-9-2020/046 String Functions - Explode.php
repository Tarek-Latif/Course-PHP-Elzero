<?php

/*
Explode : expload(Seprator,String,Limit)  Seprator (اجبارى)= Speces   & String اجبارى = Valubel Name   & Limit اختيارى = Number Cut String
*/
echo "<h2> Exp No.1 ( Explode String ) </h2>";
$str = "Hello I Love PHP";
echo $str . "<br>";
$Tr = explode (" ", $str);
echo "<pre>";
print_r($Tr);
echo "</pre>";
///////////////////////////////////////
echo "<h2> Exp No.2 ( Explode String ) </h2>";
$str = "Hello,I,Love,PHP";
echo $str . "<br>";
$Tr = explode (" ", $str);
echo "<pre>";
print_r($Tr);
echo "</pre>";
///////////////////////////////////////
echo "<h2> Exp No.3 ( Explode String ) </h2>";
$str = "Hello,I,Love,PHP";
echo $str . "<br>";
$Tr = explode (",", $str);
echo "<pre>";
print_r($Tr);
echo "</pre>";
///////////////////////////////////////
echo "<h2> Exp No.4 ( Explode String ) </h2>";
$str = "Hello, I, Love, PHP";
echo $str . "<br>";
$Tr = explode (",  ", $str);
echo "<pre>";
print_r($Tr);
echo "</pre>";
///////////////////////////////////////
echo "<h2> Exp No.5 ( Explode String ) </h2>";
$str = "Hello I Love PHP";
echo $str . "<br>";
$Tr = explode (" ", $str,2);
echo "<pre>";
print_r($Tr);
echo "</pre>";
///////////////////////////////////////
echo "<h2> Exp No.6 ( Explode String ) </h2>";
$str = "Hello I Love PHP";
echo $str . "<br>";
$Tr = explode (" ", $str,-2); /// Hide Last 2 element
echo "<pre>";
print_r($Tr);
echo "</pre>";
///////////////////////////////////////
echo "<h2> Exp No.7 ( Explode String ) </h2>";
$str = "Hello I Love PHP";
echo $str . "<br>";
$Tr = explode (" ", $str,0); /// View all Element One Line
echo "<pre>";
print_r($Tr);
echo "</pre>";
///////////////////////////////////////
echo "<h2> Exp No.8 ( Explode String ) </h2>";
$str = "Widget,header,footer,debug";
echo $str . "<br>";
$Tr = explode (" ", $str);
echo "<pre>";
print_r($Tr);
echo "</pre>";
for ($i = 0; $i < count($Tr); $i++) {
    echo "<link rel ='stylesheet' href='css/" . $Tr[$i] . ".css'>";
}
///////////////////////////////////////