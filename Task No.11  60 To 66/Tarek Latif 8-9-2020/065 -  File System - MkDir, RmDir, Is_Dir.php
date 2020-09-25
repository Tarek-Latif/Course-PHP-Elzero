<?php

echo "<h2> Exp No.1 ( mkdir ) </h2>";
$name ='065 - Tarek';
mkdir($name); // أنشاء فولدر
echo 'The Folder ' . $name . 'Done Is Created Folder';
////////////////////////////////////////////
echo "<h2> Exp No.2 ( rmdir ) </h2>";
$name ='065 - Tarek';
rmdir($name); // أنشاء فولدر
echo 'The Folder ' . $name . 'Is Deleted Folder';
////////////////////////////////////////////
echo "<h2> Exp No.3 ( rmdir ) </h2>";
$name ='065 - Tarek';
if (is_dir($name)) { // لو  موجود فولدر احذفة
    rmdir($name); // حذف فولدر
    echo 'The Folder ' . $name . 'Is Deleted Folder';
} else {
    echo 'There is No Folder With This Name ' . $name;// اطبع رسالة عدم وجود فولدر بهذا الاسم
}
////////////////////////////////////////////
echo "<h2> Exp No.4 ( mkdir ) </h2>";
$name ='065 - Tarek';
if (is_dir($name)) { // لو  موجود فولدر 
  
    echo 'Sorry The Folder ' . $name . 'Is Exists Not Need To Create Folder it';
} else {
    mkdir($name);
    echo 'The Folder Name ' . $name . 'Is Created Folder Done )';
}
////////////////////////////////////////////