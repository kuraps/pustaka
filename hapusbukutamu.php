<?php

include 'koneksi.php';
$a = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku_tamu WHERE id='$a'");
if ($query) {
    echo "<meta http-equiv='refresh' content='0; url=tampilbukutamu.php'>";
} else {
    echo "gagal";
}
