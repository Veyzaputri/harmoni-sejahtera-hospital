CREATE TABLE user (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE dokter (
    id_dokter INT PRIMARY KEY,
    nama_dokter VARCHAR(255) NOT NULL
);

INSERT INTO dokter (id_dokter, nama_dokter) VALUES
(1, 'dr. Veyza Pradita Ardhia Putri, S.T., M.Kes.'),
(2, 'dr. Rolly Dhea Venesia Sibuea, S.T., M.Kes.');

CREATE TABLE pasien (
    ID_pasien VARCHAR(50) PRIMARY KEY,
    nama_pasien VARCHAR(255) NOT NULL,
    tgl_lahir DATE,
    jenis_kelamin VARCHAR(30),
    no_kontak VARCHAR(50),
    alamat TEXT,
    id_dokter INT,
    CONSTRAINT fk_pasien_dokter
        FOREIGN KEY (id_dokter)
        REFERENCES dokter(id_dokter)
);

CREATE TABLE obat (
    Id_obat INT PRIMARY KEY,
    nama_obat VARCHAR(255) NOT NULL,
    harga_obat DECIMAL(12,2) NOT NULL DEFAULT 0
);

INSERT INTO obat (Id_obat, nama_obat, harga_obat) VALUES
(1, 'Alprazolam (Antiansietas)', 25000),
(2, 'Fluvoxamine (Antidepresan)', 30000),
(3, 'Quetiapin (Antipsikotik)', 45000),
(4, 'Valproat (Antipilepsi)', 35000),
(5, 'Benzodiazepine (Penenang)', 20000),
(6, 'Phenelzine (MAOI)', 40000),
(7, 'Propranolol (Beta-blocker)', 15000),
(8, 'Buspirone (Kecemasan)', 30000);

CREATE TABLE periksa (
    ID_periksa VARCHAR(50) PRIMARY KEY,
    tanggal_periksa DATE,
    biaya_periksa DECIMAL(12,2) NOT NULL DEFAULT 0,
    id_obat2 INT,
    id_pasien VARCHAR(50),
    CONSTRAINT fk_periksa_obat
        FOREIGN KEY (id_obat2)
        REFERENCES obat(Id_obat),
    CONSTRAINT fk_periksa_pasien
        FOREIGN KEY (id_pasien)
        REFERENCES pasien(ID_pasien)
        ON DELETE CASCADE
);

CREATE TABLE struk (
    id_struk INT AUTO_INCREMENT PRIMARY KEY,
    id_pasien VARCHAR(50),
    id_periksa VARCHAR(50),
    id_obat INT,
    total_biaya DECIMAL(12,2) NOT NULL DEFAULT 0,
    CONSTRAINT fk_struk_pasien
        FOREIGN KEY (id_pasien)
        REFERENCES pasien(ID_pasien)
        ON DELETE CASCADE,
    CONSTRAINT fk_struk_periksa
        FOREIGN KEY (id_periksa)
        REFERENCES periksa(ID_periksa)
        ON DELETE CASCADE,
    CONSTRAINT fk_struk_obat
        FOREIGN KEY (id_obat)
        REFERENCES obat(Id_obat)
);