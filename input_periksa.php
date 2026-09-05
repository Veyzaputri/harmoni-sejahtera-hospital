<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:login.php?pesan=belum_login");
}
?>
<?php 
include 'koneksi.php';


$idpasien = $_REQUEST['ID_pasien']; // Mendapatkan id_pasien dari session atau sumber lain
$idperiksa = $_REQUEST['ID_periksa'];
$tanggalperiksa = $_REQUEST['tanggal_periksa'];
$biayaperiksa = $_REQUEST['biaya_periksa'];
$idobat = $_REQUEST['id_obat2'];


$query = mysqli_query($connect, "INSERT INTO periksa
        VALUES('$idperiksa','$tanggalperiksa','$biayaperiksa', '$idobat','$idpasien')")
        or die (mysqli_error($connect));

if ($query) {
  header("location:struk.php?ID_periksa=$idperiksa&ID_pasien=$idpasien&Biaya_periksa=$biayaperiksa&Id_obat=$idobat");
} else {
    echo "Proses input gagal";
}
 ?>