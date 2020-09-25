<?php
session_start(); // start OR Resume session من الممكن عمل بداية او تكمله للسيشن
$_SESSION['username'] = 'Tarek';
$_SESSION['Favfood'] = 'Pizza';
echo '<a href = "Page2.php">ROOM Number 1 </a>';