<?php

session_start();


setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);

// unset($_COOKIE['username']);
// unset($_COOKIE['hash']);
header("Location: ../index.php");
session_destroy();
die;
