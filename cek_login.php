<?php

session_start();

require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit;
}

$username = trim($_POST["username"] ?? "");
$password = $_POST["password"] ?? "";


/* VALIDASI */

if ($username === "" || $password === "") {
    header("Location: login.php?pesan=gagal");
    exit;
}


/* CARI USER */

$stmt = $connect->prepare(
    "SELECT id_user, username, password
     FROM user
     WHERE username = ?"
);

$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();


if (!$user) {
    header("Location: login.php?pesan=gagal");
    exit;
}


/*
 * LOGIN PASSWORD HASH BARU
 */

if (password_verify($password, $user["password"])) {

    session_regenerate_id(true);

    $_SESSION["username"] = $user["username"];
    $_SESSION["status"] = "login";

    header("Location: home.php");
    exit;
}


/*
 * KOMPATIBILITAS AKUN LAMA
 *
 * Akun yang sebelumnya masih menyimpan
 * password plaintext tetap bisa login.
 *
 * Setelah berhasil login, password lama
 * otomatis diubah menjadi password hash.
 */

if (hash_equals($user["password"], $password)) {

    $passwordHash = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    $update = $connect->prepare(
        "UPDATE user
         SET password = ?
         WHERE id_user = ?"
    );

    $update->bind_param(
        "si",
        $passwordHash,
        $user["id_user"]
    );

    $update->execute();


    session_regenerate_id(true);

    $_SESSION["username"] = $user["username"];
    $_SESSION["status"] = "login";

    header("Location: home.php");
    exit;
}


/* PASSWORD SALAH */

header("Location: login.php?pesan=gagal");
exit;

?>
