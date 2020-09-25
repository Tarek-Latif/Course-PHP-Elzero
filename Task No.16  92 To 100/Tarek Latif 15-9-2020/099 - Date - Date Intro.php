<?php
// date (format,timestamp) لو لم يتم كتابة ال timestamp يقوم بطباعة الوقت الحالى
// Date بيقوم بعمل تنسيق للوقت
// echo Time ();
//echo date_default_timezone_set('Africa/cairo'); // set To Cairo Timezone
//echo date('Y-M-D h:i:s') . '<br>';
// echo date_default_timezone_get();// طباعة الوقت الحالى للسيرفر
// echo time(); يقوم بعرض الوقت كما فى نظام تشغيل اليونكس
///////////////////////////////////////////////////////

echo "<h2> Exp No.1  ( Print Time Next Month )  </h2>";

date_default_timezone_set('Africa/cairo');
$NextMonth = time() + ( 30 * 24 * 60 * 60 );

echo date('Y-m-d h:i:s' , $NextMonth) . '<br>';
///////////////////////////////////////////////////
echo "<h2> Exp No.2  ( Print Time Next Week )  </h2>";

date_default_timezone_set('Africa/cairo');
$Nextweek = time() + ( 7 * 24 * 60 * 60 );

echo date('Y-m-d h:i:s' , $Nextweek) . '<br>';
///////////////////////////////////////////////////