<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Periksa Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <center>
    <h1>Periksa Pasien</h1>
    <table border=1>
    <?php
    include 'koneksi.php';
    $idpasien = $_GET['ID_pasien'];
    $query=mysqli_query($connect, "SELECT pasien.*, dokter.nama_dokter
    FROM pasien
    LEFT JOIN dokter ON pasien.id_dokter = dokter.id_dokter
    WHERE pasien.ID_pasien = '$idpasien'" );
    while ($data=mysqli_fetch_array($query))
    {?>
    <tr>
        <th>Id Pasien</th>
        <td><?php echo $data['ID_pasien'] ?></td>
    </tr>
    <tr>
        <th>Nama Pasien</th>
        <td><?php echo $data['nama_pasien'] ?></td>
    </tr>
    <tr>
        <th>Tanggal Lahir</th>
        <td><?php echo $data['tgl_lahir'] ?></td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td><?php echo $data['jenis_kelamin'] ?></td>
    </tr>
    <tr>
        <th>No Kontak</th>
        <td><?php echo $data['no_kontak'] ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo $data['alamat'] ?></td>
    </tr>
    <tr>
        <th>Nama Dokter</th>
        <td><?php echo $data['nama_dokter'] ?></td>
    </tr>  

    <?php } ?>
    </table>

    <form action="input_periksa.php" method="POST" >
        <input type="hidden" name="ID_pasien" value="<?php echo $idpasien ?>">
    <table cellpadding=10 cellspacing=15>
        <tr>
            <th>ID Periksa</th>
            <td><input type="text" class="form-control" id="birthdaytime" name="ID_periksa"></td>
        </tr>
        <tr>
            <th>Tanggal Periksa</th>
            <td><input type="date" class="form-control" id="birthdaytime" name="tanggal_periksa"></td>
        </tr>
        <tr>
            <th>Biaya Periksa</th>
            <td><input type="text" class="form-control" id="birthdaytime" name="biaya_periksa"></td>
        </tr>
        <tr>
            <th>ID Obat</th>
            <td>
            <select class="col-10 form-select-sm" aria-label="Small select example" name="id_obat2">
            <option selected>Please Check</option>
            <option value="1" >Alprazolam (Antiansietas)</option>
            <option value="2" >Fluvoxamine (Antidepresan)</option>
            <option value="3" >Quetiapin (Antipsikotik)</option>
            <option value="4" >Valproat (Antipilepsi)</option>
            <option value="5" >Benzodiazepine (Penenang)</option>
            <option value="6" >Phenelzine (MAOI)</option>
            <option value="7" >Propranolol (Beta-blocker)</option>
            <option value="8" >Buspirone (Kecemasan)</option>
            </select>
            </td>
        </tr>
    </table>
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>