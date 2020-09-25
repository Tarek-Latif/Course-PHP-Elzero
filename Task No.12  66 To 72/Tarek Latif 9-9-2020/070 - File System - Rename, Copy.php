<?php
/*
copy File (Oldfile,NewFile);
rename(Oldname,Newname,context);//يقوم بتغيير اسم ملف او اسم فولدر
*/
echo "<h2> Exp No.1 (  Copy File ) </h2>";

copy ('Ali.txt','ali_New.txt');
////////////////////////////////////
echo "<h2> Exp No.2 (  Copy File ) </h2>";

if (!copy ('Ali.txt','ali_New.txt')){
    echo "Sorry File Not Copied";
} else {
    echo "File Has Been copied";
}
////////////////////////////////////
echo "<h2> Exp No.3 (  Copy File ( Function) ) </h2>";
function copyMe($extension){
    $Original = __FILE__;
    Return Copy($Original,$Original . "." . $extension);
}
copyMe('GIF');
///////////////////////////////////////
echo "<h2> Exp No.4 (  Rename ) </h2>";

rename('Test.txt','New.txt');// يقوم بتغيير اسم الملف
/////////////////////////////////////////////
echo "<h2> Exp No.5 (  Rename ) </h2>";

rename('New.txt',__DIR__ . '/php/file.txt');//سوف يقوم بتغير اسم الملف ونقله داخل فولدر اسمه بى اتش بى
////////////////////////////////////////
