<?php

require 'function.php';

$Kode_Prodi = $_GET["Kode_Prodi"];

if (hapus($Kode_Prodi) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'prodi.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'prodi.php';
    </script>
    ";
}

?>