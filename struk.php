<?php
session_start();

if (empty($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}

require_once "koneksi.php";

$idpasien    = $_GET["ID_pasien"] ?? "";
$idperiksa   = $_GET["ID_periksa"] ?? "";
$biayaperiksa = (float) ($_GET["Biaya_periksa"] ?? 0);
$idobat      = $_GET["Id_obat"] ?? "";

if ($idpasien === "" || $idperiksa === "" || $idobat === "") {
    die("Data pembayaran tidak lengkap.");
}


/* DATA PASIEN + DOKTER */

$stmtPasien = $connect->prepare(
    "SELECT pasien.*, dokter.nama_dokter
     FROM pasien
     LEFT JOIN dokter
     ON pasien.id_dokter = dokter.id_dokter
     WHERE pasien.ID_pasien = ?"
);

$stmtPasien->bind_param("s", $idpasien);
$stmtPasien->execute();

$resultPasien = $stmtPasien->get_result();
$pasien = $resultPasien->fetch_assoc();

if (!$pasien) {
    die("Data pasien tidak ditemukan.");
}


/* DATA OBAT */

$stmtObat = $connect->prepare(
    "SELECT Id_obat, nama_obat, harga_obat
     FROM obat
     WHERE Id_obat = ?"
);

$stmtObat->bind_param("i", $idobat);
$stmtObat->execute();

$resultObat = $stmtObat->get_result();
$obat = $resultObat->fetch_assoc();

if (!$obat) {
    die("Data obat tidak ditemukan.");
}


/* TOTAL */

$hargaObat = (float) $obat["harga_obat"];
$totalBiaya = $biayaperiksa + $hargaObat;

?>

<!doctype html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        Struk Pembayaran | Harmoni Sejahtera
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="receipt.css">

</head>


<body>


<nav class="navbar navbar-expand-lg sticky-top no-print">

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

            <ul class="navbar-nav ms-auto">

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



<main class="receipt-page">

    <div class="container receipt-container">


        <div class="page-heading no-print">

            <div>

                <span class="page-label">
                    Pembayaran
                </span>

                <h1>
                    Struk Pemeriksaan
                </h1>

                <p>
                    Periksa kembali rincian pemeriksaan pasien
                    sebelum menyimpan transaksi.
                </p>

            </div>


            <a
                href="tampil_pasien.php"
                class="back-button"
            >
                ← Kembali ke Antrian
            </a>

        </div>



        <section class="receipt-card">


            <div class="receipt-header">

                <div class="hospital-logo">
                    ✚
                </div>


                <div class="hospital-info">

                    <h2>
                        Harmoni Sejahtera
                    </h2>

                    <p>
                        Mental Hospital
                    </p>

                </div>


                <div class="receipt-status">

                    <span>
                        STRUK PEMBAYARAN
                    </span>

                    <strong>
                        <?= htmlspecialchars($idperiksa); ?>
                    </strong>

                </div>

            </div>



            <div class="divider"></div>



            <div class="patient-summary">

                <div>

                    <span class="section-label">
                        Pasien
                    </span>

                    <h3>
                        <?= htmlspecialchars($pasien["nama_pasien"]); ?>
                    </h3>

                    <p>
                        ID <?= htmlspecialchars($pasien["ID_pasien"]); ?>
                    </p>

                </div>


                <div class="doctor-box">

                    <span>
                        Dokter
                    </span>

                    <strong>
                        <?= htmlspecialchars(
                            $pasien["nama_dokter"] ?: "-"
                        ); ?>
                    </strong>

                </div>

            </div>



            <div class="info-grid">

                <div class="info-item">

                    <span>
                        Tanggal Lahir
                    </span>

                    <strong>
                        <?= htmlspecialchars($pasien["tgl_lahir"]); ?>
                    </strong>

                </div>


                <div class="info-item">

                    <span>
                        Jenis Kelamin
                    </span>

                    <strong>
                        <?= htmlspecialchars($pasien["jenis_kelamin"]); ?>
                    </strong>

                </div>


                <div class="info-item">

                    <span>
                        Nomor Kontak
                    </span>

                    <strong>
                        <?= htmlspecialchars(
                            $pasien["no_kontak"] ?: "-"
                        ); ?>
                    </strong>

                </div>


                <div class="info-item">

                    <span>
                        Alamat
                    </span>

                    <strong>
                        <?= htmlspecialchars(
                            $pasien["alamat"] ?: "-"
                        ); ?>
                    </strong>

                </div>

            </div>



            <div class="billing-section">

                <div class="billing-heading">

                    <span>
                        Rincian Biaya
                    </span>

                </div>


                <div class="billing-row">

                    <div>

                        <strong>
                            Biaya Pemeriksaan
                        </strong>

                        <span>
                            Pemeriksaan dan konsultasi pasien
                        </span>

                    </div>


                    <strong class="price">

                        Rp<?= number_format(
                            $biayaperiksa,
                            0,
                            ",",
                            "."
                        ); ?>

                    </strong>

                </div>



                <div class="billing-row">

                    <div>

                        <strong>
                            <?= htmlspecialchars($obat["nama_obat"]); ?>
                        </strong>

                        <span>
                            Obat / terapi
                        </span>

                    </div>


                    <strong class="price">

                        Rp<?= number_format(
                            $hargaObat,
                            0,
                            ",",
                            "."
                        ); ?>

                    </strong>

                </div>



                <div class="total-row">

                    <div>

                        <span>
                            Total Pembayaran
                        </span>

                        <small>
                            Pemeriksaan + obat
                        </small>

                    </div>


                    <strong>

                        Rp<?= number_format(
                            $totalBiaya,
                            0,
                            ",",
                            "."
                        ); ?>

                    </strong>

                </div>

            </div>



            <div class="receipt-footer">

                <span>
                    Terima kasih telah menggunakan layanan
                    Harmoni Sejahtera Mental Hospital.
                </span>

                <span>
                    Dicetak <?= date("d/m/Y H:i"); ?>
                </span>

            </div>


        </section>



        <div class="receipt-actions no-print">


            <button
                type="button"
                class="print-button"
                onclick="window.print()"
            >
                🖨 Cetak Struk
            </button>


            <a
                href="proses_struk.php?ID_periksa=<?= urlencode($idperiksa); ?>&ID_pasien=<?= urlencode($idpasien); ?>&ID_obat=<?= urlencode($idobat); ?>&total_biaya=<?= urlencode($totalBiaya); ?>"
                class="save-button"
            >
                Simpan ke Riwayat →
            </a>


        </div>


    </div>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
