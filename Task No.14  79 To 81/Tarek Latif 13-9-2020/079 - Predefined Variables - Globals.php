<?php
/*
Super Global
Global Scope
*/
//////////////////////////////
echo "<h2> Exp No.1   ( GLOBALS )  </h2>";
$Name = "Tarek"; // هنا المتغير خارج الفانكشن ورغم كده تم طباعته عند استدعاء الفانكش لانه متغير عام
function TestFunc() {
    // function Scope
    echo $GLOBALS['Name'];  // $GLOBALS [index] متغير عام يتم استعائة من داخل او خارج الفانكشن
}
TestFunc();
/////////////////////////////////////////
echo "<h2> Exp No.2   ( GLOBALS )  </h2>";
$GLOBALS['name'] = "Osama"; 
function SunFunc() {
echo "Echo From Inside The Function " . $GLOBALS['name'] . "<br>";
}
SunFunc();
echo "Echo From Outside The Function " . $GLOBALS['name'] . "<br>";
/////////////////////////////////////////