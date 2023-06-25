<?php

require 'function.php';

$NIP_Dosen = $_GET["NIP_Dosen"];

if (hapus($NIP_Dosen) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'dosen.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'dosen.php';
    </script>
    ";
}

?>