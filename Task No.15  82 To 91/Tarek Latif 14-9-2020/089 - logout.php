<?php

// Resume The Session
session_start();

// Unset
session_unset();// يقوم بمسح البيانات فقط التى بداخل السيشن

// Destory
session_destroy(); // يقوم بتدمير السيشن بالكامل 

print_r($_SESSION);
