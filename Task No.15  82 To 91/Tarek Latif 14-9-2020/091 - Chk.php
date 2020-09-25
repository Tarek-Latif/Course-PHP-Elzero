<?php
session_start (); // لابد يكتب هذا السطر فى اول الاسكريبت
$admins = array("Tarek","Ali","Ahmed","Osama");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {    // لابد ان ياتى الطلب من خلال فورم
    $User =  $_POST['username'];
    if (in_array ($User, $admins)) {

                     // IF Is Admin

       $_SESSION['user'] = $User ; // افتح سيشن باسم user
       echo 'Welcome' . $_SESSION['user'] . 'You Will Be Redirected To Control Panel Area';
       header('REFRESH:3;URL=091 - Control Panel.php');
                                // IF Is  Not Admin

    } else {
            echo 'Sorry You Are Not admin And You Are Not Premitted To See Control Panel';    
    }

} else {
    echo 'Error : You Can Not Brwose This Page Directly';
}