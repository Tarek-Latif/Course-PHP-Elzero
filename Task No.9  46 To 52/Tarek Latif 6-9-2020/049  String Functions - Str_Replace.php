<?php
/*
Str_Replace (Search اجبارى , Replace اجبارى, String اجبارى, Count اختيارى)
*/
echo "<h2> Exp No.1 ( str_replace String ) </h2>";
$str1 = " I Love PHP Too Much Because PHP Is Good And Easy Language And PHP IS Famous";
echo $str1 . "<br>";
$str2 = str_replace("PHP" , "CSS" , $str1 , $cou);
echo $str2 . "<br>";
echo "Replacements count Is " . $cou ;
////////////////////////////////////////////
echo "<h2> Exp No.2 ( str_replace String ) </h2>";

$str1 = " I Love PHP Too Much Because PHP Is Good And Easy Language And PHP IS Famous";
echo $str1 . "<br>";

// Explode Converted To Array

$str1 = explode(" " , $str1 );
echo "<pre>";
print_r($str1);
echo "</pre>";

// Replace PHP With Javascript Inside The Array

$str1 = str_replace ("PHP","JavaScript", $str1 );
echo "<pre>";
print_r($str1);
echo "</pre>";

// Joined The array Into String

$str1 = implode ("  " , $str1);
echo $str1;

/// اذا بحثت بداحل نص سوف تكون النتيجة داخل نص
/// اذا بحثت بداخل مصفوفه سوف تكون النتيجة داخل مصفوفة

///////////////////////////////////////////////

echo "<h2> Exp No.3 ( str_replace String ) </h2>";

$str1 = " I Love PHP Too Much Because PHP Is Good And Easy Language And PHP IS Famous";
echo $str1 . "<br>";

$str1 = str_replace (array ("PHP","IS", "Easy" ),"Replaced" , $str1 );
echo $str1;
///////////////////////////////////////////////////
echo "<h2> Exp No.4 ( str_replace String ) </h2>";

$str1 = " I Love PHP Too Much Because PHP Is Good And Easy Language And PHP IS Famous";
echo $str1 . "<br>";

$str1 = str_replace (array ("PHP","IS", "Easy"),array(" @ " , " # "," $ "), $str1 );
echo $str1;
// اذا كانت عد العناصر داخل المصفوفه لا تتساوى يتم وضع مسافة فارغه مكان الحرف
///////////////////////////////////

