<?php
/*
Arithmetic Operators
[ + ] Addition
*/
$var1 = 1000;
$var2 = 2000;
$var3 = 3000;
echo  $var1 + $var2 + $var3  ;  // 1000+2000+3000
echo "<br/>";

/*
Arithmetic Operators
[ - ] Subtraction
*/
$var1 = 10000;
$var2 = 2000;
$var3 = 3000;
echo  $var1 - $var2 - $var3  ;  // 10000-2000-3000
echo "<br/>";

/*
Arithmetic Operators
[ * ] Multiplication
*/
$var1 = 100;
$var2 = 200;
echo  $var1 * $var2  ;  // 100-200
echo "<br/>";

/*
Arithmetic Operators
[ / ] Division
*/
$var1 = 100;
$var2 = 20;
echo  $var1 / $var2  ;  // 100/20
echo "<br/>";

/*
Arithmetic Operators
[ % ] Modulus
*/
$var1 = 119;
$var2 = 20;
echo  $var1 % $var2  ;  // 119 % 20
echo "<br/>";

echo "<h2> Exp  Operators  </h2>";
$var1 = 100;
$var2 = 400;
$var3 = 200;
if ($var1 + $var2 - $var3 == 300){
    echo "True";
}
echo "<h2> Exp  Operators  </h2>";
$var1 = 2;
$var2 = 3;
$var3 = 4;
if (($var1 + $var2) * $var3 == 20){
    echo "True";
}
echo "<h2> Exp  Assignment Operators  </h2>";
$var1 = 2;
$var1 += 10;
echo $var1;
echo "<h2> Exp  Assignment Operators  </h2>";
$var1 = 10;
$var1 /= 20;
echo $var1;
echo "<h2> Exp  Assignment Operators  </h2>";
$var1 = 100;
$var2 = 100;
if ($var1 == $var2){
    echo "True";
}
echo "<h2> Exp  Assignment Operators  </h2>";
$var1 = 100;
$var2 = 200;
if ($var1 != $var2){
    echo "True";
}
echo "<h2> Exp  Assignment Operators  </h2>";
$var1 = 100;
$var2 = 200;
if ($var1 <> $var2){
    echo "True";
}
echo "<h2> Exp  Assignment Operators  </h2>";
$var1 = 100;
$var2 = 100;
if ($var1 === $var2){
    echo "True";
}
echo "<h2> Exp  Assignment Operators  </h2>";
$var1 = 100;  // Integer
$var2 = "100"; // string
if ($var1 !== $var2){
    echo "True";
}
echo "<h2> Exp  Assignment Operators  </h2>";
$var1 = 100;  
$var2 = 100; 
if ($var1 >= $var2){
    echo "True";
}

