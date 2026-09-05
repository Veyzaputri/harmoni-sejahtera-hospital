<?php 
    include 'koneksi.php';

    $idpasien=$_POST['ID_pasien'];
    $namapasien = $_POST['nama_pasien'];
    $tanggallahir = $_POST['tgl_lahir'];
    $jeniskelamin = $_POST['jenis_kelamin'];
    $nokontak = $_POST['no_kontak'];
    $alamat = $_POST['alamat'];
    $iddokter = $_POST['id_dokter'];
    

    $query = mysqli_query($connect,"UPDATE pasien SET ID_pasien='$idpasien',
             nama_pasien='$namapasien', tgl_lahir='$tanggallahir', jenis_kelamin='$jeniskelamin',no_kontak='$nokontak', alamat='$alamat', id_dokter='$iddokter' WHERE ID_pasien='$idpasien'") 
             or die(mysqli_error($connect));
    if ($query) { 
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES UPDATE MENU BERHASIL</h1>
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
            <h1 style="margin-top: 17rem;">PROSES UPDATE MENU GAGAL</h1>
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
    } 
?>