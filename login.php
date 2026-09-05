<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Harmoni Sejahtera</title>

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
                    Kesehatan mental dimulai dari
                    <span>kepedulian.</span>
                </h1>

                <p>
                    Sistem informasi Harmoni Sejahtera membantu
                    pengelolaan pelayanan pasien secara lebih mudah,
                    cepat, dan terintegrasi.
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
                <span class="auth-label">Selamat datang kembali</span>

                <h2>Masuk ke akun Anda</h2>

                <p>
                    Masukkan username dan password untuk melanjutkan.
                </p>
            </div>


            <?php if (isset($_GET['pesan'])): ?>
                <?php elseif ($_GET['pesan'] === "registrasi_berhasil"): ?>

                    <div class="alert-box alert-success">
                        Akun berhasil dibuat. Silakan login.
                    </div>

                <?php if ($_GET['pesan'] === "gagal"): ?>

                    <div class="alert-box alert-error">
                        Username atau password yang Anda masukkan salah.
                    </div>

                <?php elseif ($_GET['pesan'] === "logout"): ?>

                    <div class="alert-box alert-success">
                        Anda telah berhasil logout.
                    </div>

                <?php elseif ($_GET['pesan'] === "belum_login"): ?>

                    <div class="alert-box alert-warning">
                        Silakan login terlebih dahulu untuk mengakses halaman tersebut.
                    </div>

                <?php endif; ?>

            <?php endif; ?>


            <form action="cek_login.php"
                  method="POST"
                  class="auth-form">

                <div class="form-group">
                    <label for="inputuser">Username</label>

                    <input
                        type="text"
                        name="username"
                        id="inputuser"
                        placeholder="Masukkan username"
                        autocomplete="username"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="password">Password</label>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >
                </div>


                <button type="submit" class="auth-button">
                    Masuk
                </button>

            </form>


            <div class="auth-footer-text">
                Belum memiliki akun?
                <a href="form_regis.php">Daftar sekarang</a>
            </div>

            <div class="auth-security">
                🔒 Data Anda terhubung melalui koneksi yang aman.
            </div>

        </div>

    </section>

</div>

</body>
</html>
