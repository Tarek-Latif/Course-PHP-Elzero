<?php

$ticketprice = 450;

if ($ticketprice > 400 && $ticketprice < 500 ) { // 400 - 499

    echo " Your Ticket Price Is " . $ticketprice . " USD You Have 5% Discount ";

} elseif ($ticketprice >= 500 ) { // 500 - ??

echo " Your Ticket Price Is " . $ticketprice . " USD You Have 15% Discount ";

} else {

    echo "Sory Your Ticket Price Is " . $ticketprice . " USD You Have No Discount ";
}