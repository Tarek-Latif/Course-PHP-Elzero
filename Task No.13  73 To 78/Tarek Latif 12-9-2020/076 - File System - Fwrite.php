<?php
/*
Fwrite (Handle,string,Lenght)
*/
/////////////////////////////
echo "<h2> Exp No.1   ( Fwrite )  </h2>";
$fileHandle = fopen('tarek.txt', 'r+');
$read = fread($fileHandle, filesize('tarek.txt'));
echo 'Orginal Content of the file Before Replacement Is : <br>' . $read;
$write = fwrite($fileHandle, 'This Is The New Text');// تقوم باضافة نص الى النص القدبم فى التكست
//////////////////////////////////////////