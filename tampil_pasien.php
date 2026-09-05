<?php
session_start();

if (empty($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}

include "koneksi.php";

$query = mysqli_query(
    $connect,
    "SELECT pasien.*, dokter.nama_dokter
     FROM pasien
     LEFT JOIN dokter
     ON pasien.id_dokter = dokter.id_dokter
     ORDER BY pasien.ID_pasien ASC"
);

$totalPasien = mysqli_num_rows($query);
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Antrian Pasien | Harmoni Sejahtera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="queue.css">
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
                    <a class="nav-link" href="form_pasien.php">Daftar Pasien</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="tampil_pasien.php">Antrian</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="jadwal_dokter.php">Dokter</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">Logout</a>
                </li>

            </ul>
        </div>

    </div>
</nav>


<main class="queue-page">

    <div class="container">

        <div class="page-heading">

            <div>
                <span class="page-label">Pelayanan Pasien</span>

                <h1>Daftar Antrian Pasien</h1>

                <p>
                    Pantau pasien yang terdaftar dan kelola proses
                    pelayanan dengan lebih mudah.
                </p>
            </div>

            <a href="form_pasien.php" class="add-button">
                + Tambah Pasien
            </a>

        </div>


        <div class="summary-card">

            <div class="summary-icon">📋</div>

            <div>
                <span>Total Pasien Terdaftar</span>
                <strong><?= $totalPasien; ?></strong>
            </div>

        </div>


        <div class="table-card">

            <div class="table-header">

                <div>
                    <h2>Antrian Hari Ini</h2>
                    <p>Daftar pasien yang sedang tercatat dalam sistem.</p>
                </div>

            </div>


            <?php if ($totalPasien > 0): ?>

                <div class="table-responsive">

                    <table class="patient-table">

                        <thead>
                            <tr>
                                <th>No. Antrian</th>
                                <th>Pasien</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Kontak</th>
                                <th>Dokter</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php while ($data = mysqli_fetch_assoc($query)): ?>

                            <tr>

                                <td>
                                    <span class="queue-number">
                                        <?= htmlspecialchars($data["ID_pasien"]); ?>
                                    </span>
                                </td>

                                <td>
                                    <div class="patient-name">
                                        <div class="patient-avatar">
                                            <?= strtoupper(substr($data["nama_pasien"], 0, 1)); ?>
                                        </div>

                                        <div>
                                            <strong>
                                                <?= htmlspecialchars($data["nama_pasien"]); ?>
                                            </strong>

                                            <span>
                                                <?= htmlspecialchars($data["alamat"] ?: "-"); ?>
                                            </span>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <?= htmlspecialchars($data["tgl_lahir"]); ?>
                                </td>

                                <td>
                                    <span class="gender-badge">
                                        <?= htmlspecialchars($data["jenis_kelamin"]); ?>
                                    </span>
                                </td>

                                <td>
                                    <?= htmlspecialchars($data["no_kontak"] ?: "-"); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars(
                                        $data["nama_dokter"] ?: "Belum dipilih"
                                    ); ?>
                                </td>

                                <td>

                                    <div class="actions">

                                        <a
                                            href="periksa_pasien.php?ID_pasien=<?= urlencode($data["ID_pasien"]); ?>"
                                            class="btn-examine">
                                            Periksa
                                        </a>

                                        <a
                                            href="edit.php?ID_pasien=<?= urlencode($data["ID_pasien"]); ?>"
                                            class="btn-edit">
                                            Edit
                                        </a>

                                        <a
                                            href="hapus.php?ID_pasien=<?= urlencode($data["ID_pasien"]); ?>"
                                            class="btn-done"
                                            onclick="return confirm('Selesaikan dan hapus pasien ini dari daftar?')">
                                            Selesai
                                        </a>

                                    </div>

                                </td>

                            </tr>

                        <?php endwhile; ?>

                        </tbody>

                    </table>

                </div>

            <?php else: ?>

                <div class="empty-state">

                    <div class="empty-icon">📋</div>

                    <h3>Belum Ada Pasien</h3>

                    <p>
                        Belum ada pasien yang terdaftar dalam antrean.
                    </p>

                    <a href="form_pasien.php">
                        Daftarkan Pasien
                    </a>

                </div>

            <?php endif; ?>

        </div>

    </div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
