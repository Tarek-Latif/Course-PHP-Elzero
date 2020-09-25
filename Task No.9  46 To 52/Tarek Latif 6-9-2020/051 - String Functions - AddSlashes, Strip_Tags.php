<?php
/*
addslashes(string)
stripslashes (Strig)
strip_tags(string , Allow)
*/
echo "<h2> Exp No.1 ( addslashes String ) </h2>";
$str = "T' Will Go' At 6 O'Clock";
echo $str . "<br />";
$skipped = addslashes($str);// يقوم بعمل الغاء لعلامة السمى كولم حتى لا تتسبب فى عمل مشاكل داخل قاعدة البيانات
echo $skipped;
/////////////////////////////
echo "<h2> Exp No.2 ( stripslashes String ) </h2>";
$str = "T  Will 'Go' At 6 O'Clock";
echo $str . "<br />";
$skipped = stripslashes($str);// عمل تنظيف للنتيجة بعد حذف السمى كولم
echo $skipped . "<br />";
$clean = stripslashes($skipped);
echo $clean;
/////////////////////////////
echo "<h2> Exp No.3 ( Strip_tags String ) </h2>";
$str = "I Love <b>PHP </b> Go To <a href = 'php.net'>PHP.Net</a> to Learn <i>PHP</i>";

echo $str . "<br />";
$stripped = Strip_tags($str);// حذف التاجات الخاصة بالاتش تى ام 
echo $stripped;
/////////////////////////////
echo "<h2> Exp No.4 ( Strip_tags String ) </h2>";
$str = "I Love <b>PHP </b> Go To <a href = 'php.net'>PHP.Net</a> to Learn <i>PHP</i>";

echo $str . "<br />";
$stripped = Strip_tags($str , "<b><i>");// اسمح بوضع التاجين ال <b> <i> 
echo $stripped;
/////////////////////////////