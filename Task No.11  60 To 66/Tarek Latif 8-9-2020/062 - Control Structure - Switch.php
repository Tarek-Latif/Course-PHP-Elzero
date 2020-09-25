<?php
/*
Switch (Expression) {
    Case :
    /// Code
    Break;
}
*/
echo "<h2> Exp No.1 ( switch ) </h2>";
$Browser = "Firefox";
switch($Browser) {

    Case "Google Chrome":  // من الممكن كتابة اكتر من احتمال داخل الاحتمال الواحد
    echo "Your Favourite Brewse Is Firefox";
    Break;

    Case "Opera":
    echo "Your Favourite Brewse Is Firefox";
    Break;

    Case "Firefox":
    echo "Your Favourite Brewse Is Firefox";
    Break;

    default :
    echo "Your Favourite Browse Is Not Here";

}