<?php
session_start();

if (empty($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}

include "koneksi.php";

$idpasien = $_GET["ID_pasien"] ?? "";

$stmt = $connect->prepare(
    "SELECT pasien.*, dokter.nama_dokter
     FROM pasien
     LEFT JOIN dokter ON pasien.id_dokter = dokter.id_dokter
     WHERE pasien.ID_pasien = ?"
);

$stmt->bind_param("s", $idpasien);
$stmt->execute();

$result = $stmt->get_result();
$pasien = $result->fetch_assoc();

$obatQuery = mysqli_query(
    $connect,
    "SELECT Id_obat, nama_obat, harga_obat
     FROM obat
     ORDER BY nama_obat ASC"
);

if (!$pasien) {
    die("Data pasien tidak ditemukan.");
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Periksa Pasien | Harmoni Sejahtera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="examination.css">
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


<main class="examination-page">

    <div class="container">

        <div class="page-heading">

            <div>
                <span class="page-label">Pemeriksaan</span>

                <h1>Periksa Pasien</h1>

                <p>
                    Tinjau informasi pasien dan lengkapi data pemeriksaan
                    sebelum melanjutkan ke pembayaran.
                </p>
            </div>

            <a href="tampil_pasien.php" class="back-button">
                ← Kembali ke Antrian
            </a>

        </div>


        <div class="content-grid">

            <section class="patient-card">

                <div class="card-heading">

                    <div class="patient-avatar">
                        <?= strtoupper(substr($pasien["nama_pasien"], 0, 1)); ?>
                    </div>

                    <div>
                        <span>Data Pasien</span>

                        <h2>
                            <?= htmlspecialchars($pasien["nama_pasien"]); ?>
                        </h2>

                        <p>
                            ID Pasien:
                            <?= htmlspecialchars($pasien["ID_pasien"]); ?>
                        </p>
                    </div>

                </div>


                <div class="patient-details">

                    <div class="detail-item">
                        <span>Tanggal Lahir</span>
                        <strong>
                            <?= htmlspecialchars($pasien["tgl_lahir"]); ?>
                        </strong>
                    </div>

                    <div class="detail-item">
                        <span>Jenis Kelamin</span>
                        <strong>
                            <?= htmlspecialchars($pasien["jenis_kelamin"]); ?>
                        </strong>
                    </div>

                    <div class="detail-item">
                        <span>Nomor Kontak</span>
                        <strong>
                            <?= htmlspecialchars($pasien["no_kontak"] ?: "-"); ?>
                        </strong>
                    </div>

                    <div class="detail-item">
                        <span>Dokter</span>
                        <strong>
                            <?= htmlspecialchars($pasien["nama_dokter"] ?: "-"); ?>
                        </strong>
                    </div>

                    <div class="detail-item detail-full">
                        <span>Alamat</span>
                        <strong>
                            <?= htmlspecialchars($pasien["alamat"] ?: "-"); ?>
                        </strong>
                    </div>

                </div>

            </section>


            <section class="form-card">

                <div class="form-heading">

                    <div class="form-icon">🩺</div>

                    <div>
                        <h2>Data Pemeriksaan</h2>

                        <p>
                            Isi informasi pemeriksaan dan obat pasien.
                        </p>
                    </div>

                </div>


                <form action="input_periksa.php" method="POST">

                    <input
                        type="hidden"
                        name="ID_pasien"
                        value="<?= htmlspecialchars($idpasien); ?>"
                    >


                    <div class="form-group">

                        <label for="ID_periksa">
                            ID Pemeriksaan <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="ID_periksa"
                            name="ID_periksa"
                            placeholder="Contoh: PR001"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="tanggal_periksa">
                            Tanggal Pemeriksaan <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="tanggal_periksa"
                            name="tanggal_periksa"
                            value="<?= date("Y-m-d"); ?>"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="biaya_periksa">
                            Biaya Pemeriksaan <span>*</span>
                        </label>

                        <div class="currency-input">

                            <span>Rp</span>

                            <input
                                type="number"
                                id="biaya_periksa"
                                name="biaya_periksa"
                                placeholder="Contoh: 150000"
                                min="0"
                                required
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="id_obat2">
                            Pilih Obat <span>*</span>
                        </label>

                        <select
                            id="id_obat2"
                            name="id_obat2"
                            required
                        >

                            <option value="" disabled selected>
                                Pilih obat untuk pasien
                            </option>

                            <?php while ($obat = mysqli_fetch_assoc($obatQuery)): ?>

                                <option value="<?= $obat["Id_obat"]; ?>">
                                    <?= htmlspecialchars($obat["nama_obat"]); ?>
                                    —
                                    Rp<?= number_format($obat["harga_obat"], 0, ",", "."); ?>
                                </option>

                            <?php endwhile; ?>

                        </select>

                    </div>


                    <div class="form-note">

                        <span>ⓘ</span>

                        <p>
                            Setelah disimpan, sistem akan menampilkan
                            rincian biaya pemeriksaan dan obat.
                        </p>

                    </div>


                    <button type="submit"
                            name="submit"
                            class="submit-button">

                        Simpan & Lanjut ke Pembayaran →

                    </button>

                </form>

            </section>

        </div>

    </div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
