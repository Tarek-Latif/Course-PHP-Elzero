<?php
session_start(); // start OR Resume session من الممكن عمل بداية او تكمله للسيشن
$_SESSION['username'] = 'ALi';
$_SESSION['Favfood'] = 'Rice';
echo '<a href = "Page2.php">ROOM Number 1 </a>';