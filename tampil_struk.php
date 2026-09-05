<?php
session_start();

if (empty($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}

require_once "koneksi.php";

$query = mysqli_query(
    $connect,
    "SELECT 
        struk.id_struk,
        struk.id_pasien,
        struk.id_periksa,
        struk.id_obat,
        struk.total_biaya,
        pasien.nama_pasien,
        obat.nama_obat,
        periksa.tanggal_periksa,
        periksa.biaya_periksa
     FROM struk
     LEFT JOIN pasien
        ON struk.id_pasien = pasien.ID_pasien
     LEFT JOIN obat
        ON struk.id_obat = obat.Id_obat
     LEFT JOIN periksa
        ON struk.id_periksa = periksa.ID_periksa
     ORDER BY struk.id_struk DESC"
);

$totalTransaksi = mysqli_num_rows($query);

$totalPendapatan = 0;

$dataRiwayat = [];

while ($row = mysqli_fetch_assoc($query)) {
    $dataRiwayat[] = $row;
    $totalPendapatan += (float) $row["total_biaya"];
}
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Riwayat Pembayaran | Harmoni Sejahtera</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="history.css">
</head>

<body>

<nav class="navbar navbar-expand-lg sticky-top">

    <div class="container">

        <a class="navbar-brand hospital-brand" href="home.php">
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

        <div class="collapse navbar-collapse" id="navbarMain">

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
                    <a class="nav-link active" href="tampil_struk.php">
                        Riwayat
                    </a>
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


<main class="history-page">

    <div class="container">

        <div class="page-heading">

            <div>
                <span class="page-label">
                    Riwayat Layanan
                </span>

                <h1>
                    Riwayat Pembayaran
                </h1>

                <p>
                    Lihat seluruh transaksi pemeriksaan pasien
                    yang telah tersimpan dalam sistem.
                </p>
            </div>

            <a href="tampil_pasien.php" class="queue-button">
                Lihat Antrian →
            </a>

        </div>


        <div class="stats-grid">

            <div class="stat-card">

                <div class="stat-icon">
                    📄
                </div>

                <div>
                    <span>Total Transaksi</span>

                    <strong>
                        <?= $totalTransaksi; ?>
                    </strong>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    💳
                </div>

                <div>
                    <span>Total Nilai Layanan</span>

                    <strong>
                        Rp<?= number_format(
                            $totalPendapatan,
                            0,
                            ",",
                            "."
                        ); ?>
                    </strong>
                </div>

            </div>

        </div>


        <section class="history-card">

            <div class="history-header">

                <div>
                    <h2>Transaksi Pasien</h2>

                    <p>
                        Data pemeriksaan dan pembayaran yang telah disimpan.
                    </p>
                </div>

            </div>


            <?php if ($totalTransaksi > 0): ?>

                <div class="table-responsive">

                    <table class="history-table">

                        <thead>

                            <tr>
                                <th>Struk</th>
                                <th>Pasien</th>
                                <th>Pemeriksaan</th>
                                <th>Obat</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>

                        </thead>


                        <tbody>

                        <?php foreach ($dataRiwayat as $data): ?>

                            <tr>

                                <td>
                                    <span class="receipt-number">
                                        #<?= htmlspecialchars(
                                            $data["id_struk"]
                                        ); ?>
                                    </span>
                                </td>


                                <td>

                                    <div class="patient-info">

                                        <div class="patient-avatar">

                                            <?= strtoupper(
                                                substr(
                                                    $data["nama_pasien"] ?: "?",
                                                    0,
                                                    1
                                                )
                                            ); ?>

                                        </div>

                                        <div>

                                            <strong>
                                                <?= htmlspecialchars(
                                                    $data["nama_pasien"]
                                                    ?: "Data pasien tidak tersedia"
                                                ); ?>
                                            </strong>

                                            <span>
                                                <?= htmlspecialchars(
                                                    $data["id_pasien"]
                                                ); ?>
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <strong class="examination-id">
                                        <?= htmlspecialchars(
                                            $data["id_periksa"]
                                        ); ?>
                                    </strong>

                                </td>


                                <td>

                                    <?= htmlspecialchars(
                                        $data["nama_obat"]
                                        ?: "Tidak tersedia"
                                    ); ?>

                                </td>


                                <td>

                                    <?php if (!empty($data["tanggal_periksa"])): ?>

                                        <?= date(
                                            "d M Y",
                                            strtotime(
                                                $data["tanggal_periksa"]
                                            )
                                        ); ?>

                                    <?php else: ?>

                                        -

                                    <?php endif; ?>

                                </td>


                                <td>

                                    <strong class="total-price">

                                        Rp<?= number_format(
                                            (float) $data["total_biaya"],
                                            0,
                                            ",",
                                            "."
                                        ); ?>

                                    </strong>

                                </td>


                                <td>

                                    <span class="status-badge">
                                        Selesai
                                    </span>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>


            <?php else: ?>


                <div class="empty-state">

                    <div class="empty-icon">
                        📄
                    </div>

                    <h3>
                        Belum Ada Riwayat
                    </h3>

                    <p>
                        Transaksi pasien yang sudah selesai
                        akan muncul di halaman ini.
                    </p>

                    <a href="form_pasien.php">
                        Daftarkan Pasien
                    </a>

                </div>


            <?php endif; ?>

        </section>


        <div class="history-note">

            <span>ⓘ</span>

            <p>
                Riwayat diambil dari transaksi pemeriksaan yang
                sudah disimpan melalui halaman pembayaran.
            </p>

        </div>

    </div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
