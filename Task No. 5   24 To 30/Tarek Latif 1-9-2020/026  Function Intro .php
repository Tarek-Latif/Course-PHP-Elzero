<?php
/*
Syntax
function Identifier ..... SayHello ($arg1 , $arg2 , $arg3 ) {
    // Function Boody
}
*/
////////////////////////////////////////////////
echo "<h2> Exp No.1   ( Function )  </h2>";
Function SayHello () {
    echo "Hello PHP";

}
SayHello ();

//////////////////////////////////////////////////
echo "<h2> Exp No.2   ( Function With For )  </h2>";
Function CountForOneToThirty () {
    for ($i = 1; $i <= 10; $i++){
        echo $i ;
    }
}
CountForOneToThirty ();
echo "Hello" . "<br>";
CountForOneToThirty ();
