<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:login.php?pesan=belum_login");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
<link rel="stylesheet" href="tampilpasien.css">  </head>
  <body>
  <nav class="navbar bg-body-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Antrian</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form_pasien.php">Daftar pasien</a>
          </li>
        
      </div>
    </div>
  </div>
</nav>



    <center>
     
    <h1 style="margin-top:100px;">Daftar Pasien</h1>
    <a class="btn btn-secondary" href="form_pasien.php" role="button" style="margin-top:20px; margin-bottom:20px;">Add Pasien</a>
    <table class="table table-bordered center">
      <thead>
    <tr>
        <th>No Antrian</th>
        <th>Nama Pasien</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>No. Kontak</th>
        <th>Alamat</th>
        <th>Id Dokter</th>
        <th>Option</th>
    </tr>
    </thead>
    <?php 
    include 'koneksi.php';
    $query=mysqli_query($connect, "SELECT * FROM pasien" );
    while ($data=mysqli_fetch_array($query))
    {?>
    <tbody>
    <tr>
        <td><?php echo $data['ID_pasien'] ?></td>
        <td><?php echo $data['nama_pasien'] ?></td>
        <td><?php echo $data['tgl_lahir'] ?></td>
        <td><?php echo $data['jenis_kelamin'] ?></td>
        <td><?php echo $data['no_kontak'] ?></td>
        <td><?php echo $data['alamat'] ?></td>
        <td><?php echo $data['id_dokter'] ?></td>
        <td>
          <center>
           <a href="edit.php?ID_pasien=<?php echo $data['ID_pasien']; ?>"> <button type="button" class="btn btn-outline-secondary">Edit</button></a>
           <a href="hapus.php?ID_pasien=<?php echo $data['ID_pasien']; ?>">  <button type="button" class="btn btn-outline-secondary">Done</button></a>
           </center>
          </td>
          
           
           
    </tr>
    </tbody>
    <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </center>
  </body>
</html>