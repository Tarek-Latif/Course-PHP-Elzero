<?php

$mainColor = '#FFF'; // Main Color 
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $mainColor = $_POST['color']; // Get The color from the form
    setcookie('Background' , $mainColor, time() + 3600, '/');
}
if (isset($_COOKIE['Background'])){
    $body = $_COOKIE['Background'];
} else {
    $body = $mainColor;
}
// setcookie('Background', " " , time() - 3600, '/'); سطر حذف امر الكوكيز عن طريق انقاص التيم بالسالب
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charest="UTF-8">
        <title> Modify Cookie</title>
    </head>
    </html>
    <body style="Background-color: <?php echo $body;  ?>">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="color" name="color">
                <input type="submit" value="Choose Color">
     </form>
     </body>
     </html>
