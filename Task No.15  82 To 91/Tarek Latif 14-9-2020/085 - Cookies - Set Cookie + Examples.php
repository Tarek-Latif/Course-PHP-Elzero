<?php
/*
setcookie(name,value,expire,path,domain,secure,httponly)كلهم اختيارى ماهدى اسم الكوكيز اجبارى
Name : Name Of The Cookie
Value : Content Of The Cookie
Expire : Expireation Date
*/
setcookie("School","Channel",time() + 86400, "/", "localhost",TRUE,TRUE);// Cookie For 1 Day 
// 1 Houre = 3600 *24 H = 86400  (True = Secure امن ) & localhost = بديلا عن اسم الدومين
// "/" تدل على ان هذه الكوكيز سوف تطبق على جميع صفحات الدومين والصفحات الفرعية