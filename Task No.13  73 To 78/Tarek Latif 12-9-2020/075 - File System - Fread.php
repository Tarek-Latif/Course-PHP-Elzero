<?php

/*
Fread (Handle,Lenght)
Modes :
r : Read Only Starting From Beginning Of the file [file must be exist]
r+ : Read Only Starting From Beginning Of the file [file must be exist]

*/

echo "<h2> Exp No.1   ( Fread (r) )  </h2>";
$fileHandle = fopen('tarek.txt', 'r');
$content = fread($fileHandle, 20) ; // سوف يقوم بقراءة عدد 20 حرف من الملف النصى المسمى باسم طارق
echo $content;
////////////////////////////////////////
echo "<h2> Exp No.2   ( Fread (r) )  </h2>";
$fileHandle = fopen('tarek.txt', 'r');
$content = fread($fileHandle, 20) ; // سوف يقوم بقراءة عدد 20 حرف من الملف النصى المسمى باسم طارق
echo filesize('tarek.txt'); // هذا الامر يقوم بطباعه عدد الاحرف بداخل الملف النصى
////////////////////////////////////////