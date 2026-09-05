<?php 
include 'koneksi.php';
$idpasien=$_REQUEST['ID_pasien'];
$namapasien = $_REQUEST['nama_pasien'];
$tanggallahir = $_REQUEST['tgl_lahir'];
$jeniskelamin = $_REQUEST['jenis_kelamin'];
$nokontak = $_REQUEST['no_kontak'];
$alamat = $_REQUEST['alamat'];
$iddokter = $_REQUEST['id_dokter'];

$query = mysqli_query($connect, "INSERT INTO pasien
        VALUES('$idpasien','$namapasien','$tanggallahir','$jeniskelamin', '$nokontak', '$alamat', '$iddokter')")
        or die (mysqli_error($connect));

if ($query) {

    header("location:periksa_pasien.php?ID_pasien=$idpasien");
} else {
    echo "Proses input gagal";
}
 ?>