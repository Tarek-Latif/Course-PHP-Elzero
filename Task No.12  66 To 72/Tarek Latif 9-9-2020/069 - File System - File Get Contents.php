<?php
/*
file_get_contents(path[اجبارى],include_path[اختيارى],context,offset[اخيارى],max_length[اختيارى])
*/
echo "<h2> Exp No.1 (  File_Get_Contents ) </h2>";
echo file_get_contents('read.txt');// سيقوم بفتح الملف للقراءة وطباعه النص الذى بداخله
echo "<h2> Exp No.2 (  File_Get_Contents( offset) ) </h2>";
echo file_get_contents('read.txt',false,Null,5);// سوف يقوم بقطع النص عند الحرف الخامس من الجملة
echo "<h2> Exp No.3 (  File_Get_Contents) (offset - max_length ) </h2>";
echo file_get_contents('read.txt',false,Null,5,9);// سوف يقوم بقطع الجمله من البداية ومن النهاية