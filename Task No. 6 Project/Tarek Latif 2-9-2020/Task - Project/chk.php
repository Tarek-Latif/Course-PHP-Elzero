<?php
session_start();
$admins = array("tarek","Ahmed","ali","hany");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    if (in_array($user,$admins)) {
        // IF IS Admin
        $_SESSION['user'] = $user;
        echo 'Welcome' . $_SESSION['user'] . 'You Will Be Redirected To Home Page Plase Waite .....';
        
        header('REFRESH:2;URL=Templeate/Index.html');

    } else {
        // IF Not Admin
        echo 'Sorry You Are Not Admin and You Are Not Permitted To See Home Page';
        
    }
} else {
    echo 'Error You Can Not Brwose This Page Directly';
}
