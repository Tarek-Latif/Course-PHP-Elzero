<?php
/*
Str_Word_Count(String[Required], Format[Optional], Charlist[Optional])
*/
echo "<h2> Exp No.1 ( Str_Word_Count ) </h2>";
$str ="I Love PHP So Much & Although JavaScript"; // ( & )  هذه العلامات لا تحسب كلمة
echo $str . "<br />";
$Count = Str_Word_Count($str);
echo $Count;
/////////////////////////////////
echo "<h2> Exp No.2 ( Str_Word_Count ( array ) </h2>";
$str ="I Love PHP So Much & Although JavaScript"; // ( & )  هذه العلامات لا تحسب كلمة
echo $str . "<br />";
$Count = Str_Word_Count($str,1); // يتم طباعة النص كمصفوفة
echo "<pre>";
print_r($Count);
echo "</pre>";
/////////////////////////////////////////////
echo "<h2> Exp No.3 ( Str_Word_Count ( Acceth Array (key & Value ) </h2>";
$str ="I Love PHP So Much & Although JavaScript"; // ( & )  هذه العلامات لا تحسب كلمة
echo $str . "<br />";
$Count = Str_Word_Count($str,2); // يتم طباعة النص مفتاح وقيمة
echo "<pre>";
print_r($Count);
echo "</pre>";
/////////////////////////////////////////////
echo "<h2> Exp No.4 ( Str_Word_Count ( Acceth Array (key & Value ) </h2>";
$str ="I Love PHP So Much & Although JavaScript"; // ( & )  هذه العلامات لا تحسب كلمة
echo $str . "<br />";
$Count = Str_Word_Count($str,2,"&"); // يتم طباعة النص مفتاح وقيمة ويتم حساب العلامة كانها كلمة عادية
echo "<pre>";
print_r($Count);
echo "</pre>";
/////////////////////////////////////////////
echo "<h2> Exp No.5 ( Str_Word_Count ( Acceth Array (key & Value ) </h2>";
$str ="I Love PHP So Much & Although JavaScript"; // ( & )  هذه العلامات لا تحسب كلمة
echo $str . "<br />";
$Count = Str_Word_Count($str,0,"&"); // يتم طباعة النص كنص ويتم حساب العلامة كانها كلمة عادية
echo "<pre>";
print_r($Count);
echo "</pre>";
/////////////////////////////////////////////////////