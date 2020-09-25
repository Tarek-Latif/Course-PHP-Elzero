<?php
echo "<h2> Exp No.1 ( POST ) </h2>";

$admins = array("osama","tarek","ali");

$username = $_POST['username'];// يتم استخدام هذه الامر لارسال البيانات التى تحتوى على كلمة سر حتى لا تظهر اعلى المتصفح

echo " You send The Data With " .  $_SERVER['REQUEST_METHOD'] . " Request " ;
echo "<br>" ;
if (in_array($username, $admins)) {
    echo "Welcome" . $username . " To Control Panel For Admin";
} else {
    echo "Sorry This Username Is No Exist In our Client Area";
}
////////////////////////////////////////////////////////////

echo "<h2> Exp No.2 ( POST ) </h2>";
$admins = array("osama","tarek","ali");
$username = $_POST['username'];// يتم استخدام هذه الامر لارسال البيانات التى تحتوى على كلمة سر حتى لا تظهر اعلى المتصفح

if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (in_array($username, $admins)) {

    echo "Welcome" . $username . " To Control Panel For Admin";// اذا دخلنا من خلال التكست بوكس سوف يعرض لنا رسالة ترجيب
} else {
    echo "Sorry This Username Is No Exist In our Client Area";
}
} else {
    echo "Sorry You Cant Browse This page Directory"; // سوف يعرض رسالة اسف لاننا لم ندخل على الصفحة من خلال التكست بوكس
}

////////////////////////////////////////////////////////////

echo "<h2> Exp No.3 ( POST ) </h2>";
if ($_SERVER['REQUEST_METHOD']=='POST'){
$admins = array("osama","tarek","ali");
$username = $_POST['username'];// يتم استخدام هذه الامر لارسال البيانات التى تحتوى على كلمة سر حتى لا تظهر اعلى المتصفح


    if (in_array($username, $admins)) {

    echo "Welcome" . $username . " To Control Panel For Admin";// اذا دخلنا من خلال التكست بوكس سوف يعرض لنا رسالة ترجيب
} else {
    echo "Sorry This Username Is No Exist In our Client Area";
}
} else {
    echo "Sorry You Cant Browse This page Directory"; // سوف يعرض رسالة اسف لاننا لم ندخل على الصفحة من خلال التكست بوكس
}