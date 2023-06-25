<?php

$conn = mysqli_connect("localhost", "root", "", "rencanastudijuga");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;

    $Kode_MK = htmlspecialchars($data["Kode_MK"]);
    $Nama_MK = htmlspecialchars($data["Nama_MK"]);
    $SKS = htmlspecialchars($data["SKS"]);
    $Jadwal = htmlspecialchars($data["Jadwal"]);
    $Ruangan = htmlspecialchars($data["Ruangan"]);
    $Kelas = htmlspecialchars($data["Kelas"]);

    $query = "INSERT INTO matakuliah VALUES ('$Kode_MK', '$Nama_MK', '$SKS', '$Jadwal', '$Ruangan', '$Kelas')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($Kode_MK)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM matakuliah WHERE Kode_MK = $Kode_MK");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $Kode_MK = htmlspecialchars($data["Kode_MK"]);
    $Nama_MK = htmlspecialchars($data["Nama_MK"]);
    $SKS = htmlspecialchars($data["SKS"]);
    $Jadwal = htmlspecialchars($data["Jadwal"]);
    $Ruangan = htmlspecialchars($data["Ruangan"]);
    $Kelas = htmlspecialchars($data["Kelas"]);

    $query = "UPDATE matakuliah SET 
        Kode_MK = '$Kode_MK',
        Nama_MK = '$Nama_MK',
        SKS = '$SKS',
        Jadwal = '$Jadwal',
        Ruangan = '$Ruangan',
        Kelas = '$Kelas'
        WHERE Kode_MK = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM matakuliah WHERE Nama_MK LIKE '%$keyword%' OR Kode_MK LIKE '%$keyword%' 
    ";
    return query($query);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
                alert('Username Sudah Ada');
            </script>
        ";

        return false;
    }
    ;

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('Password tidak sama!');
            </script>";
        return false;
    }
    // enkripsi
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password);

    //tambah user ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

?>