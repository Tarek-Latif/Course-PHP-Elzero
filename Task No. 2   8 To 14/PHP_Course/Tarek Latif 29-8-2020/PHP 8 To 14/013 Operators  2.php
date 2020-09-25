<?php
/*
Assignment Operators
*/
$var3 = 100;
$var3 += 200 ; // $var3 = $var3 + 200 =300
echo $var3 ;

echo "<br/>";
$var3 = 500;
$var4 = 200;
$var3 += $var4;  // $var3 = 100 + 200 = 300
echo $var3 ;

echo "<br/>";
$var3 = 100;
$var4 = 50;
$var3 -= $var4;  // $var3 = 100 - 50 = 50
echo $var3 ;
echo "<br/>";

$currency = 100 ; // 100 Dollar
$currency *= 3.75 ; // $currency = 100 * 3.75 = 375
$currency .= " Riyal Saudi "; // Concatenate This Two String
echo $currency ;

echo "<br/>";
$C = 100;
$C /= 20;
echo $C ;