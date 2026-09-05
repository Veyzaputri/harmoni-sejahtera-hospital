<?php
session_start();

if (empty($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harmoni Sejahtera Mental Hospital</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand hospital-brand" href="home.php">
            <span class="brand-icon">✚</span>
            Harmoni Sejahtera
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">Beranda</a>
                </li>

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
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">
                        Lainnya
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="profil.php">Profil Rumah Sakit</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="tentang.php">Tentang Kami</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="visimisi.php">Visi & Misi</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item text-danger" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<main>

<section class="hero">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="hero-badge">
                    Mental Health Care
                </div>

                <h1>
                    Peduli Kesehatan Mental,
                    <span>Membangun Kehidupan Lebih Baik.</span>
                </h1>

                <p class="hero-description">
                    Harmoni Sejahtera Mental Hospital menyediakan layanan
                    kesehatan mental dengan pendekatan yang nyaman, profesional,
                    dan berorientasi pada kebutuhan pasien.
                </p>

                <div class="hero-actions">
                    <a href="form_pasien.php" class="btn-primary-custom">
                        Daftarkan Pasien
                    </a>

                    <a href="tampil_pasien.php" class="btn-secondary-custom">
                        Lihat Antrian
                    </a>
                </div>

                <p class="welcome-text">
                    Selamat datang,
                    <strong><?= htmlspecialchars($_SESSION['username']); ?></strong>
                    👋
                </p>
            </div>

            <div class="col-lg-6 text-center">
                <div class="hero-image-wrapper">
                    <img src="home.png"
                         class="hero-image"
                         alt="Harmoni Sejahtera Mental Hospital">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="about-section">
    <div class="container">

        <div class="section-heading">
            <span>Tentang Kami</span>
            <h2>Mengenal Harmoni Sejahtera</h2>
            <p>
                Pelayanan kesehatan mental yang berfokus pada kenyamanan,
                pemulihan dan kualitas hidup pasien.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="info-card">
                    <div class="card-icon">🏥</div>
                    <h3>Profil</h3>
                    <p>
                        Harmoni mencerminkan keseimbangan antara pikiran,
                        tubuh dan emosi dalam mencapai kesehatan mental
                        dan kesejahteraan pasien.
                    </p>
                    <a href="profil.php">Pelajari lebih lanjut →</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <div class="card-icon">🤝</div>
                    <h3>Tentang</h3>
                    <p>
                        Kami berkomitmen memberikan pelayanan kesehatan
                        mental dengan memahami kebutuhan unik setiap
                        individu.
                    </p>
                    <a href="tentang.php">Pelajari lebih lanjut →</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <div class="card-icon">🌱</div>
                    <h3>Visi & Misi</h3>
                    <p>
                        Menjadi pusat kesehatan jiwa yang mendukung
                        penyembuhan holistik, edukasi, pencegahan,
                        dan peningkatan kualitas hidup.
                    </p>
                    <a href="visimisi.php">Pelajari lebih lanjut →</a>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="quick-menu">
    <div class="container">

        <div class="section-heading">
            <span>Layanan</span>
            <h2>Akses Layanan dengan Mudah</h2>
        </div>

        <div class="row g-3">

            <div class="col-6 col-md-3">
                <a href="form_pasien.php" class="quick-card">
                    <span>👤</span>
                    <strong>Daftar Pasien</strong>
                </a>
            </div>

            <div class="col-6 col-md-3">
                <a href="tampil_pasien.php" class="quick-card">
                    <span>📋</span>
                    <strong>Antrian</strong>
                </a>
            </div>

            <div class="col-6 col-md-3">
                <a href="jadwal_dokter.php" class="quick-card">
                    <span>🩺</span>
                    <strong>Jadwal Dokter</strong>
                </a>
            </div>

            <div class="col-6 col-md-3">
                <a href="tampil_struk.php" class="quick-card">
                    <span>📄</span>
                    <strong>Riwayat</strong>
                </a>
            </div>

        </div>

    </div>
</section>

</main>


<footer>
    <div class="container">
        <p>
            © <?= date("Y"); ?> Harmoni Sejahtera Mental Hospital.
            Sistem Informasi Rumah Sakit.
        </p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
