<?php
/*
Syntax [1] For Index Arrays
Foreach ( $Array as $Value ) {
    // Code To Be Executed
}
Syntax [2] For Associative Arrays
Foreach ( $Array as $key => $Value ) {
    // Code To Be Executed
}
*/
echo "<h2> Exp No.1  ( Foreach Loop ( For Index Array [1] )  </h2>";

$Countries = array ("Egypt","Saudi Arabia","Qatar","Bahrain","Syria","Sudan","Palestine");

foreach ($Countries as $value) {
    echo $value . "<br>";
}
/////////////////////////////////////////////////////////

echo "<h2> Exp No.1  ( Foreach Loop ( For Associative Arrays ( Key & Value) [2] )  </h2>";

$Countries = array (
    "Eg" => "Egypt",  // Key & Value
    "SA" => "Saudi Arabia", // Key & Value
    "QA" => "Qatar", // Key & Value
    "BA" => "Bahrain", // Key & Value
    "SY" => "Syria", // Key & Value
    "SU" => "Sudan", // Key & Value
    "PA" => "Palestine", // Key & Value
);
foreach ($Countries as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
