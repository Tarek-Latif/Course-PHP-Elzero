<?php
/*
substr_Count(string , substring,start,Length)
*/
echo "<h2> Exp No.1 ( substr_Count ) </h2>";
$str = "I Love PHP So Much Because PHP Is Famous And Cool";
$count = substr_Count($str , "PHP"); //لايجاد عدد مرات تكرار كلمة php
echo $count;
////////////////////////////////////////////////////
echo "<h2> Exp No.2 ( substr_Count ( start,Length) </h2>";
$str = "I Love PHP So Much Because PHP Is Famous And Cool";
$len = strlen ($str);// لايجاد مجموع الاحرف داخل النص
echo $len;
////////////////////////////////////////////////////
echo "<h2> Exp No.3 ( substr_Count ( start,Length) </h2>";
$str = "I Love PHP So Much Because PHP Is Famous And Cool";
$count = substr_Count($str , "PHP",2,20);//لايجاد عدد مرات تكرار كلمة مع تحديد بداية البحث وطول حروف البحث
echo $count;
////////////////////////////////////////////////////
/*
substr_compare(string1,string2,start position,Length,case); // case حساسية الحروف true OR False
*/
echo "<h2> Exp No.4 ( substr_compare ) </h2>";
$str1 = "Hello Zsama";
$str2 = "Xsama";
echo substr_compare($str1,$str2,6);// يتم المقارنه بين نصين من حيث ترتيب الاحرف الابجدية فى اللغة الانجليزية وتحديد مكان المقارنه بالرقم 6
///////////////////////////////////////////////////////
echo "<h2> Exp No.5 ( substr_compare (start position) </h2>";
$str1 = "A Osama";
$str2 = "Osama";
echo substr_compare($str1,$str2,2);// يتم المقارنه بين نصين من حيث ترتيب الاحرف الابجدية فى اللغة الانجليزية وتحديد مكان المقارنه بالرقم 2
//////////////////////////////////////////////////
echo "<h2> Exp No.6 ( substr_compare (Length) </h2>";
$str1 = "A OsamaZero";
$str2 = "Osama";
echo substr_compare($str1,$str2,2);// يتم المقارنه بين نصين من حيث ترتيب الاحرف الابجدية فى اللغة الانجليزية وتحديد مكان المقارنه بالرقم 2
//////////////////////////////////////////////////
echo "<h2> Exp No.7 ( substr_compare (Length) </h2>";
$str1 = "A OsamaZero";
$str2 = "Osama";
echo substr_compare($str1,$str2,2,6);// يتم المقارنه بين نصين من حيث ترتيب الاحرف الابجدية فى اللغة الانجليزية وتحديد مكان المقارنه وطول حروف المقارنة بالرقم 2و6
//////////////////////////////////////////////////
echo "<h2> Exp No.7 ( substr_compare (Length) </h2>";
$str1 = "A OsamaZero";
$str2 = "Osama";
echo substr_compare($str1,$str2,2,5,true);// true غير حساسة للحروف (case)
// يتم المقارنه بين نصين من حيث ترتيب الاحرف الابجدية فى اللغة الانجليزية وتحديد مكان المقارنه وطول حروف المقارنة بالرقم 2و6
//////////////////////////////////////////////////