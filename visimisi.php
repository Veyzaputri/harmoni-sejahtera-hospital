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

    <title>Visi & Misi | Harmoni Sejahtera</title>

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
                    <a class="nav-link" href="tentang.php">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="visimisi.php">
                        Visi & Misi
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="artikel.php">Artikel</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">
                        Logout
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<main>

<section class="vision-hero">

    <div class="container">

        <div class="vision-hero-content">

            <span class="page-label">
                Arah & Komitmen
            </span>

            <h1>
                Visi, Misi &
                <span>Tujuan Kami.</span>
            </h1>

            <p>
                Prinsip yang menjadi dasar dalam pengembangan konsep
                pelayanan Harmoni Sejahtera Mental Hospital.
            </p>

        </div>

    </div>

</section>


<section class="content-section">

    <div class="container">


        <div class="vision-grid">


            <article class="vision-card highlight-card">

                <div class="vision-icon">
                    👁
                </div>

                <span>Visi</span>

                <h2>
                    Mendukung kehidupan yang lebih sehat dan seimbang.
                </h2>

                <p>
                    Menjadi pusat kesehatan jiwa yang mendukung
                    penyembuhan holistik bagi setiap individu dan
                    masyarakat dengan fokus pada pemulihan,
                    pencegahan, dan peningkatan kualitas hidup.
                </p>

            </article>


            <article class="vision-card">

                <div class="vision-icon">
                    🎯
                </div>

                <span>Misi</span>

                <h2>
                    Langkah yang Kami Jalankan
                </h2>


                <ol class="mission-list">

                    <li>
                        Memberikan pelayanan kesehatan mental
                        dengan pendekatan yang holistik dan
                        terintegrasi.
                    </li>

                    <li>
                        Menyediakan edukasi untuk meningkatkan
                        kesadaran mengenai kesehatan mental.
                    </li>

                    <li>
                        Mendukung keterlibatan komunitas dalam
                        mengurangi stigma kesehatan mental.
                    </li>

                    <li>
                        Mendorong pengembangan metode pelayanan
                        dan inovasi kesehatan mental.
                    </li>

                </ol>

            </article>


            <article class="vision-card">

                <div class="vision-icon">
                    🌱
                </div>

                <span>Tujuan</span>

                <h2>
                    Dampak yang Ingin Dicapai
                </h2>


                <ol class="mission-list">

                    <li>
                        Mendukung pelayanan holistik untuk berbagai
                        kebutuhan kesehatan mental.
                    </li>

                    <li>
                        Meningkatkan pemahaman masyarakat dan
                        membantu mengurangi stigma.
                    </li>

                    <li>
                        Mendukung pengembangan pengetahuan dan
                        pelayanan kesehatan mental.
                    </li>

                    <li>
                        Membangun hubungan yang lebih baik dengan
                        keluarga dan komunitas.
                    </li>

                </ol>

            </article>


        </div>


        <div class="vision-quote">

            <div class="quote-symbol">
                “
            </div>

            <div>

                <h2>
                    Kesehatan mental adalah bagian dari
                    kualitas hidup.
                </h2>

                <p>
                    Harmoni Sejahtera hadir sebagai konsep pelayanan
                    yang menempatkan keseimbangan dan kesejahteraan
                    sebagai bagian utama dari proses pemulihan.
                </p>

            </div>

        </div>


        <div class="cta-box">

            <div>

                <span>Mulai dari Sekarang</span>

                <h2>
                    Akses layanan pasien dengan lebih mudah.
                </h2>

            </div>

            <a href="form_pasien.php">
                Daftarkan Pasien →
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
