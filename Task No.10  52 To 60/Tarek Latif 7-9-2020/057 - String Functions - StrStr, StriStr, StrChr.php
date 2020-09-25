<?php
/*
strstr(string[مطلوب],Search(مطلوب),Before_Search(أختيارى))حساسة للحروف لكامة البحث
OR
strchr(string[مطلوب],Search(مطلوب),Before_Search(أختيارى))حساسة للحروف لكامة البحث
stristr(string[مطلوب],Search(مطلوب),Before_Search(أختيارى))للحروف غير الحساسة
*/
echo "<h2> Exp No.1 ( strstr ) </h2>";
$str = " I Love PHP So Much Because PHP Is cool ";
$char = strstr($str , "PHP");// يعرض الكلمة المراد البحث عنها فى اول النص ويلغى كل الكلمات اللى من قبلها
echo $char;
////////////////////////////////////////////////
echo "<h2> Exp No.2 ( strchr ) </h2>";
$str = " I Love PHP So Much Because PHP Is cool ";
$char = strchr($str , "PHP");// يعرض الكلمة المراد البحث عنها فى اول النص ويلغى كل الكلمات اللى من قبلها
echo $char;
////////////////////////////////////////////////
echo "<h2> Exp No.3 ( strstr ) </h2>";
$str = " I Love PHP So Much Because PHP Is cool ";
$char = strstr($str , "PHP",true);// يتوقف عند الكلمة المراد البحث عنها فى اول النص ويلغى كل الكلمات اللى من بعدها
echo $char;
/////////////////////////////////////////
echo "<h2> Exp No.4 ( stristr ) </h2>";
$str = " I Love PHP So Much Because PHP Is cool ";
$char = stristr($str , "pHp",true);// يتوقف عند الكلمة المراد البحث عنها فى اول النص ويلغى كل الكلمات اللى من بعدها
echo $char; // غير حساسة للحروف
/////////////////////////////////////////