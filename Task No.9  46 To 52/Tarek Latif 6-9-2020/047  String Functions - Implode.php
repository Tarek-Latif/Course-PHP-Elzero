<?php
/*
Implode (Separator , Array)
OR
Join (Separator , Array) الاسم المستعار
*/
//////////////////////////////////////
echo "<h2> Exp No.1 ( Implode String ) </h2>";
$Tr = array ("Ahmed","Mahmoud","Tarek","Ali");
$str = implode (" & ",$Tr); /// Separator  أختيارى
echo "Hello Our Moderators Name Is : " . $str;
/////////////////////////////////////
echo "<h2> Exp No.2 ( Join String ) </h2>";
$Tr = array ("Ahmed","Mahmoud","Tarek","Ali");
$str = Join (" & ",$Tr); /// Separator  أختيارى
echo "Hello Our Moderators Name Is : " . $str;
/////////////////////////////////////