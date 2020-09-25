<?php
session_start();
echo 'Hello' . $_SESSION['name'] . 'How Are You ?';

include 'Counter.php';

echo '<a href = " 090 - Session Training - Simple Counter .php " >Home</a>';