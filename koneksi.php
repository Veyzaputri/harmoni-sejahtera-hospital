<?php

$hostname = getenv("MYSQLHOST") ?: "localhost";
$username = getenv("MYSQLUSER") ?: "root";
$password = getenv("MYSQLPASSWORD") ?: "";
$database = getenv("MYSQLDATABASE") ?: "rumah_sakit_jiwa";
$port = getenv("MYSQLPORT") ?: 3306;

$connect = new mysqli(
    $hostname,
    $username,
    $password,
    $database,
    (int)$port
);

if ($connect->connect_error) {
    die("Maaf koneksi gagal: " . $connect->connect_error);
}

$connect->set_charset("utf8mb4");

?>