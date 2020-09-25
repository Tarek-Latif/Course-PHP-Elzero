<?php
/*
من الممكن تنفيذ الفلتر على التالى
User Input
Cookies
Web Service
Server Variables
Database Query Result
*/
foreach (filter_list() as $filter) {
    echo $filter . '<br>' ; // سوف يقوم بعرض جميع انواع الفلاتر الموجوده بال php
}
?>
<form action ="095 - Chk.php" method = "POST">
    <input type = "text" name ="test">
    <input type = "submit" value ="Send">
</form>

