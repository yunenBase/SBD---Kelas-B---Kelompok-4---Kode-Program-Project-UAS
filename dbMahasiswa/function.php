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

    $NIM = htmlspecialchars($data["NIM"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Tanggal_Lahir = htmlspecialchars($data["Tanggal_Lahir"]);
    $Jenis_Kelamin = htmlspecialchars($data["Jenis_Kelamin"]);
    $Alamat = htmlspecialchars($data["Alamat"]);
    $No_Telp = htmlspecialchars($data["No_Telp"]);

    $query = "INSERT INTO mahasiswa VALUES ('$NIM', '$Nama', '$Tanggal_Lahir', '$Jenis_Kelamin', '$Alamat', '$No_Telp')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($NIM)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE NIM = $NIM");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $NIM = htmlspecialchars($data["NIM"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Tanggal_Lahir = htmlspecialchars($data["Tanggal_Lahir"]);
    $Jenis_Kelamin = htmlspecialchars($data["Jenis_Kelamin"]);
    $Alamat = htmlspecialchars($data["Alamat"]);
    $No_Telp = htmlspecialchars($data["No_Telp"]);

    $query = "UPDATE mahasiswa SET 
        NIM = '$NIM',
        Nama = '$Nama',
        Tanggal_Lahir = '$Tanggal_Lahir',
        Jenis_Kelamin = '$Jenis_Kelamin',
        Alamat = '$Alamat',
        No_Telp = '$No_Telp'
        WHERE NIM = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE Nama LIKE '%$keyword%' OR NIM LIKE '%$keyword%' 
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