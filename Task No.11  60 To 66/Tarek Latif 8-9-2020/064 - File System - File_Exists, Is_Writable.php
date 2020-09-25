<?php
// echo dirname(__FILE__); هذا الامر لعرض المسار الحالى للملف

// $file = 'C:\xampp\htdocs\PHP_Course\Tarek.txt';
//               OR

echo "<h2> Exp No.1 ( file_exists ) </h2>";
$file = 'Tarek.txt';
if (file_exists($file)) { // لو الملف موجود اطبع هذه الرسالة
    echo 'Good The File [ ' . $file . ' ] Is Found' ;
} else { 
    echo 'Sorry The File [ ' . $file . ' ] Is Not Found' ;
}
///////////////////////////////////////////////
echo "<h2> Exp No.2 ( file_put_contents ) </h2>";

$file = 'Tarek.txt';

if (file_exists($file)) { // لو الملف موجود اطبع هذه الرسالة
    echo 'Good The File [ ' . $file . ' ] Is Found And Put Text Done' ;
    file_put_contents ($file, 'Added With PHP File put Contents'); // اذا وجد الملف سيقوم بوضع هذا النص بداخله

} else { 
    echo 'Sorry The File [ ' . $file . ' ] Is Not Found' ;
}
///////////////////////////////////////////////////////////////////
echo "<h2> Exp No.3 ( file_put_contents ) </h2>";

$file = 'Tarek.txt';

if (file_exists($file)) { // لو الملف موجود اطبع هذه الرسالة
    echo 'Good The File [ ' . $file . ' ] Is Found And Put Text Done' ;
    file_put_contents ($file, 'Added With PHP File put Contents'); // اذا وجد الملف سيقوم بوضع هذا النص بداخله

} else { 
    echo 'Sorry The File [ ' . $file . ' ] Is Not Found But I Created It With PHP' ;
    file_put_contents($file, 'Created By PHP'); // سيقوم بانشاء ملف بنفس الاسم السابق ووضع بداخله نص
}
////////////////////////////////////////////////////////////////////
echo "<h2> Exp No.4 ( is_writable ) </h2>";

$file = 'Tarek.txt';

if (is_writable($file)) { // لو الملف قابل للكتابة علية اطبع هذه الرسالة
    echo 'Good The File [ ' . $file . ' ] Is Writable' ;
    file_put_contents ($file, 'The file Is Writable'); // نعم الملف للكتابة 

} else { 
    echo 'Sorry The File [ ' . $file . ' ] Is Not Witable So I Can Not Add Content To it' ;
    file_put_contents($file, 'Created By PHP'); // سيقوم بانشاء ملف بنفس الاسم السابق ووضع بداخله نص
}
///////////////////////////////////////////////////////////////