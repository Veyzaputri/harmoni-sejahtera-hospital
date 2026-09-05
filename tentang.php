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

    <title>Tentang Kami | Harmoni Sejahtera</title>

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
                    <a class="nav-link" href="profil.php">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="tentang.php">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="visimisi.php">Visi & Misi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="artikel.php">Artikel</a>
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

                <span class="page-label">Tentang Kami</span>

                <h1>
                    Pendampingan untuk
                    <span>Kesehatan Mental.</span>
                </h1>

                <p>
                    Kami mengembangkan pendekatan pelayanan yang
                    mempertimbangkan kebutuhan setiap individu dalam
                    proses pemulihan dan peningkatan kualitas hidup.
                </p>

                <a href="form_pasien.php" class="primary-button">
                    Daftar Pemeriksaan
                </a>

            </div>


            <div class="hero-image-card">

                <img
                    src="rs.jpg"
                    alt="Harmoni Sejahtera Mental Hospital"
                >

            </div>

        </div>

    </div>

</section>


<section class="content-section">

    <div class="container">


        <div class="section-heading centered">

            <span>Pendekatan Kami</span>

            <h2>
                Pelayanan yang Lebih Manusiawi
            </h2>

            <p>
                Setiap individu memiliki kondisi dan kebutuhan
                yang berbeda dalam perjalanan kesehatan mental.
            </p>

        </div>


        <div class="about-grid">


            <article class="about-card">

                <img src="rawat.jpg" alt="Pendekatan perawatan">

                <div class="about-content">

                    <span>01</span>

                    <h3>Pendekatan Perawatan</h3>

                    <p>
                        Pelayanan dirancang untuk mempertimbangkan
                        kondisi mental, emosional, fisik, dan sosial
                        pasien secara menyeluruh.
                    </p>

                    <p>
                        Dukungan keluarga dan lingkungan juga menjadi
                        bagian penting dalam proses pemulihan.
                    </p>

                </div>

            </article>


            <article class="about-card">

                <img src="psikolog.png" alt="Tenaga kesehatan mental">

                <div class="about-content">

                    <span>02</span>

                    <h3>Pelayanan Terintegrasi</h3>

                    <ul>
                        <li>Pendekatan kesehatan mental terarah.</li>

                        <li>
                            Dukungan terhadap aspek emosional,
                            fisik, dan sosial.
                        </li>

                        <li>
                            Edukasi mengenai kesehatan mental.
                        </li>

                        <li>
                            Lingkungan pelayanan yang nyaman
                            dan mendukung.
                        </li>
                    </ul>

                </div>

            </article>


        </div>


        <div class="community-card">

            <div class="community-icon">
                🤝
            </div>

            <div>

                <span>Komunitas & Edukasi</span>

                <h2>
                    Membangun kesadaran kesehatan mental bersama.
                </h2>

                <p>
                    Edukasi masyarakat menjadi salah satu bagian
                    penting dalam membantu meningkatkan pemahaman
                    tentang kesehatan mental dan mengurangi stigma.
                </p>

            </div>

        </div>


        <div class="contact-card">

            <div>

                <span>Informasi</span>

                <h2>Hubungi Harmoni Sejahtera</h2>

                <p>
                    Informasi kontak berikut merupakan data demonstrasi
                    yang digunakan untuk kebutuhan project.
                </p>

            </div>


            <div class="contact-list">

                <div class="contact-item">
                    <span>📍</span>

                    <div>
                        <small>Lokasi</small>

                        <a
                            href="https://maps.app.goo.gl/WjigaZYFWVvL7iJd9"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Lihat lokasi
                        </a>
                    </div>
                </div>


                <div class="contact-item">
                    <span>☎</span>

                    <div>
                        <small>Telepon Demo</small>
                        <strong>021-8999922</strong>
                    </div>
                </div>


                <div class="contact-item">
                    <span>✉</span>

                    <div>
                        <small>Email Demo</small>
                        <strong>info@harmonisejahmental.com</strong>
                    </div>
                </div>

            </div>

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
