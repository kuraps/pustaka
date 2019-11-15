<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_berita");

// KITA CEK KONEKSI

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal karena : " . mysqli_connect_error();
}
