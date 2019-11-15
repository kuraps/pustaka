<?php

if (isset($_POST['update'])) {

    include 'koneksi.php';

    $a = $_POST['id'];
    $b = $_POST['nama'];
    $c = $_POST['email'];
    $d = $_POST['pesan'];
    $query = mysqli_query($koneksi, "UPDATE buku_tamu SET nama='$b',email='$c',pesan='$d' WHERE id='$a'");
    if ($query) {
        echo "<meta http-equiv='refresh' content='0; url=tampilbukutamu.php'>";
    } else {
        echo "gagal";
    }
}
