<?php
// Strtotime(date, timestamp[now] اختيارى) تحويل النص الى الوقت الحالى

echo "<h2> Exp No.1   (Strtotime )  </h2>";
date_default_timezone_set('Africa/cairo');
$time = strtotime('now');
echo $time . '<br>';
echo date('Y-m-d h:i:s', $time) . '<br>';
///////////////////////////////////////
echo "<h2> Exp No.2   (timestamp[now] )  </h2>";
date_default_timezone_set('Africa/cairo');
$time = strtotime('now',time() - 3600);// ابدأ من الوقت الحالى وانقص ساعه واحده فقط
echo $time . '<br>';
echo date('Y-m-d h:i:s', $time) . '<br>';
//////////////////////////////////////////
echo "<h2> Exp No.3   (timestamp[now] )  </h2>";
date_default_timezone_set('Africa/cairo');
$time = strtotime('+1 day');// ابدأ من اليوم الحالى وزود يوم واحده فقط
echo $time . '<br>';
echo date('Y-m-d h:i:s', $time) . '<br>';
//////////////////////////////////////////
echo "<h2> Exp No.4   (timestamp[now] )  </h2>";
date_default_timezone_set('Africa/cairo');
$time = strtotime('last Friday');// ابدأ من اليوم الحالى وزود يوم واحده فقط
echo $time . '<br>';
echo date('Y-m-d h:i:s', $time) . '<br>';
//////////////////////////////////////////