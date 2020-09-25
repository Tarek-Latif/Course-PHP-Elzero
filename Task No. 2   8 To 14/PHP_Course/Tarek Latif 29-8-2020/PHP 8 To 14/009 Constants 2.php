<?php

// Used Constants With IF

define ("SITE_STATUS", "Close");
if (SITE_STATUS == "Open"){

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
} else {
    echo "Website Is Closed For Maintenance";
}