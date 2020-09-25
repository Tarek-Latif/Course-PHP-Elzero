<?php
/*
file _put_contents(file,data,mode,context)
Mode:
FILE_APPEND
LOCK_EX
FILE_USE_INCLIDE_PATH
*/
echo "<h2> Exp No.1 (  File _Put_Contents ) </h2>";
file_put_contents('Tarek.txt', 'This File Created With PHP');//  انشاء ملف باسم طارق ووضع بداخله جمله معينة
// واذا كان الملف بداخله جمله سابقا تقوم بحذفها وكتابة الجمله الجديدة
echo "<h2> Exp No.2 (  FILE_APPEND ) </h2>"; // اضافة جمله جديده بجانب الجمله السابقة
file_put_contents('Tarek.txt', '05050505050', FILE_APPEND);// سوف  يقوم باضافة هذا الرقم للجمله السابقة
echo "<h2> Exp No.3 (  LOCK_EX ) </h2>"; // لا يمكن لاى شخص الكتابة داخل الملف فى نفس الوقت ويقوم بحذف اى جمل سابقة ويسجل الجديد فقط
file_put_contents('Tarek.txt', '05050505050', LOCK_EX);//يحذف الجمله السابقة ويكتب الرقم الجديد فقط
echo "<h2> Exp No.4 (  FILE_APPEND | LOCK_EX) ) </h2>";
file_put_contents('Tarek.txt', 'ASEC TAREK LATIF', FILE_APPEND | LOCK_EX); // ومن الممكن وضع امرين مع بعض بحيث يترك الجملة السابقة ويسجل الجمله الجديده