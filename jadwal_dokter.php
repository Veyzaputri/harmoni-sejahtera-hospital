<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <center>
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Jadwal Dokter</a>
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
            <a class="nav-link" href="#">lihat antrian</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
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
<table class="table table-bordered border-secondary" style="margin-top:100px;">

<thead class="table-dark">
    <tr style="text-align:center;">
   <td >No</td>
   <td>nama</td>
   <td>Spesialis</td>
   <td>jadwal Praktik</td>
   <td>jam praktik</td>
   </tr>
  </thead>
  <tbody>
    <tr style="text-align:center;">
    <td rowspan="10">1</td>
    <td rowspan="10">dr. Veyza Pradita Ardhia Putri, S.T., M.Kes.</td>
    <td rowspan="10">(Kesehatan Jiwa Anak Teknik)</td>
    <td rowspan="2">senin</td>
    <td>8.00-10.00</td>
    </tr>
    <tr style="text-align:center;">
    <td>15.00-17.00</td>
    </tr>
    <tr style="text-align:center;">
    <td rowspan="2">selasa</td>
    <td>13.00-15.00</td>
    </tr>
    <tr style="text-align:center;">
    <td>21.00-23.00</td>
    </tr>
    <tr style="text-align:center;">
    <td rowspan="3">jumat</td>
    <td>08.00-10.00</td>
    </tr>
    <tr style="text-align:center;">
    <td>13.00-15.00</td>
    </tr>
    <tr style="text-align:center;">
    <td>18.00-21.00</td>
    </tr>
    <tr style="text-align:center;">
    <td rowspan="3">minggu</td>
    <td>08.00-10.00</td>
    </tr>
    <tr style="text-align:center;">
    <td>13.00-15.00</td>
    </tr>
    <tr style="text-align:center;">
    <td>18.00-21.00</td>
    </tr>
    <tr style="text-align:center;">
    <td rowspan="10">1</td>
    <td rowspan="10">2.	dr. Rolly Dhea Venesia Sibuea, S.T., M.Kes.</td>
    <td rowspan="10"> (Kesehatan Jiwa Brokenheart)</td>
    <td rowspan="2">Rabu</td>
    <td>8.00-10.00</td>
</tr>
<tr style="text-align:center;">
    <td>15.00-17.00</td>
</tr>
 <tr style="text-align:center;">
    <td rowspan="2">Kamis</td>
    <td>13.00-15.00</td>
 </tr>
    <tr style="text-align:center;">
    <td>21.00-23.00</td>
</tr>
 <tr style="text-align:center;">
    <td rowspan="3">Sabtu</td>
    <td>08.00-10.00</td>
 </tr>
 <tr style="text-align:center;">
    <td>13.00-15.00</td>
</tr>
<tr style="text-align:center;">
    <td>18.00-21.00</td>
</tr>
    <tr style="text-align:center;">
    <td rowspan="3">Minggu</td>
    <td>11.00-13.00</td>
    </tr>
    <tr style="text-align:center;">
    <td>16.00-18.00</td>
    </tr>
    <tr style="text-align:center;">
    <td>21.00-23.00</td>
    </tr>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </center>
</body>
</html>