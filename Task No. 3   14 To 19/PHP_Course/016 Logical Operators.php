<?php
/*
Logical Operators

[and] Condition No.1  and Condition No.2 and Condition 3
                    OR
[&&] Condition No.1  and Condition No.2 and Condition 3

////////////////////////////////
[xor] One Condition Is True But Not All

////////////////////////////////////////////////
[OR]  Condition 1 Or Condition 2 or All Condition Is True 
                        OR
[|| ]  Condition 1 Or Condition 2 or All Condition Is True 

///////////////////////////////////////////////
[!] Not
///////////////////////////////////////////////
*/
echo "<h2> Exp 1 Condition [And] </h2>";

$Age = 30 ;
$SkillYears = 5;
$HaveCar = "Yes";

if ( $Age > 25 and $SkillYears > 3 and $HaveCar = "Yes" ){
    echo " Accepted ";
}

echo "<h2> Exp 2 Condition [And] </h2>";

$Age = 30 ;
$SkillYears = 5;
$HaveCar = "Yes";

if ( $Age > 28 and $SkillYears > 4 and $HaveCar = "Yes" ){
    echo " Accepted VIP 1 ";
} else if ($Age < 28 and $SkillYears < 4 and $HaveCar ="yes"){
    echo "Accepted VIP 2";
}

echo "<h2> Exp 3 Condition [&&] </h2>";

$Age = 25 ;
$SkillYears = 2;
$HaveCar = "Yes";

if ( $Age > 28 && $SkillYears > 4 && $HaveCar = "Yes" ){
    echo " Accepted VIP 1 ";
} else if ($Age < 28 && $SkillYears < 4 && $HaveCar ="yes"){
    echo "Accepted VIP 2";
}
echo "<h2> Exp 4 Condition [xor] </h2>";

$Age = 20 ;
$SkillYears = 6;
$Languages = 3 ;
if ( $Age > 30 or $SkillYears > 2 or $Languages > 5 ){
    echo " Accepted ";
}

echo "<h2> Exp 5 Condition [OR] </h2>";

$Age = 30 ;
$SkillYears = 4;
$HaveCar = "Yes";
if ( $Age > 28 xor $SkillYears > 4 ){
    echo " Accepted ";
}

echo "<h2> Exp 6 Condition [||] </h2>";

$Age =40;
$Skillyears = 6 ;
$Langs = 4 ;
if ($Age > 30 || $Skillyears >2 || $Langs >2 ) {
    echo "Accepted";
}

echo "<h2> Exp 7 Condition [!] </h2>";

$var1="Tarek";
if (!$var) {
    echo "Tarek";
}

echo "<h2> Exp 8 Condition [!] </h2>";

$var1="Tarek";
if (!($var=="Ali")) {
    echo "True";
}