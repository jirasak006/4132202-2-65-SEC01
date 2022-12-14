<?php
$host = "db";   //db service from docker-compose
$user = "root";
$pass = "1234";
$db = "db_test";

try {
    $link = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($link, "SET NAMES utf8");
} catch (Exception $e) {
    echo " error on:" . $e . " :: " . mysqli_error($link);
}