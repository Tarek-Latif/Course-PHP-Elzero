<?php
/*
Pathinfo(path,Options) طباعة المسار الحالى فى شكل مصفوفة
*/
echo "<h2> Exp No.1 (  Pathinfo ) </h2>";
echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</ore>";
//////////////////////////////////////
echo "<h2> Exp No.2 (  Pathinfo (PATHINFO_DIRNAME) ) </h2>";
echo "<pre>";
print_r(pathinfo(__FILE__,PATHINFO_DIRNAME));// طباعة المسار الحالى فقط بدون مصفوفة
echo "</pre>";
////////////////////////////////////
echo "<h2> Exp No.3 (  Pathinfo (PATHINFO_DIRNAME) ) </h2>";
echo "<pre>";
print_r(pathinfo(__FILE__,PATHINFO_FILENAME));// طباعة المسار الحالى فقط بدون مصفوفة
echo "</pre>";
////////////////////////////////////
echo "<h2> Exp No.4 (  Pathinfo (PATHINFO_DIRNAME) ) </h2>";
$links = pathinfo(__FILE__);

echo $links['dirname'] . "<br>";
echo $links['basename'] . "<br>";
echo $links['extension'] . "<br>";
echo $links['filename'] . "<br>";// طباعة المسار الحالى بدون مصفوفة
////////////////////////////////////