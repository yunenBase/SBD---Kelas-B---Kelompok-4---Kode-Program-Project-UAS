<?php
require 'function.php';

$krs = query("SELECT * FROM krs");

//tombol cari di klik
if (isset($_POST["cari"])) {
    $krs = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- boxicon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="krs.css?v=<?php echo time(); ?>" />

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
            <a href="../dosenPA/Dosen_PA.php">Dosen PA</a>
            <a href="../dosen/dosen.php">Dosen Pengampu</a>
            <a href="../prodi/prodi.php">Prodi</a>
            <a href="../mataKuliah/mataKuliah.php">Mata Kuliah</a>
            <a href="krs.php">KRS</a>
        </div>
    </nav>

    <div class="container">
        <!-- table -->
        <h1>Tabel Kartu Rencana Studi</h1>

        <!-- tambah data mahasiswa -->
        <div class="tambahCari">

            <form action="" method="post">
                <input type="text" name="keyword" size="25" placeholder="masukkan kata kunci...">
                <button type="submit" name="cari">cari</button>
            </form>
        </div>

        <table cellspacing="0">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Kode MK</th>
                <th>Kode PA</th>
                <th>NIP Dosen</th>
                <th>Kode Prodi</th>
                <th>Sem TA</th>
                <th>IP SemLa</th>
                <th>Max SKS</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($krs as $row): ?>
            <tr>
                <td>
                    <?= $i ?>
                </td>
                <td>
                    <?= $row["NIM"] ?>
                </td>
                <td>
                    <?= $row["Kode_MK"] ?>
                </td>
                <td>
                    <?= $row["Kode_PA"] ?>
                </td>
                <td>
                    <?= $row["NIP_Dosen"] ?>
                </td>
                <td>
                    <?= $row["Kode_Prodi"] ?>
                </td>
                <td>
                    <?= $row["Sem_TA"] ?>
                </td>
                <td>
                    <?= $row["IP_SemLa"] ?>
                </td>
                <td>
                    <?= $row["Max_SKS"] ?>
                </td>

            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>

        </table>


    </div>




</body>

</html>