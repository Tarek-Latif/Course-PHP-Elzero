<?php
/*
Arrays
[2] Associative Array
Syntax :
array (
    key1 ( Integer & String Only ) => value1 ( Any Data Type),
    key2 => value 2,
    key3 => value 3,
);

key Must Be Uniqe لا يمكن تكرارها داخل المصفوفة
value Can Be The same يمكن تكرارها داخل المصفوفة
*/
////////////////////////////////////////////

$langs = array ("HTML","HTML5","CSS","CSS3","JS","PHP");
echo "<ul>";
for ( $lang = 0; $lang < count($langs); $lang++) {
    echo "<li>" . $langs[$lang] . "</li>";
}
echo "</ul>";
///////////////////////////////////////////////
echo "<h2> Exp No.2   ( Associative Array ( Key & Value ) )  </h2>";
$langs = array (
    True      =>"50%", /// Key لا يمكن تكراره  &  Value يمكن تكرار داخل المصفوفة
    false     =>"70%",  /// Key & Value
    Null       =>"60%",    /// Key & Value
    " "      =>"80%",     /// Key & Value
    "JS"        =>"90%", /// Key & Value
    "PHP"       =>"50%",   /// Key & Value
);
$langs["MySQL"] = "75%";
echo "<pre>";
print_r($langs);
echo "</pre>";
echo "<ul>";
foreach ($langs as $lang => $progress ){
    echo "<li> My Progress In " . $lang . " Is => " . $progress . "</li>";
}
echo "</ul>";