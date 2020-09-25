<?php
/*
Str_Split : Str_Split ( String , Length )
Chunk_Split : Chunk_Split ( String , Length , End ) Sting اجبارى & Length اختيارى  & End أختيارى
*/
echo "<h2> Exp No.1 ( Str_Split String ) </h2>";
$str = "Hello I Love PHP ";
echo $str . "<br>";
$Tr = str_split($str);
echo "<pre>";
print_r($Tr);
echo "</pre>";
/////////////////////////////////////////////
echo "<h2> Exp No.2 ( Str_Split String ) </h2>";
$str = "Hello I Love PHP ";
echo $str . "<br>";
$Tr = str_split($str, 3); // Cut Number 3 litter
echo "<pre>";
print_r($Tr);
echo "</pre>";
/////////////////////////////////////////////
echo "<h2> Exp No.3 ( Str_Split String ) </h2>";
$str = "Hello I Love PHP ";
echo $str . "<br>";
$Tr = str_split($str, 100 ); // More Than Litter print on one line
echo "<pre>";
print_r($Tr);
echo "</pre>";
/////////////////////////////////////////////
// Chunk_Split : Chunk_Split ( String , Length (default value 76) , End (Default value \r\n))
echo "<h2> Exp No.4 ( Chunk_Split String ) </h2>";
$str = "Hello I Love PHP ";
echo $str . "<br>";
$Tr = Chunk_Split ($str, 2 );
echo "<pre>";
print_r($Tr);
echo "</pre>";
///////////////////////////////////////////
// Chunk_Split : Chunk_Split ( String , Length (default value 76) , End (Default value \r\n))
echo "<h2> Exp No.5 ( Chunk_Split String ) </h2>";
$str = "Hello I Love PHP ";
echo $str . "<br>";
$Tr = Chunk_Split ($str, 2 );
echo($Tr);
////////////////////////////////////////
echo "<h2> Exp No.6 ( Chunk_Split String ) </h2>";
$str = "HelloILovePHP ";
echo $str . "<br>";
$Tr = Chunk_Split ($str, 3 );
echo($Tr);
//////////////////////////////////////////
echo "<h2> Exp No.7 ( Chunk_Split String ) </h2>";
$str = "HelloILovePHP ";
echo $str . "<br>";
$Tr = Chunk_Split ($str, 3 ," & " );
echo($Tr);
//////////////////////////////////////////
echo "<h2> Exp No.8 ( Chunk_Split String ) </h2>";
$str = "HelloILovePHP ";
echo $str . "<br>";
$Tr = Chunk_Split ($str, 100 ," & " );
echo($Tr);
//////////////////////////////////////////


