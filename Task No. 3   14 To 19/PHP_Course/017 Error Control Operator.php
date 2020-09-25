<?php
// [@] Error Control Operator
/////////////////////////////////
echo "<h2> Exp 1 ConError Operator [@] </h2>";
echo "<h2> view Eroror</h2>";

$file = fopen("Ali.txt", "r");
echo "<h2> Dont view Eroror Is Used @ </h2>";
$file = @fopen("Ali.txt", "r") or die ("This File Is Not Found Any Error");
////////////////////////////////////////

echo "<h2> Exp 2 ConError Operator [@] </h2>";

$Server = "Localhost";
$User   = "Tarek";
$Pass   = "HelloPHP";
$DB     = "OurDatabase";
@mysqli_connect($Server, $User, $Pass, $DB ) or die ("Thers Something Wrong With Connection");