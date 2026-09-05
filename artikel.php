<?php
session_start();

if (empty($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}

$articles = [
    [
        "image" => "interaksi.jpg",
        "category" => "Hubungan Sosial",
        "title" => "Membangun Interaksi Sosial yang Sehat",
        "excerpt" => "Kesehatan mental yang baik membantu seseorang berkomunikasi, membangun hubungan sosial, dan beradaptasi dengan lingkungan secara lebih positif."
    ],
    [
        "image" => "problem.jpg",
        "category" => "Pengembangan Diri",
        "title" => "Menyikapi Masalah dengan Lebih Baik",
        "excerpt" => "Kemampuan mengelola pikiran dan emosi dapat membantu seseorang menghadapi persoalan secara lebih tenang, rasional, dan produktif."
    ],
    [
        "image" => "health.jpg",
        "category" => "Kesehatan",
        "title" => "Kesehatan Mental dan Kesehatan Fisik",
        "excerpt" => "Kesehatan mental dan fisik saling berkaitan. Menjaga pola hidup, istirahat, aktivitas, serta kondisi emosional merupakan bagian penting dari kesejahteraan."
    ]
];
?>

<!doctype html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        Artikel Kesehatan Mental | Harmoni Sejahtera
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="article.css">

</head>

<body>


<nav class="navbar navbar-expand-lg sticky-top">

    <div class="container">

        <a
            class="navbar-brand hospital-brand"
            href="home.php"
        >
            <span class="brand-icon">✚</span>
            Harmoni Sejahtera
        </a>


        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMain"
        >
            <span class="navbar-toggler-icon"></span>
        </button>


        <div
            class="collapse navbar-collapse"
            id="navbarMain"
        >

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="home.php"
                    >
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link active"
                        href="artikel.php"
                    >
                        Artikel
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="form_pasien.php"
                    >
                        Daftar Pasien
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="tampil_pasien.php"
                    >
                        Antrian
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="jadwal_dokter.php"
                    >
                        Dokter
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="tampil_struk.php"
                    >
                        Riwayat
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link text-danger"
                        href="logout.php"
                    >
                        Logout
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>



<main>


<section class="article-hero">

    <div class="container">

        <div class="hero-grid">

            <div class="hero-content">

                <span class="hero-label">
                    Edukasi Kesehatan Mental
                </span>

                <h1>
                    Kenali Diri,
                    <span>Jaga Kesehatan Mental.</span>
                </h1>

                <p>
                    Temukan informasi sederhana mengenai kesehatan
                    mental, hubungan sosial, pengelolaan emosi,
                    dan pentingnya menjaga keseimbangan hidup.
                </p>

                <a
                    href="#artikel"
                    class="hero-button"
                >
                    Jelajahi Artikel ↓
                </a>

            </div>


            <div class="quote-card">

                <div class="quote-icon">
                    “
                </div>

                <p>
                    Menjaga kesehatan mental merupakan bagian
                    penting dari menjaga kualitas hidup secara
                    keseluruhan.
                </p>

                <span>
                    Harmoni Sejahtera
                </span>

            </div>

        </div>

    </div>

</section>



<section
    class="article-section"
    id="artikel"
>

    <div class="container">


        <div class="section-heading">

            <div>

                <span class="section-label">
                    Artikel Pilihan
                </span>

                <h2>
                    Wawasan untuk Hidup Lebih Seimbang
                </h2>

                <p>
                    Informasi ringan mengenai kesehatan mental
                    dan kebiasaan positif dalam kehidupan sehari-hari.
                </p>

            </div>

        </div>



        <div class="article-grid">


            <?php foreach ($articles as $index => $article): ?>

                <article class="article-card">

                    <div class="article-image-wrapper">

                        <img
                            src="<?= htmlspecialchars($article["image"]); ?>"
                            alt="<?= htmlspecialchars($article["title"]); ?>"
                            class="article-image"
                        >

                        <span class="article-number">
                            0<?= $index + 1; ?>
                        </span>

                    </div>


                    <div class="article-content">

                        <span class="article-category">
                            <?= htmlspecialchars($article["category"]); ?>
                        </span>

                        <h3>
                            <?= htmlspecialchars($article["title"]); ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($article["excerpt"]); ?>
                        </p>


                        <button
                            type="button"
                            class="read-button"
                            data-bs-toggle="modal"
                            data-bs-target="#articleModal<?= $index; ?>"
                        >
                            Baca Selengkapnya →
                        </button>

                    </div>

                </article>


                <div
                    class="modal fade"
                    id="articleModal<?= $index; ?>"
                    tabindex="-1"
                    aria-hidden="true"
                >

                    <div
                        class="modal-dialog modal-dialog-centered modal-lg"
                    >

                        <div class="modal-content article-modal">

                            <div class="modal-header">

                                <div>

                                    <span class="modal-category">
                                        <?= htmlspecialchars(
                                            $article["category"]
                                        ); ?>
                                    </span>

                                    <h2 class="modal-title">
                                        <?= htmlspecialchars(
                                            $article["title"]
                                        ); ?>
                                    </h2>

                                </div>


                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>

                            </div>


                            <div class="modal-body">

                                <img
                                    src="<?= htmlspecialchars(
                                        $article["image"]
                                    ); ?>"
                                    alt="<?= htmlspecialchars(
                                        $article["title"]
                                    ); ?>"
                                    class="modal-image"
                                >


                                <?php if ($index === 0): ?>

                                    <p>
                                        Interaksi sosial merupakan bagian
                                        penting dari kehidupan manusia.
                                        Kemampuan menjalin komunikasi dengan
                                        orang lain dapat membantu seseorang
                                        memperoleh dukungan, berbagi pengalaman,
                                        dan membangun hubungan yang sehat.
                                    </p>

                                    <p>
                                        Menjaga kesehatan mental dapat membantu
                                        seseorang lebih nyaman dalam berkomunikasi,
                                        menyampaikan perasaan, serta menyesuaikan
                                        diri dengan lingkungan sosial.
                                    </p>

                                    <p>
                                        Hubungan sosial yang positif juga dapat
                                        memberikan rasa memiliki dan dukungan
                                        emosional dalam menghadapi berbagai
                                        tantangan kehidupan.
                                    </p>


                                <?php elseif ($index === 1): ?>

                                    <p>
                                        Setiap orang akan menghadapi masalah
                                        dalam kehidupan. Kesehatan mental yang
                                        terjaga dapat membantu seseorang
                                        menghadapi tekanan dengan lebih tenang
                                        dan mencari solusi secara bertahap.
                                    </p>

                                    <p>
                                        Sikap positif bukan berarti mengabaikan
                                        masalah, tetapi mampu melihat situasi
                                        secara lebih objektif dan menentukan
                                        langkah yang dapat dilakukan.
                                    </p>

                                    <p>
                                        Mengelola emosi, berbicara dengan orang
                                        terpercaya, serta memberikan waktu untuk
                                        beristirahat merupakan beberapa cara
                                        yang dapat membantu saat menghadapi
                                        tekanan.
                                    </p>


                                <?php else: ?>

                                    <p>
                                        Kondisi mental dan fisik saling
                                        berhubungan. Stres berkepanjangan,
                                        kurang tidur, dan pola hidup yang tidak
                                        seimbang dapat memengaruhi kesejahteraan
                                        seseorang secara keseluruhan.
                                    </p>

                                    <p>
                                        Aktivitas fisik, pola tidur yang cukup,
                                        makanan bergizi, serta waktu untuk
                                        melakukan aktivitas yang menyenangkan
                                        dapat menjadi bagian dari kebiasaan
                                        menjaga kesehatan.
                                    </p>

                                    <p>
                                        Jika mengalami keluhan mental yang
                                        mengganggu aktivitas sehari-hari,
                                        berkonsultasi dengan tenaga profesional
                                        dapat menjadi langkah yang tepat.
                                    </p>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>


        </div>

    </div>

</section>



<section class="mental-note-section">

    <div class="container">

        <div class="mental-note">

            <div class="note-icon">
                🌱
            </div>


            <div>

                <span>
                    Pengingat
                </span>

                <h2>
                    Tidak apa-apa mencari bantuan.
                </h2>

                <p>
                    Informasi dalam halaman ini bersifat edukatif
                    dan bukan pengganti pemeriksaan atau konsultasi
                    dengan tenaga kesehatan profesional.
                </p>

            </div>


            <a
                href="form_pasien.php"
                class="consult-button"
            >
                Daftar Pemeriksaan
            </a>

        </div>

    </div>

</section>


</main>



<footer>

    <div class="container">

        <p>
            © <?= date("Y"); ?>
            Harmoni Sejahtera Mental Hospital.
            Sistem Informasi Rumah Sakit.
        </p>

    </div>

</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
