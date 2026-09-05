<?php
require_once "koneksi.php";

$idpasien    = trim($_POST["ID_pasien"] ?? "");
$namapasien  = trim($_POST["nama_pasien"] ?? "");
$tanggallahir = $_POST["tgl_lahir"] ?? "";
$jeniskelamin = $_POST["jenis_kelamin"] ?? "";
$nokontak    = trim($_POST["no_kontak"] ?? "");
$alamat      = trim($_POST["alamat"] ?? "");
$iddokter    = $_POST["id_dokter"] ?? "";

if (
    $idpasien === "" ||
    $namapasien === "" ||
    $tanggallahir === "" ||
    $jeniskelamin === "" ||
    $iddokter === ""
) {
    header("Location: form_pasien.php?pesan=lengkapi");
    exit;
}

$stmt = $connect->prepare(
    "INSERT INTO pasien
    (ID_pasien, nama_pasien, tgl_lahir, jenis_kelamin, no_kontak, alamat, id_dokter)
    VALUES (?, ?, ?, ?, ?, ?, ?)"
);

$stmt->bind_param(
    "ssssssi",
    $idpasien,
    $namapasien,
    $tanggallahir,
    $jeniskelamin,
    $nokontak,
    $alamat,
    $iddokter
);

if ($stmt->execute()) {
    header("Location: periksa_pasien.php?ID_pasien=" . urlencode($idpasien));
    exit;
}

die("Proses input gagal: " . $stmt->error);
?>
