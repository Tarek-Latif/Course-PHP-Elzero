<?php
/*
strpos(string[اجباررى], find[اجبارى],Offset[اختيارى])حروف حساسة
strpos(string[اجباررى], find[اجبارى],Offset[اختيارى])حروف غير حساسة
strrpos(string[اجباررى], find[اجبارى],Offset[اختيارى])يبدأ التحرك من اليمين لكن يبدا العد من الشمال وغير حساسة للحروف
strripos(string[اجباررى], find[اجبارى],Offset[اختيارى])حروف  حساسة يبدأ العد من اليمين لايجاد كلمة معينة
*/
echo "<h2> Exp No.1 ( strpos ) </h2>";
$str = "I Love php So Much Becase PHP Is Famous And Vool Language";
$pos = strpos($str, "PHP",8); // ايجاد مكان كلمة داخل النص والحروف حساسة مع النص
echo $pos;
//////////////////////////////////////////
echo "<h2> Exp No.2 ( strpos ) </h2>";
$str = "I Love php So Much Becase PHP Is Famous And Vool Language";
$pos = stripos($str, "php",8); // ايجاد مكان كلمة داخل النص والحروف غير حساسة مع النص
echo $pos;
//////////////////////////////////////////
echo "<h2> Exp No.3 ( strpos ) </h2>";
$str = "I Love php So Much Becase PHP Is Famous And Vool Language";
$pos = strrpos($str, "php"); // ايجاد مكان كلمة داخل النص
echo $pos;
//////////////////////////////////////////
echo "<h2> Exp No.4 ( strpos ) </h2>";
$str = "I Love php So Much Becase PHP Is Famous And Vool Language";
$pos = strrpos($str, "php", -8); //وغير حساسة للحروف ايجاد مكان كلمة داخل النص
echo $pos;
//////////////////////////////////////////
echo "<h2> Exp No.5 ( strpos ) </h2>";
$str = "I Love php So Much Becase PHP Is Famous And Vool Language";
$pos = strripos($str, "php", -33); //  من اليمين وحساسة للحروف ايجاد مكان كلمة داخل النص
echo $pos;
//////////////////////////////////////////