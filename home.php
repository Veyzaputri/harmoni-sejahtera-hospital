<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home.css">
    
  </head>
  <body style="background-color:white;">


  <nav class="navbar navbar-expand-lg bg-body-secondary" style="display: inline-block; font-size: 25px; color: #132639; text-decoration: none; font-weight: 500; width:1500px; transition: .3s; animation: slideTop .5s ease forwards; animation-delay: calc(.2s * var(--i));">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Harmoni Sejahtera Mental Hospital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="artikel.php">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_pasien.php">Antrian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal_dokter.php">Dokter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form_pasien.php">Pasien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_struk.php">Riwayat</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Lainnya
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://maps.app.goo.gl/WjigaZYFWVvL7iJd9">LOKASI</a></li>
            <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center>
<div class="background-img" >
    <img src="home.png" alt="home-background" style="height: 300px; width: 700px;">
</div>
</center>
<section>
  <div class="portofolio" id="portofolio">
    <div class="container">
      <h1 class="sub-title" style="color:gray;"> About <span>Hospital</span> </h1>
      <div class="portofolio-list">
<div>
<i class="bx bx-code" style="color: cyan;"></i>
<h2 style="color:#696969;">Profil</h2>
<p style = "color:#787878;">“Harmoni” merujuk pada hubungan yang seimbang antara pikiran, tubuh, dan emosi seseorang dalam mencapai kesehatan mental. “Sejahtera” memiliki arti bahwa tujuan utamanya untuk memastikan kesejahteraan mental pasien. Jadi "Harmoni Sejahtera Mental Hospital" memiliki arti sebagai rumah saki</p>
<a href="profil.php" class="read">Read more</a>
</div>

<div>
  <i class="bx bx-crop" style="color: cyan;"></i>
  <h2 style="color:#696969;">Tentang</h2>
  <p style="color:#787878;">Selamat datang di Harmoni Sejahtera Mental Hospital, tempat di mana kami berkomitmen untuk memberikan perawatan terbaik untuk kesehatan mental Anda. Sebagai pusat kesehatan mental terkemuka, kami memahami bahwa setiap individu memiliki perjuangan dan kebutuhan yang unik.</p>
  <a href="tentang.php" class="read">Read more</a>
  </div>
  

  <div>
  <i class="bx bx-code" style="color:#0ef;"></i>
    <h2 style="color:#696969;" >Visi&Misi</h2>
    <p style="color:#787878;">Visi: 
Menjadi pusat kesehatan jiwa terkemuka yang mendukung penyembuhan holistik bagi setiap individu dan masyarakat
</p>
<p style="color:#787878;"> Misi:
1.	Memberikan layanan kesehatan jiwa yang berkualitas tinggi dengan pendekatan yang holistik dan terintegrasi.</p>
    <a href="visimisi.php" class="read">Read more</a>
    </div>
      </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>