<?php 
    include 'koneksi.php';

    $idpasien = $_GET['ID_pasien'];

    $query_child =mysqli_query ($connect,"DELETE FROM periksa WHERE id_pasien = '$idpasien'");
if( $query_child){
    $query=mysqli_query($connect, "DELETE FROM pasien WHERE ID_pasien='$idpasien'");
    if ($query) { 
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES DELETE MENU BERHASIL</h1>
            <a href="tampil_pasien.php">
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
                ">Home</button>
            </a>
        </center>
                        
<?php 
    } else {
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES DELETE MENU 1 GAGAL</h1>
            <a href="tampil_menu.php">
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
                ">Home</button>
            </a>
        </center>
<?php 
    } 
}else{
    echo "Gagal menghapus data dari tabel anak";
}
?>