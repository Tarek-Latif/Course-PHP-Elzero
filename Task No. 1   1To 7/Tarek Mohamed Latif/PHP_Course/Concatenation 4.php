<?php
$LossonName ="Concatenation";
$HomePage  = "PHP" . " " . $LossonName;
$Heading   = "Welcome To" .  $LossonName;
$Brief     = "This Losson Talk About " . " " . $LossonName ." And How To Use It";
$Var1      = "Start";
$Var2      = "End";
?>
<!DOCTYPE html1>
<html>
    <head>
        <meata charset="UTF-8">
        <title><?php echo $HomePage?></title>
    </head>
    <body>
  <!--Used Concatenation With Number -->
        <h1><?php echo $Heading;?></h1>
        <p><?php echo $Brief;?></p>
        <p><?php echo $Var1 . " " . "This Is String Concatenation" ." " . $Var2; ?></p>
        <p><?php echo 100 . " " . 55 . "Test" ; ?></p>

        </body>
        </html>