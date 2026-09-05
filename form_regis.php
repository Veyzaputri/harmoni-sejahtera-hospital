<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrasi | Harmoni Sejahtera</title>

    <link rel="stylesheet" href="login_style.css">
</head>

<body>

<div class="auth-page">

    <section class="auth-visual">
        <div class="auth-visual-content">

            <a href="login.php" class="auth-brand">
                <span class="brand-icon">✚</span>
                Harmoni Sejahtera
            </a>

            <div class="visual-text">
                <span class="eyebrow">Mental Health Care</span>

                <h1>
                    Bergabung dengan
                    <span>Harmoni Sejahtera.</span>
                </h1>

                <p>
                    Buat akun untuk mengakses sistem informasi
                    dan mengelola pelayanan rumah sakit dengan lebih praktis.
                </p>
            </div>

            <div class="illustration-box">
                <img src="home.png"
                     alt="Harmoni Sejahtera Mental Hospital">
            </div>

        </div>
    </section>


    <section class="auth-form-section">

        <div class="auth-card">

            <div class="mobile-brand">
                <span>✚</span> Harmoni Sejahtera
            </div>

            <div class="auth-heading">
                <span class="auth-label">Buat akun baru</span>

                <h2>Registrasi</h2>

                <p>
                    Lengkapi data berikut untuk membuat akun.
                </p>
            </div>


            <?php if (isset($_GET['error'])): ?>

                <?php if ($_GET['error'] == 1): ?>

                    <div class="alert-box alert-error">
                        Username sudah terdaftar. Silakan gunakan username lain.
                    </div>

                <?php elseif ($_GET['error'] == 2): ?>

                    <div class="alert-box alert-error">
                        Terjadi kesalahan. Silakan coba kembali.
                    </div>

                <?php elseif ($_GET['error'] == 3): ?>

                    <div class="alert-box alert-warning">
                        Konfirmasi password tidak sama.
                    </div>

                <?php endif; ?>

            <?php endif; ?>


            <form action="proses_regis.php"
                  method="POST"
                  class="auth-form">

                <div class="form-group">
                    <label for="username">Username</label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Buat username"
                        autocomplete="username"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="inputPassword">
                        Password
                    </label>

                    <input
                        type="password"
                        id="inputPassword"
                        name="password"
                        placeholder="Buat password"
                        autocomplete="new-password"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="confirmPassword">
                        Konfirmasi Password
                    </label>

                    <input
                        type="password"
                        id="confirmPassword"
                        name="cpassword"
                        placeholder="Ulangi password"
                        autocomplete="new-password"
                        required
                    >
                </div>


                <button type="submit"
                        name="submit"
                        class="auth-button">
                    Buat Akun
                </button>

            </form>


            <div class="auth-footer-text">
                Sudah memiliki akun?
                <a href="login.php">Masuk di sini</a>
            </div>

        </div>

    </section>

</div>

</body>
</html>
