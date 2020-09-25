<?php
/*
Trim (Sting,Charlist)
\0
\t
\n new Line
\r Carriage Return
\x0B Vertical Tab
"  " Space
*/
echo "<h2> Exp No.1 ( trim ) </h2>";
$str = "I Love PHP ";
echo var_dump($str) . "<br / >";
$str = " I Love PHP ";
echo var_dump($str) . "<br />";
$trimmed = ltrim ($str);
echo var_dump($trimmed);
/////////////////////////////////////////
echo "<h2> Exp No.2 ( trim ) </h2>";
$str = " I Love PHP ";
echo var_dump($str) . "<br / >";
$str = "     I Love PHP ";/// حساب عدد المسافات من ناحية الشمال
echo var_dump($str) . "<br />";
$trimmed = trim ($str);
echo var_dump($trimmed);
/////////////////////////////////////////
echo "<h2> Exp No.3 ( rtrim ) </h2>";
$str = " I Love PHP ";
echo var_dump($str) . "<br / >";
$str = " I Love PHP       ";/// حساب عدد المسافات من ناحية اليمين
echo var_dump($str) . "<br />";
$trimmed = rtrim ($str);
echo var_dump($trimmed);
/////////////////////////////////////////
/////////////////////////////////////////
echo "<h2> Exp No.4 ( trim ) </h2>";
$str = " I ove PHP o Much ";
echo $str  . "<br / >";
$trimmed = trim($str,"uch");// حذف  عدد من الحروف يمين وشمال 
echo $trimmed ;
/////////////////////////////////////////