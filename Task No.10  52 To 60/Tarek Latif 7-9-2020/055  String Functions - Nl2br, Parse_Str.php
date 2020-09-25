<?php
/*
parse_str(String, Array (أختيارى))
*/
echo "<h2> Exp No.1 ( parse_str ) </h2>";
$link = "Name=Tarek&Age=45&Year=2020&Skill=2";
parse_str($link);//// تحليل عنوان النص
echo $Age;
/////////////////////////////////////////
echo "<h2> Exp No.2 ( parse_str ) </h2>";
$link = "Name=Tarek&Age=45&Year=2020&Skill=2";
parse_str($link, $MyArray);////تحليل العنصر كمصفوفة
echo "<pre>";
print_r($MyArray);
echo "</pre>";
/////////////////////////////////////////
/*
nl2br : New Line To Brack Tag <br>
nl2br(Strin, Xhtml)
*/
echo "<h2> Exp No.3 ( \n  ) </h2>";
$str = "Hello I Love PHP \n although \n I Love Ruby \n";
echo $str;
//////////////////////////////
echo "<h2> Exp No.4  <br> </h2>";
$str = "Hello I Love PHP \n although \n I Love Ruby \n";
echo nl2br($str);
//////////////////////////////
echo "<h2> Exp No.5  <br> </h2>";
$str = "Hello I Love PHP <br> although <br> I Love Ruby <br>";
echo nl2br($str,true);
//////////////////////////////