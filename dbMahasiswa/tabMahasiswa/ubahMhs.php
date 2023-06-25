<?php
// $conn = mysql_connect("localhost", "root", "", "rencanastudi");
require '../function.php';

//ambil data di url
$NIM = $_GET["NIM"];

//query data berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE NIM = $NIM")[0];


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
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'ubahMhs.php';
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
    <title>Ubah data mahasiswa</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- boxicon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="ubahMhs.css?v=<?php echo time(); ?>" />

    <!-- google fonts -->
    <link rel=" preconnect" href="https://fonts.googleapis.com" />
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
            <a href="mahasiswa.php">Mahasiswa</a>
            <a href="../dosenPA/Dosen_PA.php">Dosen PA</a>
            <a href="../dosen/dosen.php">Dosen Pengampu</a>
            <a href="../prodi/prodi.php">Prodi</a>
            <a href="../mataKuliah/mataKuliah.php">Mata Kuliah</a>
            <a href="../krs/krs.php">KRS</a>
        </div>
    </nav>

    <!-- batas -->
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["NIM"]; ?>">
        <ul>
            <li>
                <label for="NIM">NIM</label><br>
                <input type="text" name="NIM" id="NIM" require value="<?= $mhs["NIM"]; ?>">
            </li>
            <br>
            <li>
                <label for="Nama">Nama</label><br>
                <input type="text" name="Nama" id="Nama" require value="<?= $mhs["Nama"]; ?>">
            </li>
            <br>
            <li>
                <label for="Tanggal_Lahir">Tanggal_Lahir</label><br>
                <input type="text" name="Tanggal_Lahir" id="Tanggal_Lahir" require
                    value="<?= $mhs["Tanggal_Lahir"]; ?>">
            </li>
            <br>
            <li>
                <label for="Jenis_Kelamin">Jenis_Kelamin</label><br>
                <input type="text" name="Jenis_Kelamin" id="Jenis_Kelamin" require
                    value="<?= $mhs["Jenis_Kelamin"]; ?>">
            </li>
            <br>
            <li>
                <label for="Alamat">Alamat</label><br>
                <input type="text" name="Alamat" id="Alamat" require value="<?= $mhs["Alamat"]; ?>">
            </li>
            <br>
            <li>
                <label for="No_Telp">No_Telp</label><br>
                <input type="text" name="No_Telp" id="No_Telp" require value="<?= $mhs["No_Telp"]; ?>">
            </li>
            <br>
            <li>
                <button type="submit" name="submit" class="btn-1">Ubah</button>
            </li>
        </ul>
    </form>
</body>

</html>