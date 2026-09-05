<?php
session_start();

require_once "koneksi.php";

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

$stmt = $connect->prepare(
    "SELECT * FROM user WHERE username = ? AND password = ?"
);

$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION["username"] = $username;
    $_SESSION["status"] = "login";

    header("Location: home.php");
    exit;
}

header("Location: login.php?pesan=gagal");
exit;
?>