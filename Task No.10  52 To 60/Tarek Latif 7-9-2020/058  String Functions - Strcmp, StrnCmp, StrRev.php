<?php
/*
StrCmp (string1,string2) مقارنه بين نصين
StrCmp (string1,string2,Length)  طول النص وعمل مقارنه بين نصين
*/
echo "<h2> Exp No.1 ( StrCmp ) </h2>";
$str1 = "PHP";
$str2 = "PHP";
echo strcmp($str1, $str2);
/////////////////////////////////
echo "<h2> Exp No.2 ( StrCmp ) </h2>";
$str1 = "PHP1";
$str2 = "PHP";
echo strcmp($str1, $str2);
/////////////////////////////////
echo "<h2> Exp No.3 ( StrCmp ) </h2>";
$str1 = "PH";
$str2 = "PHP";
echo strcmp($str1, $str2);
/////////////////////////////////
echo "<h2> Exp No.4 ( strncmp  (Length) ) </h2>";
$str1 = "PHPPHP";
$str2 = "PHP";
echo strncmp($str1, $str2,6);
/////////////////////////////////
/*
strrev(string) طباعة الاسم معكوس فى حروفه
*/
echo "<h2> Exp No.5 ( strrev ) </h2>";
$normal = "Tarek";
echo strrev($normal);
////////////////////////////////////////
