# 🏥 Harmoni Sejahtera Hospital Management System

Harmoni Sejahtera Hospital Management System adalah aplikasi web berbasis PHP dan MySQL yang dirancang untuk membantu pengelolaan proses administrasi dan pelayanan rumah sakit dalam satu sistem terintegrasi.

Aplikasi mencakup autentikasi pengguna, pendaftaran pasien, antrean, pemeriksaan, pemilihan dokter dan obat, pembayaran, riwayat transaksi, jadwal dokter, serta informasi dan edukasi kesehatan mental.

> **Note:** Project ini merupakan aplikasi demonstrasi/portfolio dan bukan sistem rumah sakit yang digunakan untuk pelayanan medis nyata.

---

## 🌐 Live Demo

🔗 **Harmoni Sejahtera Hospital Management System**

https://harmoni-sejahtera-hospital-production.up.railway.app

---

## ✨ Features

- 🔐 User Registration & Login
- 🔒 Secure Password Hashing
- 👤 Patient Registration
- 📋 Patient Queue Management
- ✏️ Edit Patient Data
- 🩺 Patient Examination
- 👨‍⚕️ Doctor Selection
- 💊 Medicine Selection
- 💳 Examination & Medicine Cost Calculation
- 🧾 Payment Receipt
- 🖨️ Printable Receipt
- 📊 Transaction History
- 📅 Doctor Schedule
- 🧠 Mental Health Articles
- 🏥 Hospital Profile
- 🎯 Vision & Mission
- 📱 Responsive User Interface

---

## 🛠️ Tech Stack

### Frontend
- HTML5
- CSS3
- Bootstrap 5
- JavaScript
- Responsive Web Design

### Backend
- PHP 8.2
- PHP Session
- MySQLi
- Prepared Statements
- Password Hashing & Verification

### Database
- MySQL

### Deployment & Tools
- Docker
- Railway
- Git
- GitHub
- Visual Studio Code

---

## 🔐 Security

Beberapa implementasi keamanan yang digunakan pada aplikasi:

- Password disimpan menggunakan `password_hash()`
- Login diverifikasi menggunakan `password_verify()`
- Prepared statements untuk proses autentikasi
- Session regeneration setelah login
- Authentication guard pada halaman yang membutuhkan login
- Output data pengguna ditampilkan menggunakan `htmlspecialchars()`

---

## 🔄 Application Flow

```text
Register / Login
       ↓
     Home
       ↓
Patient Registration
       ↓
Patient Queue
       ↓
Examination
       ↓
Doctor & Medicine
       ↓
Payment Receipt
       ↓
Transaction History
```

---

## 📂 Main Modules

### Authentication
Mengelola proses registrasi, login, logout, session, dan keamanan password pengguna.

### Patient Management
Mengelola pendaftaran, informasi, perubahan, serta antrean pasien.

### Examination
Mengelola data pemeriksaan pasien, biaya pemeriksaan, serta obat yang diberikan.

### Payment
Menghitung biaya pemeriksaan dan obat serta menghasilkan struk pembayaran.

### Transaction History
Menyimpan dan menampilkan riwayat pemeriksaan dan transaksi pasien.

### Doctor Schedule
Menampilkan informasi dokter dan jadwal praktik.

### Mental Health Information
Menyediakan profil rumah sakit, informasi pelayanan, visi dan misi, serta artikel edukasi kesehatan mental.

---

## 🎨 UI Design

Antarmuka aplikasi menggunakan konsep modern healthcare dengan kombinasi warna:

- Teal / Green
- Navy
- White
- Soft neutral background

UI dibuat responsive sehingga dapat digunakan pada desktop maupun perangkat mobile.

---

## 🗄️ Database Tables

Database aplikasi terdiri dari beberapa tabel utama:

```text
user
dokter
pasien
obat
periksa
struk
```

---

## 🚀 Deployment

Aplikasi dikemas menggunakan Docker dan di-deploy pada Railway.

Arsitektur deployment:

```text
GitHub Repository
       ↓
Railway Deployment
       ↓
PHP 8.2 Docker Container
       ↓
Railway MySQL Database
```

Konfigurasi database menggunakan environment variables sehingga credential database tidak ditulis langsung di source code.

---

## 👩‍💻 Role

**Full-Stack Web Developer**

Mengerjakan:

- Frontend UI
- Responsive Design
- Backend PHP
- Database Integration
- Authentication
- CRUD Operations
- Security Improvements
- Docker Configuration
- Cloud Deployment
- Git & GitHub Version Control

---

## 📌 Project Status

✅ Authentication  
✅ Patient Management  
✅ Queue Management  
✅ Examination  
✅ Medicine Integration  
✅ Payment Receipt  
✅ Transaction History  
✅ Doctor Schedule  
✅ Mental Health Articles  
✅ Responsive UI  
✅ Security Improvement  
✅ Cloud Deployment  

---

## 👩‍💻 Developer

Developed as a Full-Stack Web Development portfolio project.

**GitHub:** [Veyzaputri](https://github.com/Veyzaputri)

---

### Disclaimer

This website is a portfolio/demo project. Names, schedules, contact information, medical content, doctors, prices, and hospital information shown within the application may be fictional or demonstration data and should not be interpreted as actual medical information or services.
