<?php

/* Scandir (dir,sort,context)
*/
echo "<h2> Exp No.1   ( Scandir )  </h2>";
$link =__DIR__ . '/Tarek';
$files = scandir($link); // Sort (حسب الحروف الابجدية ) ويرتب تصاعدى AESCENDING)
echo "<pre>";
print_r($files);
echo "</pre>";
////////////////////////////////////////////////
echo "<h2> Exp No.2   ( Scandir )  </h2>";
$link =__DIR__ . '/Tarek';
$files = scandir($link, SCANDIR_SORT_DESCENDING); // Sort (حسب الحروف الابجدية ) ويرتب تنازلى DESCENDING)
echo "<pre>";
print_r($files);
echo "</pre>";
////////////////////////////////////////////////
echo "<h2> Exp No.3   ( Scandir )  </h2>";
$link =__DIR__ . '/Tarek';
$files = scandir($link, SCANDIR_SORT_NONE); // Sort (حسب الحروف الابجدية ) بدون اى ترتيب
echo "<pre>";
print_r($files);
echo "</pre>";
////////////////////////////////////////////////
////////////////////////////////////////////////
echo "<h2> Exp No.4   ( Scandir )  </h2>";
$link =__DIR__ . '/Tarek';
$files = scandir($link, SCANDIR_SORT_NONE); // Sort (حسب الحروف الابجدية ) بدون اى ترتيب
echo "<pre>";
print_r($files);
echo "</pre>";
foreach($files as $file) {
    if (is_file($link . "/" . $file)) {
        unlink($link . "/" . $file); // سوف يقوم بحذف الملفات التى بداخل الفولدر اذا وجد بداخله ملفات
    }
}
////////////////////////////////////////////////