<?php

require 'function.php';

$Kode_MK = $_GET["Kode_MK"];

if (hapus($Kode_MK) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'matakuliah.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'matakuliah.php';
    </script>
    ";
}

?>