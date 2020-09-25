<?php
/*

*/
//////////////////////////////
echo "<h2> Exp No.1   ( HTTP_REFERER )  </h2>";
echo $_SERVER['SERVER_PORT'];// البورت الخاص ببرنامج الاباتشى سوف يقوم بطباعته
////////////////////////////////////

echo "<h2> Exp No.2   ( DOCUMENT_ROOT )  </h2>";
echo $_SERVER['DOCUMENT_ROOT'];// طباعة الروت او مسار السيرفر

////////////////////////////////////

echo "<h2> Exp No.3   ( QUERY_STRING )  </h2>";
echo $_SERVER['QUERY_STRING'];//   طباعة جملة الاستعلام اعلى المتصفح

////////////////////////////////////

echo "<h2> Exp No.4   ( SERVER_NAME)  </h2>";
echo $_SERVER['SERVER_NAME'];// طباعة اسم السيرفر الحالى

////////////////////////////////////

echo "<h2> Exp No.5   ( PHP_SELF )  </h2>";
echo $_SERVER['PHP_SELF'];// طباعة العنوان اعلى الصفحة