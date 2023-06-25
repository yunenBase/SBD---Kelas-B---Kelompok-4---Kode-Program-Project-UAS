<?php
// $conn = mysql_connect("localhost", "root", "", "rencanastudi");
require 'function.php';

// $mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST["submit"])) {

    // $NIM = $_POST["NIM"];
    // $Nama = $_POST["Nama"];
    // $Tanggal_Lahir = $_POST["Tanggal_Lahir"];
    // $Jenis_Kelamin = $_POST["Jenis_Kelamin"];
    // $Alamat = $_POST["Alamat"];
    // $No_Telp = $_POST["No_Telp"];

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'dosen.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'dosen.php';
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
    <title>Tambah data dosen pengampu</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- boxicon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="tambah.css?v=<?php echo time(); ?>" />

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
            <a href="dosen.php">Dosen Pengampu</a>
            <a href="../prodi/prodi.php">Prodi</a>
            <a href="../mataKuliah/mataKuliah.php">Mata Kuliah</a>
            <a href="../krs/krs.php">KRS</a>
        </div>
    </nav>

    <h1>Tambah Dosen</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="NIP_Dosen">NIP Dosen</label><br>
                <input type="text" name="NIP_Dosen" id="NIP_Dosen">
            </li>
            <br>
            <li>
                <label for="Nama_Dosen">Nama Dosen</label><br>
                <input type="text" name="Nama_Dosen" id="Nama_Dosen">
            </li>
            <br>
            <li>
                <button type="submit" name="submit" class="btn-1">submit</button>
            </li>
        </ul>
    </form>
</body>

</html>