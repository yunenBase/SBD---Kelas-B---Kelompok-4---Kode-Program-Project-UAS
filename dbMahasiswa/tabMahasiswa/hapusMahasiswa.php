<?php

require '../function.php';

$NIM = $_GET["NIM"];

if (hapus($NIM) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'mahasiswa.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'mahasiswa.php';
    </script>
    ";
}

?>