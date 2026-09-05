<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:index.php?pesan=belum_login");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Daftar Pasien</a>
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
            <a class="nav-link" href="tampil_pasien.php">lihat antrian</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://maps.app.goo.gl/WjigaZYFWVvL7iJd9">Lokasi</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>


    <center>
    <form action="input_pasien.php" method="POST" style="margin-top:50px;" >
    <table cellpadding=10 cellspacing=15>
        <tr>
        <th style="font-size: xx-large;">Pendaftaran Pasien Baru</th>
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
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>