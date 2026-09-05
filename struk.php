<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
</head>
  <body>
    <center>
    <h1>Struk Pembayaran</h1>
    
    <?php
    include 'koneksi.php';
    $idpasien = $_GET['ID_pasien'];
    $idperiksa = $_GET['ID_periksa'];
    $biayaperiksa = $_GET['Biaya_periksa'];
    $idobat=$_GET['Id_obat'];
    

    $query_pasien=mysqli_query($connect, "SELECT * FROM pasien  WHERE ID_pasien='$idpasien'");
    while ($data_pasien=mysqli_fetch_assoc($query_pasien))

        

    {?>
     
    <table>
    <tr>
        <th>Id Pasien </th>
        <td>: <?php echo $idpasien ?></td>
    </tr>
    <tr>
        <th>Nama Pasien </th>
        <td>: <?php echo $data_pasien['nama_pasien'] ?></td>
    </tr>
    <tr>
        <th>Tanggal Lahir </th>
        <td>: <?php echo $data_pasien['tgl_lahir'] ?></td>
    </tr>
    <tr>
        <th>Jenis Kelamin </th>
        <td>: <?php echo $data_pasien['jenis_kelamin'] ?></td>
    </tr>
    <tr>
        <th>No Kontak </th>
        <td>: <?php echo $data_pasien['no_kontak'] ?></td>
    </tr>
    <tr>
        <th>Alamat </th>
        <td>: <?php echo $data_pasien['alamat'] ?></td>
    </tr>
    <tr>
        <th>Biaya Periksa </th>
        <td>: <?php echo $biayaperiksa ?></td>
    </tr>  
    <?php 
    $query_obat=mysqli_query($connect, "SELECT * FROM obat  WHERE Id_obat='$idobat'");
    while ($data_obat=mysqli_fetch_assoc($query_obat))
   { ?>
    <tr>
        <th>Nama Obat </th>
        <td>: <?php echo $data_obat['nama_obat'] ?></td>
    </tr>  
    <tr>
        <th>Biaya Obat </th>
        <td>: <?php echo $data_obat['harga_obat'] ?></td>
    </tr>  
   
    <?php 
    $data['total_biaya']=($biayaperiksa+$data_obat['harga_obat']);
     ?>
      <?php } ?>
    <tr>
        <th>Total Biaya </th>
        <td>: <?php echo isset($data['total_biaya']) ? $data['total_biaya'] : ''; ?></td>
    </tr>  
    <?php 
    } ?>
    </table>

    </div>
    </center>
    <center>
            
    <a href="proses_struk.php?ID_periksa=<?php echo $idperiksa; ?>&ID_pasien=<?php echo $idpasien; ?>&ID_obat=<?php echo $idobat; ?>&total_biaya=<?php echo $data['total_biaya']; ?>">

                <button style="
                    margin-top:50px;
                    border: none;
                    border-radius: 3px;
                    border-color: none;
                    background-color: :#ce3046;
                    color: white;
                    padding-right: 2rem;
                    padding-left: 2rem;
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                    font-size: 1rem;
                ">Antrian</button>
                  <a href="home.php">
                <button style="
                    margin-top:50px;
                    margin-left:50px;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>