<?php
echo "Your Username Is " . $_GET['username'] . "<br>";
echo "Your password Is " . $_GET['password'] . "<br>";
//////////////////////////////////////
$admins = array("osama","tarek","ali");

$username = $_GET['username'];

if (in_array($username, $admins)) {
    echo "Welcome" . $username . " To Control Panel For Admin";
} else {
    echo "Sorry This Username Is No Exist In our Client Area";
}
