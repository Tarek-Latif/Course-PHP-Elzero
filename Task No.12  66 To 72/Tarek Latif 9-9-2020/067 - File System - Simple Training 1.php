
<?php
/*
[1] Check IF The Directory Is Exists Or Notهل الفولد موجود او غير موجود 
[2] Make The Directory انشاء الفولدر
[3] Assign This Directory To variable
[4] Create A File Inside This Directory
[5] Assign This File To variable
[6] change Mode of this file to be read only
[7] Check if this file is writable
[8] Change Mode of this file and make it writable
[9] Includ this file
*/
echo "<h2> Exp No.1 (  File System ) </h2>";
if (file_exists(__DIR__.'/php')){
    echo 'Sorry This Directory Is Exists';
} else {
    mkdir(__DIR__.'/php'); /// انشاء فولدر جديد لو مش موجود من قبل 
}
$Directory = __DIR__.'/php/'; // وضع المسار الحالى بداخل متغير وطباعة المتغير
file_put_contents($Directory .'Text.php',"Hello");// انشاء فولدر باسم بى اتش بى ووضع بداخله ملف تكست وكتابة بداخل الملف كلمة اهلا
$file = $Directory . 'text.php'; // عمل ملف بداخل متغير وطباعة المتغير
chmod ($file,0444 ) ; // تغيير مود الملف وجعله للقراءة فقط لا يمكن الكتابة علية
if (is_writable($file)){
    file_put_contents($file,"Welcome"); // التشيك هل الملف يصلح للكتابة بداخله ام لا ولو يصلح اكتب بداخله كلمة مرحبا

} else { // اذا وجده لا يصلح للكتابة هنا سوف نغيرة بحيث يصلح للكتابة بداخله
    chmod($file,0755);// تغيير المود وجعله يصلح للكتابة بداخله
    file_put_contents($file,"<?php echo 'Congratulation The Training Is Done';");// فتح الملف والكتابة بداخله كلمة 

}
include $file;