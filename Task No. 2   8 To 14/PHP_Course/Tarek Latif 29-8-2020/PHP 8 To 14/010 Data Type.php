<?php

// Data Type [1]-- ( String )--- Gettype & Var Dump

// Gettype
$var1 = "I Love PHP";
echo "<h2> Get Type </h2>";
echo gettype($var1);

// Var Dump
$var2 = "I Love HTML";
echo "<h2> Get Type </h2>";
echo var_dump($var2);

///////////////////////////////////////
// Data Type [2]-- ( Integer )--- Number
$var3 = 500;
echo "<h2> Get Type </h2>";
echo gettype($var3);

$var4 = 500;
echo "<h2> Var Dump </h2>";
echo var_dump($var4);
///////////////////////////////////////
// Data Type [3]-- ( Boolean )--- True & False

echo "<br/>";
echo "<br/>";
$var5 = False;
echo "<h2> Get Type </h2>";
if (500 < 1000) {
    echo "True";
echo "<br/>";
echo gettype($var5);
echo "<br/>";
echo "<h2> Var Dump </h2>";
echo var_dump($var5);
}
///////////////////////////////////////
// Data Type [4]-- ( Double )---OR Floating Point Number 
echo "<br/>";
$var6 = 10.5;
echo "<h2> Get Type </h2>";
echo gettype($var6);
echo "<br/>";
echo "<h2> Var Dump </h2>";
echo var_dump($var6);
///////////////////////////////////////
// Data Type [5]-- ( Array ) 
echo "<br/>";
$var7=Array(
    "A" => "Val1",
    "B" => "Val2",
    "C" => "Val3",
);
echo "<h2> Get Type </h2>";
echo gettype($var7);
echo "<br/>";
echo "<h2> Var Dump </h2>";
echo var_dump($var7);
///////////////////////////////////////
// Data Type [6]-- ( NULL )
echo "<br/>";
$var8 = NULL;
echo "<h2> Get Type </h2>";
echo gettype($var8);
echo "<br/>";
echo "<h2> Var Dump </h2>";
echo var_dump($var8);
///////////////////////////////////////
// Data Type [7]-- ( Object )
echo "<br/>";
class BOOK {
    function BOOK(){
        $this->genre ="Adventure";
    }
}
$var9 =new BOOK();
echo "<h2> Get Type </h2>";
echo gettype($var9);
echo "<br/>";
echo "<h2> Var Dump </h2>";
echo var_dump($var9);
///////////////////////////////////////
// Data Type [8]-- ( Resource ) For False
echo "<br/>";
$var10 =mysqli_connect("localhost","Tarek","P@$$123","MyDB");
echo "<h2> Get Type </h2>";
echo gettype($var10);
echo "<br/>";
echo "<h2> Var Dump </h2>";
echo var_dump($var10);
///////////////////////////////////////
// Data Type [8]-- ( Resource ) For True
echo "<br/>";
$var11 = fopen('Tarek.txt','r');
echo "<h2> Get Type </h2>";
echo gettype($var11);
echo "<br/>";
echo "<h2> Var Dump </h2>";
echo var_dump($var11);