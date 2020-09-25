<?php
/*
require OR require_once  لا يمكن تنفيذ باقى الاكواد فى حالة وجود خطأ فى هذا الامر 
*/
echo "<h2> Exp No.1 ( require ) </h2>";
require "global2.php"; // ويفضل استخدام هذا الامر
echo $pagename;