

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <title>Registrasi</title>
    
</head>
<body>
<center>
<div class="container">

<?php
        if (isset($_GET['error'])) {
            switch ($_GET['error']) {
                case 1:
                    echo "<p>Username sudah terdaftar.</p>";
                    break;
                case 2:
                    echo "<p>Terjadi error, coba lagi.</p>";
                    break;
            }
        }
        ?>


<form action="proses_regis.php" method="POST" class="login-email">
<p class="login-text" style="font-size: 2rem; font-weight: 800;">Registrasi</p>
<div class="input-group">
    <label for="username" class="form-label">Username</label>
    <input type="text" placeholder="Username" name="username" required>
</div>
<div class="input-group">
<label for="password" class="form-label" >Password</label>
    <input type="password" placeholder="Password" name="password" required id="inputPassword">
</div>
<?php 
 if(isset($_GET['error']) == 3){
?>
 <p>Password tidak sesuai</p>
 <?php
                };
            ?>
<div class="input-group">
<label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" name="cpassword" required id="inputPassword">
            </div>
            <br>
            <div class="input-group">
                <button name="submit" class="btn" href="home.php">Register</button>

            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
</form>
</div>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>