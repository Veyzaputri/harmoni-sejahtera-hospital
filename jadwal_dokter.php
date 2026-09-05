<?php
session_start();

if (empty($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}

$dokter = [
    [
        "nama" => "dr. Veyza Pradita Ardhia Putri, S.T., M.Kes.",
        "spesialis" => "Psikiatri Anak & Remaja",
        "inisial" => "VP",
        "jadwal" => [
            "Senin" => ["08.00 - 10.00", "15.00 - 17.00"],
            "Selasa" => ["13.00 - 15.00", "21.00 - 23.00"],
            "Jumat" => ["08.00 - 10.00", "13.00 - 15.00", "18.00 - 21.00"],
            "Minggu" => ["08.00 - 10.00", "13.00 - 15.00", "18.00 - 21.00"],
        ]
    ],
    [
        "nama" => "dr. Rolly Dhea Venesia Sibuea, S.T., M.Kes.",
        "spesialis" => "Psikiatri Dewasa",
        "inisial" => "RS",
        "jadwal" => [
            "Rabu" => ["08.00 - 10.00", "15.00 - 17.00"],
            "Kamis" => ["13.00 - 15.00", "21.00 - 23.00"],
            "Sabtu" => ["08.00 - 10.00", "13.00 - 15.00", "18.00 - 21.00"],
            "Minggu" => ["11.00 - 13.00", "16.00 - 18.00", "21.00 - 23.00"],
        ]
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

    <title>Jadwal Dokter | Harmoni Sejahtera</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="doctor.css">
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
                    <a class="nav-link" href="home.php">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="form_pasien.php">
                        Daftar Pasien
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tampil_pasien.php">
                        Antrian
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link active"
                        href="jadwal_dokter.php"
                    >
                        Dokter
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tampil_struk.php">
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


<main class="doctor-page">

    <div class="container">

        <div class="page-heading">

            <div>

                <span class="page-label">
                    Tenaga Medis
                </span>

                <h1>
                    Jadwal Dokter
                </h1>

                <p>
                    Temukan jadwal praktik dokter dan pilih waktu
                    pelayanan yang sesuai dengan kebutuhan pasien.
                </p>

            </div>


            <a
                href="form_pasien.php"
                class="register-button"
            >
                + Daftarkan Pasien
            </a>

        </div>


        <div class="doctor-summary">

            <div class="summary-icon">
                🩺
            </div>

            <div>
                <span>Dokter Tersedia</span>

                <strong>
                    <?= count($dokter); ?>
                </strong>
            </div>

        </div>


        <div class="doctor-grid">

            <?php foreach ($dokter as $index => $item): ?>

                <section class="doctor-card">

                    <div class="doctor-header">

                        <div class="doctor-avatar">
                            <?= htmlspecialchars($item["inisial"]); ?>
                        </div>

                        <div class="doctor-identity">

                            <span>
                                Dokter <?= $index + 1; ?>
                            </span>

                            <h2>
                                <?= htmlspecialchars($item["nama"]); ?>
                            </h2>

                            <p>
                                <?= htmlspecialchars($item["spesialis"]); ?>
                            </p>

                        </div>

                    </div>


                    <div class="doctor-status">
                        <span class="status-dot"></span>
                        Menerima pasien sesuai jadwal praktik
                    </div>


                    <div class="schedule-heading">

                        <div>
                            <span>Jadwal Praktik</span>

                            <p>
                                Pilih hari untuk melihat jam pelayanan.
                            </p>
                        </div>

                    </div>


                    <div class="schedule-list">

                        <?php foreach ($item["jadwal"] as $hari => $jamList): ?>

                            <div class="schedule-row">

                                <div class="day">
                                    <?= htmlspecialchars($hari); ?>
                                </div>

                                <div class="time-list">

                                    <?php foreach ($jamList as $jam): ?>

                                        <span class="time-badge">
                                            <?= htmlspecialchars($jam); ?>
                                        </span>

                                    <?php endforeach; ?>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>


                    <div class="doctor-actions">

                        <a
                            href="form_pasien.php"
                            class="choose-doctor"
                        >
                            Daftar Pemeriksaan →
                        </a>

                    </div>

                </section>

            <?php endforeach; ?>

        </div>


        <div class="doctor-note">

            <div class="note-icon">
                ⓘ
            </div>

            <div>

                <strong>
                    Informasi Jadwal
                </strong>

                <p>
                    Jadwal praktik dapat mengalami perubahan.
                    Pastikan memilih dokter saat melakukan
                    pendaftaran pasien.
                </p>

            </div>

        </div>

    </div>

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
