<?php

require 'function.php';

$Kode_PA = $_GET["Kode_PA"];

if (hapus($Kode_PA) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'Dosen_PA.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'Dosen_PA.php';
    </script>
    ";
}

?>