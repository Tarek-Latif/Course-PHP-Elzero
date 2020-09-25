<?php
/*
Syntax :
while ( Expression ) {
    // Statement To Execute
    }
*/
////////////////////////////////////////////////
echo "<h2> Exp No.1  (  While Loop )  </h2>";
$i = 1;
while ($i <= 5 ){
    echo $i++ . "<br>";
}
////////////////////////////////////////////
echo "<h2> Exp No.2  (  While Loop )  </h2>";
$i = 1;
while ($i <= 5 ){
    echo $i . "<br>";
    $i++;
}
/////////////////////////////////////////
echo "<h2> Exp No.3  (  While Loop )  </h2>";
$i = 1;
while ($i <= 5 ):
    echo $i . "<br>";
    $i++;
endwhile;
