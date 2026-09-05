
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com
    /font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login_style.css">
  </head>
  <body style="background-image:url(avatar-2155431_1280.png);">
    <center>
        <h1>RUMAH SAKIT JIWA </h1>
        <h2>LOGIN YUK</h2>
    <br>
    <div class="container">
    <?php 
        if (isset($_GET['pesan'])) {
            if($_GET['pesan'] == "gagal") {
                echo "Login gagal! Username dan password salah!";
            } else if($_GET['pesan'] == "logout") {
                echo "Anda telah berhasil logout";
            } else if($_GET['pesan'] == "belum_login") {
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
     ?>
    <br>
    <form action="cek_login.php" method="POST" class="login-email">
    <div class="input-group">
    <label for="inputuser" class="form-label">Username</label>
    <input type="text" name="username" class="form-control"
     aria-describedby="username"
     id="inputuser" placeholder="Masukkan username">
    </div>
    <div class="input-group">
    <label for="inputpassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" 
    aria-describedby="password" 
    id="password" placeholder="Masukkan password">
    </div>
    <br>
    <div class="input-group">
    <button type="submit" class="btn" value="LOGIN">LOGIN</button>
    </div>
    <p class="login-register-text">Anda belum punya akun? <a href="form_regis.php"> 
      Sign Up </a></p>
    </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2
/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
     crossorigin="anonymous"></script>
    </center>
    </div>
  </body>
</html>