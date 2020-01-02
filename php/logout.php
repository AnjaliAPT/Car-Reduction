<?php

session_start();

session_destroy();
unset($_SESSION['user']);
unset($_SESSION['fname']);
unset($_SESSION['email']);

echo "<script>";
echo "alert('You are now logged out')";
echo "</script>";

header('../index.php');
