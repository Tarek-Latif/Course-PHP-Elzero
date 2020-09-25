<?php
/*
Fseek (Handle,offset,whence) => SEEK_SET,SEEK_CUR,SEEK_END
SEEK_END
*/
/////////////////////////////
echo "<h2> Exp No.1   ( Fseek ( SEEK_SET ))  </h2>";
$fileHandle = fopen ('tarek.txt', 'r+');
fseek($fileHandle, 2 , SEEK_SET);// سوف يذهب الى الاندكس الثانى من النص المكتوب داخل التكست
$write = fwrite($fileHandle, 'r');// سوف يقوم باسقاط هذا الحرف فى الاندكس الثانى من الجملة المكتوبه داخل التكست
////////////////////////////////////////////////
echo "<h2> Exp No.2   ( Fseek (SEEK_END)  )  </h2>";
$fileHandle = fopen ('tarek.txt', 'r+');
fseek($fileHandle, -4 , SEEK_END);//  سوف يقوم بعد النص من اليمين الى الشمال ويقوم بتغير الحرف 
$write = fwrite($fileHandle, '&');// 