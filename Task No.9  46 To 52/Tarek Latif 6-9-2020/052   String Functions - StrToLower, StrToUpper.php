<?php
/*
Strtolower (string) طباعة الحروف صغيرة
strtoupper (string) طباعة الحروف كبيرة
lcfirst(string)تصغير اول حرف
ucfirst(string)تكبير اول حرف
ucwords (string)اول حرف من كل كلمة يتم تحويلها لكابيتل حرف كبير
*/
echo "<h2> Exp No.1 ( Strtolower String ) </h2>";
$str = "Hello I Love PHP So Much ";
$lower = Strtolower($str);
echo $lower;
/////////////////////////////////////////////
echo "<h2> Exp No.2 ( strtoupper String ) </h2>";
$str = "Hello I Love PHP So Much ";
$upper = strtoupper($str);
echo $upper;
/////////////////////////////////////////////
echo "<h2> Exp No.3 ( lcfirst String ) </h2>";
$str = "Hello I Love PHP So Much ";
$first = lcfirst($str);// تصغير اول حرف 
echo $first;
/////////////////////////////////////////////
echo "<h2> Exp No.4 ( ucfirst String ) </h2>";
$str = "hello I Love PHP So Much ";
$first = ucfirst($str);// تكبير اول حرف 
echo $first;
/////////////////////////////////////////////
echo "<h2> Exp No.5 ( ucwords String ) </h2>";
$str = "hello I love pHP so much ";
$firstALLWord = ucwords($str);//اول حرف من كل كلمة يتحول لحرف كبير كابيتل
echo $firstALLWord;
/////////////////////////////////////////////
echo "<h2> Exp No.6 ( strtolower & ucwords String ) </h2>";
$str = "Hello I love PHP So Much ";
echo $str . "<br />";
$str = strtolower ($str);
echo $str . "<br />";
$firstALLWord = ucwords($str);//اول حرف من كل كلمة يتحول لحرف كبير كابيتل
echo $firstALLWord;
/////////////////////////////////////////////