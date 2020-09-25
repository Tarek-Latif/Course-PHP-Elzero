<?php
$LossonName ="Concatenation";
$HomePage  = "PHP" . " " . $LossonName;
$Heading   = "Welcome To" .  $LossonName;
$Brief     = "This Losson Talk About " . " " . $LossonName ." And How To Use It";
$Languages      = "PHP";
$Languages      .= "HTML";
$Languages      .= "CSS";

?>
<!DOCTYPE html1>
<html>
    <head>
        <meata charset="UTF-8">
        <title><?php echo $HomePage?></title>
    </head>
    <body>
  <!--Used Concatenation Two ValVariable -->
        <h1><?php echo $Heading;?></h1>
        <p><?php echo $Brief;?></p>
        <h2> The Languages I Love </h2>
        <ul>
        <li><?php echo $Languages;?></li>
        <li></Li>
        <li></Li>
        <li></Li>
        </ul>
        </body>
        </html>