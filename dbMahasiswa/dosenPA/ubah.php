<?php
// $conn = mysql_connect("localhost", "root", "", "rencanastudi");
require 'function.php';

//ambil data di url
$Kode_PA = $_GET["Kode_PA"];

//query data berdasarkan id
$mhs = query("SELECT * FROM dosen_pa WHERE Kode_PA = $Kode_PA")[0];


if (isset($_POST["submit"])) {

    // $NIM = $_POST["NIM"];
    // $Nama = $_POST["Nama"];
    // $Tanggal_Lahir = $_POST["Tanggal_Lahir"];
    // $Jenis_Kelamin = $_POST["Jenis_Kelamin"];
    // $Alamat = $_POST["Alamat"];
    // $No_Telp = $_POST["No_Telp"];

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'Dosen_PA.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'Dosen_PA.php';
            </script>
        ";
    }


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data dosen_pa</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- boxicon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="ubah.css" />

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
            <img src="../img/unand.png" alt="gambarUnand" />
            <p>Universitas Andalas</p>
            <box-icon type="logo" name="typescript"></box-icon>
        </div>
        <!-- navbar kanan -->
        <div class="navbarKanan">
            <a href="../home.php">Home</a>
            <a href="../tabMahasiswa/mahasiswa.php">Mahasiswa</a>
            <a href="Dosen_PA.php">Dosen PA</a>
            <a href="../dosen/dosen.php">Dosen Pengampu</a>
            <a href="../prodi/prodi.php">Prodi</a>
            <a href="../mataKuliah/mataKuliah.php">Mata Kuliah</a>
            <a href="../krs/krs.php">KRS</a>
        </div>
    </nav>

    <h1>Ubah Data Dosen PA</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["Kode_PA"]; ?>">
        <ul>
            <li>
                <label for="Kode_PA">Kode_PA</label>
                <input type="text" name="Kode_PA" id="Kode_PA" require value="<?= $mhs["Kode_PA"]; ?>">
            </li>
            <li>
                <label for="Nama_PA">Nama_PA</label>
                <input type="text" name="Nama_PA" id="Nama_PA" require value="<?= $mhs["Nama_PA"]; ?>">
            </li>

            <li>
                <button type="submit" name="submit">Ubah</button>
            </li>
        </ul>
    </form>
</body>

</html>