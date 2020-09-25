<?php
/*
Syntax
For ( Expression 1 ; Expression 2 ; Expression 3 ;) {
    Statement To Execute
}

Expression 1 = Intital Counter  بداية العداد
Expression 2 = Condition شرط اذا تحق يبدأ العد بشروط
Expression 3 = فى كل مره يقوم باضافة واحد اى مقدار زيادة العداد
*/
//////////////////////////////////////////////
echo "<h2> Exp No.1  ( FOR )  </h2>";

For ($i = 1 ; $i <= 10 ; $i++) {
    echo $i . "<br>";
}
///////////////////////////////////////////////
echo "<h2> Exp No.2  ( FOR )  </h2>";
?>
<h2> Chose Year </h2>
<select name ="year">
<?php
For ( $year = 1900 ; $year <= 2020 ; $year++) {
    echo "<option value ='$year'>" . $year . " </option>";
}



