<?php
$connection = mysqli_connect('localhost', 'sameer', 'nvidia1024');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'envato');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}