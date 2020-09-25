<?php
echo "<h2> Exp No.1   ( Function Advanced )  </h2>";

function sayHello( $user, $age = "Unknown", $skill = 5 ){ // نضع الالجروميت الاختيارى فى اخر السطر والمهم فى اول السطر 
    $result = "Hello " . $user . " Your Age Is " . $age . " And Your Shill Year Is ". $skill;
    return $result;
}
echo sayHello("Osama", "33", 3);

////////////////////////////////////////////////
/*
[1] Function With Arguments
[2] Function Inside Function
[3] IF , Else Condition
[4] Comparison Operators
[5] Concatenation
*/

echo "<h2> Exp No.2   ( Function Advanced )  </h2>";
function getticket ( $user,$age ) {
    $ticket = rand(5000, 1000000);
    if ($age >=30 ) {
        $msg = "Hello " . $user . " Your Age Is " . $age . "<br>";
        $msg .= "You Are Qualified To Get A Ticket Congratz :)" . "<br>";
        $msg .= "Your Ticket ID Is [ <span>" . $ticket . "</span ]";

    } else {
        $msg = "Hello " . $user . " Your Age Is " . $age . "<br>";
        $msg .= "You Are Not Qualified To Get A Ticket Sorry :( " . "<br>";
       
    }
    return $msg;
}
$id = getticket("Osama", 32);
echo $id;

