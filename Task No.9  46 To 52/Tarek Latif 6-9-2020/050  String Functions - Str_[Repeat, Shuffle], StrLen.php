<?php
/*
Str_Repeat(String (Required),Repeat(Required))
Str_Shuffle(String)
strlen(String)
*/
echo "<h2> Exp No.1 ( Str_Repeat String ) </h2>";
$str = "Tarek <br/>";
$repeat = Str_Repeat($str,10);
echo $repeat;
////////////////////////////////////////////
echo "<h2> Exp No.2 ( Str_Shuffle String ) </h2>";
$str = "Tarek Love PHP ";
$shuffle = Str_Shuffle($str);
echo $shuffle ;
////////////////////////////////////////////
echo "<h2> Exp No.3 ( strlen String ) </h2>";
$str = "Tarek";
$length = strlen($str);
echo $length;
////////////////////////////////////
echo "<h2> Exp No.4 ( strlen String ) </h2>";
$str = "Tarek Latif";
$length = strlen($str);
echo $length;
if ($length > 10 ) {
    echo " Sorry ";
}
////////////////////////////////////
