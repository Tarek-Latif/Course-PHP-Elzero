<?php
/*
Substr (string(اجبارى),start(اجبارى),Length(اختيارى));
*/
echo "<h2> Exp No.1 ( Substr ) </h2>";
$str = "I Love PHP So Much Because PHP Is Famous And Cool";
$piece = substr($str , 18);// قطع نص عند رقم معين نقوم بتحديده
echo $piece;
/////////////////////////////////
echo "<h2> Exp No.2 ( Substr ) </h2>";
$str = "I Love PHP So Much Because PHP Is Famous And Cool";
$piece = substr($str , 18,12);// قطع نص عند رقم معين نقوم بتحديده
echo $piece;
/////////////////////////////////
echo "<h2> Exp No.3 ( Substr ) </h2>";
$str = "I Love PHP So Much Because PHP Is Famous And Cool";
$piece = substr($str , 0,4);// قطع نص عند رقم معين نقوم بتحديده
echo $piece;
/////////////////////////////////
echo "<h2> Exp No.4 ( Substr ) </h2>";
$str = "I Love PHP So Much Because PHP Is Famous And Cool";
$piece = substr($str , -6,4);// قطع نص عند رقم معين نقوم بتحديده
echo $piece;
/////////////////////////////////
echo "<h2> Exp No.5 ( Substr ) </h2>";
$str = "I Love PHP So Much Because PHP Is Famous And Cool";
$piece = substr($str , -7,-5);// قطع نص عند رقم معين نقوم بتحديده
echo $piece;
/////////////////////////////////