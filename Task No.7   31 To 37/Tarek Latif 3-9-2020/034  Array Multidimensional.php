<?php
/*
Array :
[3] Multidiminsional Array
Syntax :
Array (
Array (Element,Element,Element)
Array (Element,Element,Element)
Array (Element,Element,Element)
);
*/
/////////////////////////////////////
echo "<h2> Exp No.1   ( Multidiminsional Array )  </h2>";
$diet = array (
    array("Apple","Banana","Milk"),/// Index No 0
    array("Meat","Apple","Egg"),/// Index No 1
    array("Fish","Banana"),/// Index No 2
    array("Rice","Milk"),/// Index No 3
    array("Bread","Apple","Banana"), /// Index No 4
    array (
        array(1,2,3)
    )
);
echo "<pre>";
print_r($diet);
echo "</pre>";
echo $diet[2][1];
echo "<br>";
echo $diet[5][0][2];
///////////////////////////////////////////////
