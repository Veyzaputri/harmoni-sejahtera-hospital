<?php
include 'koneksi.php';

$idPasien = $_GET['ID_pasien'];
$idPeriksa = $_GET['ID_periksa'];
$total_biaya = $_GET['total_biaya'];
$idobat = isset($_GET['ID_obat']) ? $_GET['ID_obat'] : null;

$query_pasien = mysqli_query($connect, "SELECT ID_pasien,id_dokter FROM pasien WHERE ID_pasien='$idPasien'");
while ($data_pasien = mysqli_fetch_assoc($query_pasien)) {
    

  


$query_obat = mysqli_query($connect, "SELECT ID_periksa, id_obat2 FROM periksa WHERE ID_periksa='$idPeriksa'");
while ($data_obat = mysqli_fetch_assoc($query_obat)) {
    

    // INSERT data ke tabel struk
    $insert_struk = "INSERT INTO struk (id_pasien, id_periksa, id_obat, total_biaya)
                    VALUES ('$idPasien', '$idPeriksa', '$idobat', '$total_biaya')";

    $result = mysqli_query($connect, $insert_struk);

    if ($result) {
    ?>
     <center>
            <h1 style="margin-top: 17rem;">PROSES DELETE MENU BERHASIL</h1>
            <a href="tampil_struk.php">
                <button style="
                    border: none;
                    border-radius: 3px;
                    border-color: none;
                    background-color: rgb(79, 77, 77);
                    color: white;
                    padding-right: 2rem;
                    padding-left: 2rem;
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                    font-size: 1rem;
                ">Tampilkan</button>
            </a>
        </center>
        <?php 
    } else {
        echo "Gagal memasukkan data.";
    }
}
}
?>



