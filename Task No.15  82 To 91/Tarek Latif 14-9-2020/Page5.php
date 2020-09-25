<?php
//Resume The Session

session_start();
echo 'Hello ' . $_SESSION['username'] .' You Are In Room Number 5  <br>';
echo 'Your favourite Food Now Is ' . $_SESSION['Favfood'] . '<br>';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

echo '<a href = "089 - logout.php">Exit</a>';
