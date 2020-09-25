<?php
/*
exit (message يتم كتابة هنا الرسالة ) 
die (message يتم كتابة هنا الرسالة )
*/

echo "<h2> Exp No.1  ( exit )  </h2>";

$name = 'Tarek';
echo $name;
exit(); // يقوم هذا الامر بايقاف اى سطر كود بعد هذا الأمر 
// OR 
// exit; من الممكن نكتبها بدون اقواس
echo 'Hello' . $name;
/////////////////////////////////////////////
echo "<h2> Exp No.2  ( exit )  </h2>";

$file = 'Osama.txt'; // لو كان التكست موجود
$handle = fopen($file, 'r')// افتح الملف وقم بالقراءة ما بداخله
or exit("Unable to find $file"); // هنا الملف ليس موجود فيتوقف تنفيذ الاسكريبت ويظهر رسالة بعدم وجود ملف التكست 
echo 'Hello I Will write In file Now'; // جميع هذه الاسطر لن تنفذ لاننا قولنا له توقف كما فى السطر السابق
echo 'Hello I Will write In file Now';
echo 'Hello I Will write In file Now';
////////////////////////////////////////////////////////
echo "<h2> Exp No.3  ( die )  </h2>"; // هى نفس الامر السابق بالظبط

$file = 'Osama.txt'; // لو كان التكست موجود
$handle = fopen($file, 'r')// افتح الملف وقم بالقراءة ما بداخله
or die("Unable to find $file"); // هنا الملف ليس موجود فيتوقف تنفيذ الاسكريبت ويظهر رسالة بعدم وجود ملف التكست 
echo 'Hello I Will write In file Now'; // جميع هذه الاسطر لن تنفذ لاننا قولنا له توقف كما فى السطر السابق
echo 'Hello I Will write In file Now';
echo 'Hello I Will write In file Now';
////////////////////////////////////////////////////////////
