<?php

session_start();
unset($_SESSION['username']);
$log = false;
session_destroy();
header('Location: login.php');

?>