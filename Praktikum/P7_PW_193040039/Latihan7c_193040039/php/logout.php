<?php

session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);

// unset($_COOKIE['username']);
// unset($_COOKIE['hash']);
header("Location: ../index.php");
die;
