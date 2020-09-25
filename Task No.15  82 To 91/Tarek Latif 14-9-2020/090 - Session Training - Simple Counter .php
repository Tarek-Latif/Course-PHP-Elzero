<?php
session_start();
$_SESSION['name'] = 'Tarek';
include 'Counter.php';
echo '<a href = "About.php">About</a> |';
echo '<a href = "090 - Test.php">Test Count</a>';