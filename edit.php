<?php 
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:login.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
    <?php 
        include 'koneksi.php';
        $idpasien = $_GET['ID_pasien'];

        $query = mysqli_query($connect, "SELECT * FROM pasien
                WHERE ID_pasien='$idpasien'");
        $data = mysqli_fetch_array($query);
    ?>

    <center>
        <h1 class="text-secondary mb-4">Update Pasien</h1>
        <a href="tampil_pasien.php">
            <button class="px-3 py-2 mx-3 btn btn-secondary text-light border border-none rounded-3">Home</button>
        </a>
        <a href="logout.php">
            <button class="px-3 py-2 btn btn-danger text-light border border-none rounded-3">Logout</button>
        </a> <br>

        <form action="proses_edit.php" method="POST" >
    <table cellpadding=10 cellspacing=15>
        <tr>
        <th style="font-size: xx-large;">Edit Data Pasien</th>
        <td></td>
        <td><img src="rsj.jpg" alt="logo rumah sakit" style="width:150px; height: 100px;"></td>
        </tr>
        <tr>
            <th>ID Pasien </th>
            <td><input type="text" class="form-control" placeholder="Masukkan ID" aria-label="First name" name="ID_pasien"></td>
        </tr>
        <tr>
            <th>Nama </th>
            <td><input type="text" class="form-control" placeholder="Masukkan nama" aria-label="First name" name="nama_pasien"></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><input type="date" class="form-control" id="birthdaytime" name="tgl_lahir"></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="Perempuan" name="jenis_kelamin"> Perempuan </td>
            <td><input class="form-check-input" type="radio" id="flexRadioDefault2" value="Laki-Laki" name="jenis_kelamin"> Laki-laki </td>
        </tr>
        <tr>
            <th>No. Kontak</th>
            <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(000) 000-0000" name="no_kontak"></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><textarea class="form-control" id="exampleFormControlTextarea1" name="alamat"></textarea></td>
        </tr>
        <tr>
            <th>ID Dokter</th>
            <td>
            <select class="col-10 form-select-sm" aria-label="Small select example" name="id_dokter">
            <option selected>Please Check</option>
            <option value="1" >dr. Veyza Pradita Ardhia Putri, S.T., M.Kes.</option>
            <option value="2" >dr. Rolly Dhea Venesia Sibuea, S.T., M.Kes.</option>
            </select>
            </td>
        </tr>
    </table>
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
            <br>
    </center>
</body>
</html>