<?php
/*
Syntax
function Identifier ..... SayHello ($arg1 , $arg2 , $arg3 ) {
    // Function Boody
    Return;
}
*/
////////////////////////////////////////////////
echo "<h2> Exp No.1   ( Function )  </h2>";
function sayHi(){
    echo "Say Hello"; // Value Null With echo
}
var_dump ( sayHi() ); 
////////////////////////////////////////////////
echo "<h2> Exp No.2   ( Function ( Return ) ) </h2>";
function sayHi1(){
                      // null
}
function sayHi2(){
    return;           // null
}
function sayHi3(){
    return null;        // null
}
var_dump( sayHi1(), sayHi2(),sayHi3() );

////////////////////////////////////////////////
echo "<h2> Exp No.3   ( Function ( Return ) ) </h2>";
function calculateAge( $age ) {
    return $age * 365;
}
echo calculateAge("32");

////////////////////////////////////////////////
echo "<h2> Exp No.4   ( Function ( Return ) ) </h2>";
function multiNum( $num ) {
$result = $num * $num;
return $result;   // Stop Execute Any Thing
    echo "Hello";
}
echo multiNum("10");