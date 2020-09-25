<?php
/*
SEEK_CUR سوف يقوم باسقاط الحرف من منتصف الجمله حيث يتم تحديد بداية الاندكس ونهاية الاندكس
Fclose (Handle) يستخدم لغلق الملف الذى قمنا بفتحة عن طريق امر fopen

*/
/////////////////////////////
echo "<h2> Exp No.1   ( Fclose )  </h2>";
$fileHandle = fopen('tarek.txt', 'r+');
fseek($fileHandle, 3);// سوف يتوقف عند الاندكس رقم 3
fwrite($fileHandle, 'D');// سوف يقوم باسقاط هذا الحرف فى الاندكس رقم 3 من النص المكتوب فى التكست
fseek($fileHandle, 8, SEEK_CUR); //  اى من داخل الجملة الحالية
fwrite($fileHandle,'Z');
fseek($fileHandle, -1, SEEK_END); //  اى من نهاية الجملة الحالية
fwrite($fileHandle,'Z');
fclose($fileHandle);
////////////////////////////////
