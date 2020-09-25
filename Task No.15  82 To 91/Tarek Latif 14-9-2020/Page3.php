<?php
//Resume The Session

session_start();
echo 'Hello ' . $_SESSION['username'] .' You are Room Number 3 <br>';
echo '<a href = " Page4.php ">Kitchen</a>';

