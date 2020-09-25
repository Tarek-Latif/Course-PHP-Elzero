<?php
///////////////////////////////////////////
echo "<h2> Exp No.1  ( For Loop Advanced  )  </h2>";
For ($i = 1; ; $i++) {
    if ($i > 5) {
    break; //  يستخدم هذا الامر لايقاف تكملة الكود عند العدد 20
    }
    echo $i . "<br>";
}
/////////////////////////////////////////
echo "<h2> Exp No.2  ( For Loop Advanced  )  </h2>";
$i = 1;
For ( ; ; $i++) {
    if ($i > 5 ) {
    break; //  يستخدم هذا الامر لايقاف تكملة الكود عند العدد 5
    }
    echo $i . "<br>";
}
///////////////////////////////////////////
echo "<h2> Exp No.3  ( For Loop Advanced  )  </h2>";
$i = 1; // First Expression [ Initial Counter]
For ( ; ; ) {
    if ($i > 5) {   // Second Expression [ Condition]
    break; //  يستخدم هذا الامر لايقاف تكملة الكود عند العدد 5
    }
    echo $i . "<br>";
    $i++;  // Third Expression [ Increment]
}