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

    $Kode_PA = htmlspecialchars($data["Kode_PA"]);
    $Nama_PA = htmlspecialchars($data["Nama_PA"]);

    $query = "INSERT INTO dosen_pa VALUES ('$Kode_PA', '$Nama_PA')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($Kode_PA)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM dosen_pa WHERE Kode_PA = $Kode_PA");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $Kode_PA = htmlspecialchars($data["Kode_PA"]);
    $Nama_PA = htmlspecialchars($data["Nama_PA"]);

    $query = "UPDATE dosen_pa SET 
        Kode_PA = '$Kode_PA',
        Nama_PA = '$Nama_PA'
        WHERE Kode_PA = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM dosen_pa WHERE Nama_PA LIKE '%$keyword%' OR Kode_PA LIKE '%$keyword%' 
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