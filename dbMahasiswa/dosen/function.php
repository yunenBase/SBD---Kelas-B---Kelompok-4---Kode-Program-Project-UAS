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

    $NIP_Dosen = htmlspecialchars($data["NIP_Dosen"]);
    $Nama_Dosen = htmlspecialchars($data["Nama_Dosen"]);

    $query = "INSERT INTO dosen_pengampu VALUES ('$NIP_Dosen', '$Nama_Dosen')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($NIP_Dosen)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM dosen_pengampu WHERE NIP_Dosen = $NIP_Dosen");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $NIP_Dosen = htmlspecialchars($data["NIP_Dosen"]);
    $Nama_Dosen = htmlspecialchars($data["Nama_Dosen"]);

    $query = "UPDATE dosen_pengampu SET 
        NIP_Dosen = '$NIP_Dosen',
        Nama_Dosen = '$Nama_Dosen'
        WHERE NIP_Dosen = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM dosen_pengampu WHERE Nama_Dosen LIKE '%$keyword%' OR NIP_Dosen LIKE '%$keyword%' 
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