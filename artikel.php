<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Artikel Kesehatan mental</a>
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
<center>
<div class="card" style="margin-top:100px; width:700px;">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>“Your mental health is a priority. Your happiness is an essential. Your self-care is a necessity.”</p>
      <footer class="blockquote-footer"> <cite title="Source Title">Anonymous</cite></footer>
    </blockquote>
  </div>
</div>
</center>
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top:100px;">
  <div class="col">
    <div class="card h-100">
      <img src="interaksi.jpg" class="card-img-top" alt="interaksi">
      <div class="card-body">
        <h5 class="card-title">Mampu Berinteraksi dengan Baik</h5>
        <p class="card-text">Manusia tidak terlepas dari kehidupan sosial. Orang dengan kondisi mental yang sehat akan mampu berinteraksi dengan optimal karena mereka bisa menjalin komunikasi dengan mudah dan juga mudah berbaur dengan lingkungannya. Selain itu dengan mental yang sehat seseorang memungkinkan untuk bisa memberikan solusi atau ide terhadap permasalahan yang sedang terjadi di lingkupnya, sehingga akan memberikan kontribusi pada circle pertemanannya.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col" >
    <div class="card h-100">
      <img src="problem.jpg" class="card-img-top" alt="artikel1">
      <div class="card-body">
        <h5 class="card-title">Mampu menyikapi masalah dengan baik</h5>
        <p class="card-text">Orang dengan kesehatan mental yang baik tentu memiliki pikiran positif sehingga mampu untuk mengatasi segala persoalan yang ada. Penting untuk memiliki pikiran yang positif karena hal tersebut merupakan landasan agar dapat melakukan aktivitas secara produktif juga mengoptimalkan potensi yang dimiliki. </p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="health.jpg" class="card-img-top" alt="health">
      <div class="card-body">
        <h5 class="card-title">Mendorong untuk Memiliki Tubuh yang Sehat</h5>
        <p class="card-text">Mental yang sehat bisa dijadikan cikal bakal untuk membentuk tubuh yang sehat pula. Semua aktivitas serta kerja tubuh berada di bawah pengaruh otak atau pikiran. Orang dengan mental yang sehat tentunya memiliki pikiran yang sehat. Dengan pikiran kita termindset dalam hal positif, maka akan menimbulkan energi yang baik untuk tubuh. Energi baik tersebut yang nantinya akan menangkal semua energi negatif yang menyebabkan berbagai macam penyakit seperti stroke, diabetes, juga penyakit jantung.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>