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
    $Kode_MK = htmlspecialchars($data["Kode_MK"]);
    $Kode_PA = htmlspecialchars($data["Kode_PA"]);
    $NIP_Dosen = htmlspecialchars($data["NIP_Dosen"]);
    $Kode_Prodi = htmlspecialchars($data["Kode_Prodi"]);
    $Sem_TA = htmlspecialchars($data["Sem_TA"]);
    $IP_SemLa = htmlspecialchars($data["IP_SemLa"]);
    $Max_SKS = htmlspecialchars($data["Max_SKS"]);

    $query = "INSERT INTO krs VALUES ('$NIM', '$Kode_MK', '$Kode_PA', '$NIP_Dosen', '$Kode_Prodi', '$Sem_TA', '$IP_SemLa', '$Max_SKS')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($NIM)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM krs WHERE NIM = $NIM");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $NIM = htmlspecialchars($data["NIM"]);
    $Kode_MK = htmlspecialchars($data["Kode_MK"]);
    $Kode_PA = htmlspecialchars($data["Kode_PA"]);
    $NIP_Dosen = htmlspecialchars($data["NIP_Dosen"]);
    $Kode_Prodi = htmlspecialchars($data["Kode_Prodi"]);
    $Sem_TA = htmlspecialchars($data["Sem_TA"]);
    $IP_SemLa = htmlspecialchars($data["IP_SemLa"]);
    $Max_SKS = htmlspecialchars($data["Max_SKS"]);

    $query = "UPDATE mahasiswa SET 
        NIM = '$NIM',
        Kode_MK = '$Kode_MK',
        Kode_PA = '$Kode_PA',
        NIP_Dosen = '$NIP_Dosen',
        Kode_Prodi = '$Kode_Prodi',
        Sem_TA = '$Sem_TA',
        IP_SemLa = '$IP_SemLa',
        Max_SKS = '$Max_SKS'
        WHERE NIM = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM dosen_pa WHERE Kode_PA LIKE '%$keyword%' OR Nama LIKE '%$keyword%' 
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