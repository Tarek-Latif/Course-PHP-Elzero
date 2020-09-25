<?php
/*
Comparison Operators
[ == ] Equals
*/
$a = 200;
$b = 200 ;
if ($a == $b ) {   // Equal ? 

    echo "True" ;
} else {
    echo "False";
}

echo "<br/>";
/*
Comparison Operators
[ === ] Identical (Data type + Value)
*/

$W = 100; // Integer
$T = "200"; // String

echo gettype($W) . "<br>" . gettype($T) . "<br>";
if ( $W === $T) {
    echo "True";
} else {
    echo "False";
}

echo "<br/>";
/*
Comparison Operators
[ != ] Not Equals
*/

$W = 100; // Integer
$T = 200; // Integer
if ( $W != $T) {
    echo " yes " . $W . " Not Equal " . $T;
} else {
    echo " No " . $W . " Equal " . $T;
}

echo "<br/>";
/*
Comparison Operators
[ !== ] Not Identical
*/

$W = 100; // Integer
$T = "100"; // String
if ( $W !== $T) {
    echo " yes " . $W . " Not Equal " . $T . "<br>";
    echo "Because \$T Is " . gettype($W) . "<br>";
    echo "And \$T Is " . gettype ($T) ;
} else {
    echo " No " . $W . " Not Equal " . $T . "<br>";
    echo "Because \$T Is " . gettype($W) . "<br>";
    echo "And \$T Is " . gettype ($T) ;
}

echo "<br/>";
/*
Comparison Operators
[ <> ] Not Equals
*/

$W = 100; // Integer
$T = 100; // Integer
if ( $W <> $T) {
    echo " True " ;
} else {
    echo " False " ;
}

echo "<br/>";
/*
Comparison Operators
[ < ] Less Than
*/

$W = 200; // Integer
$T = 100; // Integer
if ( $W < $T) {  // IF ( 200 < 100 )
    echo " True " ;
} else {
    echo " False " ;
}

echo "<br/>";
/*
Comparison Operators
[ <= ] Less Than
*/

$W = 200; // Integer
$T = 200; // Integer
if ( $W <= $T) {  // IF ( 200 <= 200 )
    echo " True " ;
} else {
    echo " False " ;
}

echo "<br/>";
/*
Comparison Operators
[ > ] Larger Than
*/

$W = 200; // Integer
$T = 200; // Integer
if ( $W > $T) {  // IF ( 200 > 200 )
    echo " True " ;
} else {
    echo " False " ;
}

echo "<br/>";
/*
Comparison Operators
[ > ] Larger Than
*/

$W = 200; // Integer
$T = 200; // Integer
if ( $W >= $T) {  // IF ( 200 >= 200 )
    echo " True " ;
} else {
    echo " False " ;
}