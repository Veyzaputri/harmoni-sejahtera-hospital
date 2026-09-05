<?php
session_start();

if (empty($_SESSION["username"])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profil | Harmoni Sejahtera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="information.css">
</head>

<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

        <a class="navbar-brand hospital-brand" href="home.php">
            <span class="brand-icon">✚</span>
            Harmoni Sejahtera
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="home.php">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="profil.php">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tentang.php">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="visimisi.php">Visi & Misi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="artikel.php">Artikel</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="form_pasien.php">Pasien</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">Logout</a>
                </li>

            </ul>

        </div>

    </div>
</nav>


<main>

<section class="info-hero">

    <div class="container">

        <div class="info-hero-grid">

            <div class="hero-content">

                <span class="page-label">
                    Profil Rumah Sakit
                </span>

                <h1>
                    Mengenal
                    <span>Harmoni Sejahtera.</span>
                </h1>

                <p>
                    Sebuah konsep layanan kesehatan mental yang
                    mengedepankan keseimbangan, kenyamanan, dan
                    pendekatan yang berorientasi pada kebutuhan pasien.
                </p>

                <div class="hero-actions">

                    <a href="form_pasien.php" class="primary-button">
                        Daftar Pemeriksaan
                    </a>

                    <a href="tentang.php" class="secondary-button">
                        Tentang Kami →
                    </a>

                </div>

            </div>


            <div class="hero-image-card">

                <img
                    src="konsul.jpg"
                    alt="Konsultasi kesehatan mental"
                >

            </div>

        </div>

    </div>

</section>


<section class="content-section">

    <div class="container">

        <div class="section-heading">

            <span>Tentang Nama Kami</span>

            <h2>
                Harmoni untuk Kesejahteraan Mental
            </h2>

        </div>


        <div class="story-card">

            <div class="story-number">
                HS
            </div>

            <div>

                <p>
                    <strong>“Harmoni”</strong> menggambarkan keseimbangan
                    antara pikiran, tubuh, dan emosi dalam mencapai
                    kondisi kesehatan mental yang lebih baik.
                </p>

                <p>
                    <strong>“Sejahtera”</strong> menggambarkan tujuan
                    untuk mendukung kualitas hidup dan kesejahteraan
                    pasien melalui pelayanan kesehatan mental yang
                    lebih terarah.
                </p>

                <p>
                    Harmoni Sejahtera Mental Hospital dikembangkan
                    dengan konsep penyembuhan holistik yang
                    mempertimbangkan aspek fisik, mental, emosional,
                    dan sosial.
                </p>

            </div>

        </div>


        <div class="values-grid">

            <div class="value-card">

                <div class="value-icon">🌱</div>

                <h3>Holistik</h3>

                <p>
                    Melihat kesehatan pasien secara menyeluruh,
                    tidak hanya berdasarkan satu aspek.
                </p>

            </div>


            <div class="value-card">

                <div class="value-icon">🤝</div>

                <h3>Berorientasi Pasien</h3>

                <p>
                    Memberikan perhatian terhadap kebutuhan
                    dan kondisi setiap individu.
                </p>

            </div>


            <div class="value-card">

                <div class="value-icon">🧠</div>

                <h3>Edukasi Mental</h3>

                <p>
                    Mendukung peningkatan pemahaman masyarakat
                    mengenai kesehatan mental.
                </p>

            </div>

        </div>

    </div>

</section>


<section class="info-cta">

    <div class="container">

        <div class="cta-box">

            <div>
                <span>Harmoni Sejahtera</span>

                <h2>
                    Kenali layanan kami lebih lanjut.
                </h2>
            </div>

            <a href="visimisi.php">
                Lihat Visi & Misi →
            </a>

        </div>

    </div>

</section>

</main>


<footer>
    <div class="container">
        © <?= date("Y"); ?> Harmoni Sejahtera Mental Hospital.
        Sistem Informasi Rumah Sakit.
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
