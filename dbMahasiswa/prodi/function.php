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

    $Kode_Prodi = htmlspecialchars($data["Kode_Prodi"]);
    $Nama_Prodi = htmlspecialchars($data["Nama_Prodi"]);

    $query = "INSERT INTO prodi VALUES ('$Kode_Prodi', '$Nama_Prodi')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($Kode_Prodi)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM prodi WHERE Kode_Prodi = $Kode_Prodi");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $Kode_Prodi = htmlspecialchars($data["Kode_Prodi"]);
    $Nama_Prodi = htmlspecialchars($data["Nama_Prodi"]);

    $query = "UPDATE prodi SET 
        Kode_Prodi = '$Kode_Prodi',
        Nama_Prodi = '$Nama_Prodi'
        WHERE Kode_Prodi = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM prodi WHERE Nama_Prodi LIKE '%$keyword%' OR Kode_Prodi LIKE '%$keyword%' 
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