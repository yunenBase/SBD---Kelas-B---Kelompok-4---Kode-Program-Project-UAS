<?php
require 'function.php';

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username 
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: home.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>

    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="bungkus">
            <h2>Silahkan Login</h2>

            <?php if (isset($error)) {
                echo "
        <script>
                alert('gagal login!');
                document.location.href = 'login.php';
        </script>
        ";
            } ?>

            <form action="" method="post">
                <ul>
                    <li>
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username">
                    </li>
                    <li>
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <button type="submit" name="login">Login</button>
                    </li>
                </ul>
            </form>

            <p>Daftar sebagai admin <a href="registrasi.php">disini!</a></p>
        </div>

    </div>

</body>

</html>

</html>