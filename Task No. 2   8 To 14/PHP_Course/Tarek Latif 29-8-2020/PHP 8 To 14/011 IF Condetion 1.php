<?php

/*
if ( Condition ) {
    // Code To Run IF The Condition Is true 
} elseif (condition) {
    // Code To Run IF The Condition Is Equal 
} else {
    // Code To Rum IF  The Condition Is False
}
*/

$Num1 = 50;
$Num2 = 500;

if ($Num1 > $Num2 ) {

    echo " Yes " . $Num1 . " Is Larger Than " . $Num2; // True

} elseif ($Num1 == $Num2 ) {

echo " Yes " . $Num1 . " Is Equal " . $Num2; // Equal

} else {

    echo " No " . $Num1 . " Is Smaller Than " . $Num2; // False
}