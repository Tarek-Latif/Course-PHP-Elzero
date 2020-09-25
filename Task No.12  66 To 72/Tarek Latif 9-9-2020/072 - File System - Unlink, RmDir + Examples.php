<?php
/*
unlink(filename,context) يقوم بحذف ملف عن طريق اعطائه اسم الملف
rmdir (Directory)  يقزم بحذف فولدر ولابد يكون الفولدر فارغ ليس به اى ملفات
*/
echo "<h2> Exp No.1 (  unlink ) </h2>";

unlink('Essame.txt');
////////////////////////////////////////
echo "<h2> Exp No.2 (  unlink ) </h2>";

$file = 'Amr.txt';
if (file_exists($file) && is_writable($file)) { // اذا وجد الملف موجود وصالح للكتابة علية احذفة
    unlink($file);
} else {
    if (file_exists($file)){
        echo 'Sorry The File Is Not Writable I Will Change the Permission Now Plase Rliod Page';
    chmod($file, 0755);// هنا تم تغيير الخاصية لتصبح صالح للكتابة على الملف
}
}
////////////////////////////////////////////////////
echo "<h2> Exp No.3 (  rmdir (Directory) ) </h2>";

rmdir ('Osama');// سوف يقوم بحذف الفولدر الذى اسمه اسامة
///////////////////////////////////////

