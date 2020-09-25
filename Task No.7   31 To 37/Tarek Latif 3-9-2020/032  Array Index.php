<?php
/*
[1] Index Array  ( Start 0 - 1 - 2 - 3 )
Syntax Array (Element , Element , Element );
*/
//////////////////////////////////
echo "<h2> Exp No.1   ( Index Array ) )  </h2>";
$workers = Array("Ahmed" , "Osama" , "Hassan" , "Ibrahim" , "Nader" , "Galal");
echo "<pre>";
print_r($workers);
echo "</pre>";
echo $workers[3];
////////////////////////////////////////////////
echo "<h2> Exp No.2   ( Index Array ) )  </h2>";
$workers = Array("Ahmed" , "Osama" , "Hassan" , "Ibrahim" , "Nader" , "Galal");
$workers[] = "Ahmed";
$workers[] = "Sayed";
$workers[] = "Khaled";
$workers[] = "Amr";
$workers[] = "Ramdan";
echo "<pre>";
print_r($workers);
echo "</pre>";
echo $workers[5];
/////////////////////////////////////////////
echo "<h2> Exp No.3   ( Index Array ) )  </h2>";
$workers = Array("Ahmed" , "Osama" , 5 , "Ibrahim" , 8 , "Galal");
$workers[] = "Ahmed";
$workers[] = "Sayed";
$workers[] =  3 ;
$workers[] = "Amr";
$workers[] = "Ramdan";
echo "<pre>";
print_r($workers);
echo "</pre>";
echo $workers[10];
/////////////////////////////////////////////
echo "<h2> Exp No.4   ( Index Array ) )  </h2>";
$langs = Array("HTML" , "CSS" , "CSS3" , "JavaScript", array("Jquery","AnglarJS","Ajax"));
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $langs[4][0];
///////////////////////////////////////////////
echo "<h2> Exp No.5   ( Index Array ) )  </h2>";
$langs = Array("HTML","CSS","CSS3","JavaScript","Jquery","AnglarJS","Ajax");
$langs[]  = "Ruby";
$langs[]  = "MySQL";
$langs[0] = "BOOtstrap";  // Changed Indexed No ( 0 )
echo "<ul>";
foreach ($langs as $lang){
    echo "<li>" . $lang . "</li>";
}
echo "</ul>";
echo count($langs) ; /// Number Element Not Number Index
