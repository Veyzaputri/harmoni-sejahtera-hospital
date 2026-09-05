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

    <title>Daftar Pasien | Harmoni Sejahtera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="patient.css">
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
                    <a class="nav-link active" href="form_pasien.php">Daftar Pasien</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tampil_pasien.php">Antrian</a>
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


<main class="patient-page">

    <div class="container">

        <div class="page-heading">
            <div>
                <span class="page-label">Pendaftaran</span>
                <h1>Daftar Pasien Baru</h1>

                <p>
                    Lengkapi data pasien untuk mendapatkan nomor antrean
                    dan melanjutkan proses pemeriksaan.
                </p>
            </div>

            <a href="tampil_pasien.php" class="queue-button">
                Lihat Antrian →
            </a>
        </div>


        <?php if (isset($_GET["pesan"]) && $_GET["pesan"] === "lengkapi"): ?>

            <div class="alert-custom">
                Mohon lengkapi seluruh data wajib sebelum melanjutkan.
            </div>

        <?php endif; ?>


        <div class="form-card">

            <div class="form-card-header">

                <div class="form-icon">
                    👤
                </div>

                <div>
                    <h2>Informasi Pasien</h2>
                    <p>Masukkan identitas dan informasi dasar pasien.</p>
                </div>

            </div>


            <form action="input_pasien.php" method="POST">

                <div class="form-grid">

                    <div class="form-group">
                        <label for="ID_pasien">
                            ID Pasien <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="ID_pasien"
                            name="ID_pasien"
                            placeholder="Contoh: P001"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label for="nama_pasien">
                            Nama Lengkap <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="nama_pasien"
                            name="nama_pasien"
                            placeholder="Masukkan nama pasien"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label for="tgl_lahir">
                            Tanggal Lahir <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="tgl_lahir"
                            name="tgl_lahir"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label>
                            Jenis Kelamin <span>*</span>
                        </label>

                        <div class="gender-options">

                            <label class="radio-card">
                                <input
                                    type="radio"
                                    name="jenis_kelamin"
                                    value="Perempuan"
                                    required
                                >
                                <span>Perempuan</span>
                            </label>

                            <label class="radio-card">
                                <input
                                    type="radio"
                                    name="jenis_kelamin"
                                    value="Laki-Laki"
                                    required
                                >
                                <span>Laki-laki</span>
                            </label>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="no_kontak">
                            Nomor Kontak
                        </label>

                        <input
                            type="text"
                            id="no_kontak"
                            name="no_kontak"
                            placeholder="Contoh: 081234567890"
                        >
                    </div>


                    <div class="form-group">
                        <label for="id_dokter">
                            Pilih Dokter <span>*</span>
                        </label>

                        <select
                            id="id_dokter"
                            name="id_dokter"
                            required
                        >
                            <option value="" selected disabled>
                                Pilih dokter
                            </option>

                            <option value="1">
                                dr. Veyza Pradita Ardhia Putri, S.T., M.Kes.
                            </option>

                            <option value="2">
                                dr. Rolly Dhea Venesia Sibuea, S.T., M.Kes.
                            </option>
                        </select>
                    </div>


                    <div class="form-group form-full">
                        <label for="alamat">
                            Alamat
                        </label>

                        <textarea
                            id="alamat"
                            name="alamat"
                            rows="4"
                            placeholder="Masukkan alamat pasien"
                        ></textarea>
                    </div>

                </div>


                <div class="form-actions">

                    <a href="home.php" class="btn-cancel">
                        Batal
                    </a>

                    <button type="submit"
                            name="submit"
                            class="btn-submit">
                        Daftarkan Pasien
                    </button>

                </div>

            </form>

        </div>


        <div class="info-note">
            <div>ⓘ</div>

            <p>
                Data yang dimasukkan akan digunakan untuk proses antrean
                dan pemeriksaan pasien di Harmoni Sejahtera.
            </p>
        </div>

    </div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
