<?php
require 'function.php';

$mahasiswa = query("SELECT krs.Kode_PA, dosen_pa.Nama_PA, krs.NIP_Dosen, dosen_pengampu.Nama_Dosen, krs.NIM, mahasiswa.Nama, mahasiswa.Tanggal_Lahir, mahasiswa.Jenis_Kelamin, mahasiswa.Alamat, mahasiswa.No_Telp, krs.Kode_MK, matakuliah.Nama_MK, matakuliah.SKS, matakuliah.Jadwal, matakuliah.Ruangan, matakuliah.Kelas, krs.Kode_Prodi, prodi.Nama_Prodi, krs.Sem_TA, krs.IP_SemLa, krs.Max_SKS FROM dosen_pa, dosen_pengampu, mahasiswa, matakuliah, prodi, krs WHERE krs.Kode_PA=dosen_pa.Kode_PA and krs.NIP_Dosen=dosen_pengampu.NIP_Dosen and krs.NIM=mahasiswa.NIM and krs.Kode_MK=matakuliah.Kode_MK and krs.Kode_Prodi=prodi.Kode_Prodi ORDER BY mahasiswa.NIM ASC;");

//tombol cari di klik
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- boxicon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="universal.css">

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
            <a href="../krs/krs.php">KRS</a>
        </div>
    </nav>

    <div class="bungkus">
        <div class="node">
            <h1>Tabel Universal</h1>
        </div>
        <div class="container">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor.</th>
                        <th>Kode PA</th>
                        <th>Nama PA</th>
                        <th>NIP Dosen</th>
                        <th>Nama Dosen</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tgl Lahir</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Kode Mk</th>
                        <th>Nama MK</th>
                        <th>SKS</th>
                        <th>Jadwal</th>
                        <th>Ruangan</th>
                        <th>Kelas</th>
                        <th>Kode Prodi</th>
                        <th>Nama Prodi</th>
                        <th>Sem TA</th>
                        <th>IP SemLA</th>
                        <th>Max SKS</th>
                    </tr>
                </thead>

                <?php $i = 1 ?>
                <?php foreach ($mahasiswa as $row): ?>
                    <tbody>
                        <tr>
                            <td>
                                <?= $i ?>
                            </td>
                            <td>
                                <?= $row["Kode_PA"] ?>
                            </td>
                            <td>
                                <?= $row["Nama_PA"] ?>
                            </td>
                            <td>
                                <?= $row["NIP_Dosen"] ?>
                            </td>
                            <td>
                                <?= $row["Nama_Dosen"] ?>
                            </td>
                            <td>
                                <?= $row["NIM"] ?>
                            </td>
                            <td>
                                <?= $row["Nama"] ?>
                            </td>
                            <td>
                                <?= $row["Tanggal_Lahir"] ?>
                            </td>
                            <td>
                                <?= $row["Jenis_Kelamin"] ?>
                            </td>
                            <td>
                                <?= $row["Alamat"] ?>
                            </td>
                            <td>
                                <?= $row["No_Telp"] ?>
                            </td>
                            <td>
                                <?= $row["Kode_MK"] ?>
                            </td>
                            <td>
                                <?= $row["Nama_MK"] ?>
                            </td>
                            <td>
                                <?= $row["SKS"] ?>
                            </td>
                            <td>
                                <?= $row["Jadwal"] ?>
                            </td>
                            <td>
                                <?= $row["Ruangan"] ?>
                            </td>
                            <td>
                                <?= $row["Kelas"] ?>
                            </td>
                            <td>
                                <?= $row["Kode_Prodi"] ?>
                            </td>
                            <td>
                                <?= $row["Nama_Prodi"] ?>
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
                    </tbody>

                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>

            </table>
        </div>

    </div>


</body>

</html>