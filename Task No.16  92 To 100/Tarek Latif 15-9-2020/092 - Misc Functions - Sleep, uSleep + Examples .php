<?php
/*
Sleep (Seconds) ; تنفيذ امر بعد مرور عدد معين م الثوانى
USleep (Microseconds); تنفيذ امر معين بعد مرور ميكروثانيى 
time_sleep_until(time() + 5 ); زود على الوقت الحالى 5 ثوانى وبعدها نفذ السطر التالى
*/


//////////////////////////////////////////////
echo "<h2> Exp No.1  ( Sleep (Seconds) )  </h2>";

$name = 'Tarek';
echo $name . '<br>';
sleep (5); // تنفيذ هذا الامر بعد مرور 5 ثوانى
echo ' Sorry Forget To Say Hey ';
//////////////////////////////////////////////
echo "<h2> Exp No.2  ( USleep (MicroSeconds) )  </h2>";

$name = 'Tarek';
echo $name . '<br>';
usleep (500000); // تنفيذ هذا الامر بعد مرور نصف ثانية من الوقت
echo ' Sorry Forget To Say Hey ';
////////////////////////////////////////////

echo "<h2> Exp No.3  ( Sleep )  </h2>";
function checkfile (){
    if (file_exists('092 - Tarek.txt')) { // لو ملف التكست موجود 
        echo 'Good File Is Found';// سوف يقوم بعرض هذه الرسالة
    } else {
        sleep (5); // سوف يظل كل 5 ثوانى يشغل الفانكشن ويظل داخل لوب مستمر
        checkfile ();
    }
}
echo checkfile();
////////////////////////////////////////////

echo "<h2> Exp No.4  ( Sleep )  </h2>";
function checkfile (){
    if (file_exists('092 - Tarek.txt')) { // لو ملف التكست موجود 
        echo 'True File Is Found';// سوف يقوم بعرض هذه الرسالة
    } else {
        time_sleep_until (time () + 5); // زود على الوقت الحالى 5 ثوانى وبعدها اذهب للتشييك على المصفوفه م اولها
        checkfile ();
    }
}
echo checkfile();
////////////////////////////////////////////