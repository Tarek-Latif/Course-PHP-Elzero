<?php
/*
Syntax
function Identifier ..... SayHello ($arg1 , $arg2 , $arg3 ) {
    // Function Boody
}
*/
////////////////////////////////////////////////
echo "<h2> Exp No.1   ( Function (arg1 ) )  </h2>";
Function SayHello ($Name) {
    echo "Hello" . $Name . "How Are Tou " . $Name;
}
SayHello ("Tarek");
/////////////////////////////////////////////
echo "<h2> Exp No.2   ( Function ( arg1 , arg2 ) )  </h2>";
function calculateSalaryInDays( $name, $salary ) {
    echo "Hello " . $name . " Your Salary Is " . ($salary *100);
}
 calculateSalaryInDays("Ahmed", "70" );
/////////////////////////////////////////////
echo "<h2> Exp No.3   ( Function ( arg1 , arg2 ) )  </h2>";
function generateYears( $Start, $End) {
    echo "<select name='years'>";
    for ( $Year =$Start; $Year <= $End; $Year++ ) {
        echo "<option value='$Year'>" .$Year ."</option>";

    }
    echo "</select>";
}
generateYears("1800","2010");
////////////////////////////////////////////

echo "<h2>Ali Years</h2>";
generateYears("2000","2015"); // Ali

echo "<h2>Tarek Years</h2>";
generateYears("1990","2020"); // Tarek

echo "<h2>Ahmed Years</h2>";
generateYears("1980","2010"); // Ahmed
///////////////////////////////////////////////////////
echo "<h2> Exp No.4   ( Function ( arg1 , arg2 ) )  </h2>";
function calculateYourAgeInDays( $name, $age ) {
    echo "Hello " . $name . "Your Age In Days =";
    echo $age * 365;
    echo "<br>";
}
 calculateYourAgeInDays("Osama", "32"); // Osama Age In Days
 calculateYourAgeInDays("Hassan", "40"); // Hassan Age In Days