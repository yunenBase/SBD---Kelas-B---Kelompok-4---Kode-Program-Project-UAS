<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Database Mahasiswa FTI</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- boxicon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <!-- navbar kiri -->
        <div class="navbarKiri">
            <img src="img/unand.png" alt="gambarUnand" />
            <p>Universitas Andalas</p>
            <box-icon type="logo" name="typescript"></box-icon>
        </div>
        <!-- navbar kanan -->
        <div class="navbarKanan">
            <a href="#">Home</a>
            <a href="tabMahasiswa/mahasiswa.php">Mahasiswa</a>
            <a href="dosenPA/Dosen_PA.php">Dosen PA</a>
            <a href="dosen/dosen.php">Dosen Pengampu</a>
            <a href="prodi/prodi.php">Prodi</a>
            <a href="mataKuliah/mataKuliah.php">Mata Kuliah</a>
            <a href="krs/krs.php">KRS</a>
        </div>
    </nav>

    <!-- homepage -->
    <section class="homepage" id="#">
        <div class="gambarfti">
            <img src="img/unand.png" alt="" />
            <div class="garis"></div>
        </div>
        <div class="tulisan">
            <div class="tulisan1">UNIVERSITAS ANDALAS</div>
            <div class="tulisan2">
                Database <br><span>Rencana Studi FTI</span>
            </div>
            <div class="tulisan3">
                Fakultas Teknologi Informasi Universitas Andalas menyediakan program studi S1 dengan 3 departemen yaitu
                Teknik
                Komputer, Sistem Informasi dan Informatika. Fakultas Teknologi Informasi mengombinasikan 3 elemen utama
                yaitu
                perangkat keras (hardware), perangkat lunak (software), dan manusia (brainware) secara terstruktur yang
                dijalankan atas kemauan dan perintah manusia.
            </div>
            <div class="tombol">
                <a class="submit" href="universal/universal.php">Lihat Tabel Universal!</a>
                <a class="logout" href="index.php">Logout</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>

<!-- ©amadiketoe -->