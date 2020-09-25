
<?php
//////////////////////////////////////////////
echo "<h2> Exp No.1  ( FOR )  </h2>";
$Langs = array ("HTML","CSS","JavaScript","Ajax","Python","Ruby");
echo "<ul>";
for ($i  = 0; $i <6; $i++) {
    echo "<li>" . $Langs[$i] . "</li>";
}
echo "</ul>";
////////////////////////////////////////////////////
echo "<h2> Exp No.2  ( FOR )  </h2>";
$Langs = array ("HTML","CSS","JavaScript","Ajax","Python","Ruby");
echo count($Langs);  // ايجاد ععد عناصر المصفوفة
echo "<ul>";
for ($i  = 0; $i < count ($Langs); $i++) { 
    echo "<li>" . $Langs[$i] . "</li>";
}
echo "</ul>";