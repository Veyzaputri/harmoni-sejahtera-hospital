<?php

require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: form_regis.php");
    exit;
}

$username  = trim($_POST["username"] ?? "");
$password  = $_POST["password"] ?? "";
$cpassword = $_POST["cpassword"] ?? "";


/* VALIDASI DATA */

if ($username === "" || $password === "" || $cpassword === "") {
    header("Location: form_regis.php?error=2");
    exit;
}


/* CEK KONFIRMASI PASSWORD */

if ($password !== $cpassword) {
    header("Location: form_regis.php?error=3");
    exit;
}


/* CEK USERNAME SUDAH ADA */

$stmt = $connect->prepare(
    "SELECT id_user
     FROM user
     WHERE username = ?"
);

$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: form_regis.php?error=1");
    exit;
}


/* HASH PASSWORD */

$passwordHash = password_hash(
    $password,
    PASSWORD_DEFAULT
);


/* SIMPAN USER */

$stmt = $connect->prepare(
    "INSERT INTO user (username, password)
     VALUES (?, ?)"
);

$stmt->bind_param(
    "ss",
    $username,
    $passwordHash
);

if ($stmt->execute()) {

    header("Location: login.php?pesan=registrasi_berhasil");
    exit;

}

header("Location: form_regis.php?error=2");
exit;

?>
