<?php
$LossonName ="Concatenation";
$HomePage  = "PHP" . " " . $LossonName;
$Heading   = "Welcome To" .  $LossonName;
$Brief     = "This Losson Talk About " . " " . $LossonName ." And How To Use It";

$Languages      = "<ul>";
$Languages     .= "<li>PHP</li>";
$Languages     .= "<li>HTML</li>";
$Languages     .= "<li>CSS</li>";
$Languages     .= "<li>Java Script</li>";
$Languages     .= "</ul>";

?>
<!DOCTYPE html1>
<html>
    <head>
        <meata charset="UTF-8">
        <title><?php echo $HomePage?></title>
    </head>
    <body>
  <!--Used Concatenation More ValVariable -->
        <h1><?php echo $Heading;?></h1>
        <p><?php echo $Brief;?></p>
        <h2> The Languages I Love </h2>

        <?php echo $Languages;?></li>
 
        </body>
        </html>