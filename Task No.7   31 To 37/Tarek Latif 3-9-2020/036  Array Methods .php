<?php
/*
in_array( Needle,Haystack,Type)
*/
echo "<h2> Exp No.1   (  Search ( in array  ) ) </h2>";
$array = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
    10
);
if (in_array(10,$array,true)) {
    echo "Yes Its Exist";
}
///////////////////////////////////////////
echo "<h2> Exp No.2  (  Search ( in array  ) ) </h2>";
$array = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
    );
$lang = array_search("Css", $array,true);
echo "Yes Its found In Index " . $lang . "And The Value Is " . $array[$lang];
//////////////////////////////////////////////
echo "<h2> Exp No.3  (  Search ( key Exists  ) ) </h2>";
$array = array(
    "HTML",
    "Css",
    "JS",
    "ruby",
    );
    /*
    array_key_exists(Needle, Haystack )
    */
    if (array_key_exists(2,$array)) {
        echo "Yes Its Found" . $array [2];

    }
/////////////////////////////////////////////////
echo "<h2> Exp No.4  (  Search ( key Exists  ) ) </h2>";
    /*
    array_key_exists(Needle, Haystack )
    */

$array = array(
    "HTML"   =>"10%",
    "Css"    =>"30%",
    "JS"     =>"40%",
    "ruby"   =>"50%",
    );

    if (array_key_exists("JS", $array) ) {
        echo "Yes Its Found" ;

    }
    ////////////////////////////////////
