<?php
/*
For ( Exp1,Exp2,Exp3 ) {
    // Code
}
*/
/////////////////////////////////////////
echo "<h2> Exp No.1   ( All Loop Practice ( For ) )  </h2>";
For ( $i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
////////////////////////////////////
echo "<h2> Exp No.2   ( All Loop Practice ( For ) )  </h2>";
For ( $i = 1; $i <= 5; $i++) {
    if ($i > 5) {
        brak;
    }
    echo $i . "<br>";
}
////////////////////////////////////
echo "<h2> Exp No.3  ( Foreach Loop ( All Loop Practice ( For ) ) </h2>";
$i = 1;
For (; ; $i++) {
    if ($i > 5) {
    break;
    }
    echo $i . "<br>";
}
echo "<h2> Exp No.4  ( All Loop Practice ( For ) )  </h2>";
$i = 1;
For (; ;){

    if ($i > 5) {
    break;
    }
    echo $i . "<br>";
    $i++;
}
///////////////////////////////////////
/*
while ( Expression) {
    /// Code
}
*/
echo "<h2> Exp No.5  (  All Loop Practice (while) )  </h2>";
$i = 1;
while  ( $i <= 5 ) {
    echo $i ."<br>";
    $i++;
}
//////////////////////////////////////////////
echo "<h2> Exp No.6  ( All Loop Practice (while) )  </h2>";
$i = 1;
while  ( $i <= 5 ) :
    echo $i ."<br>";
    $i++;
endwhile;

//////////////////////////////////////////////
echo "<h2> Exp No.7 ( ( All Loop Practice (Do) )  </h2>";
$i = 1;
do {
 echo $i ."<br>";
    $i++;
} while ($i <= 5);
//////////////////////////////////////////////
echo "<h2> Exp No.8 ( All Loop Practice (foreach array as value) )  </h2>";

$Friends = array("Tarek", "Ali", "Ahmed");
foreach ($Friends as $value) {
    echo $value . "<br>";
}
//////////////////////////////////////////////
echo "<h2> Exp No.9 ( All Loop Practice (foreach key & value) )  </h2>";
$Friends = array(
    "Soso" => "Safy",
    "Mido" => "Ahmed",
    "Darsh" => "Hassan",
);
foreach ($Friends as $key => $value) {
    echo $key . "Is The Nice Name  ".$value . "<br>";
}