<?php

/*
Syntax 1 : Define(Name , Value , Case-Insensitive);
                   OR 
Syntax 2 : const NAME = falsr OR true

By Default False
*/

$firstName="Tarek";
echo $firstName."<br>"; // variable

Define("FIRST_NAME","Tarek",true); // By Default False
echo first_name; // Constants
echo "<br>";
///////////////////////////////////
// Magic Constants

echo PHP_INT_MAX; // Constants
echo "<br>";
echo __FILE__;  // Path file Constants
echo "<br>";
echo __DIR__; // path Directory
echo "<br>";
echo __LINE__;  // Line Number