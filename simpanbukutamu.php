<?php

include 'koneksi.php';

$a = $_POST['nama'];
$b = $_POST['email'];
$c = $_POST['pesan'];

// ada 2 cara mengquery MYSQLI, cara pertama yang umum digunakan di WEBPROGRAMMING 2
//CARA PERTAMA : $query = $koneksi->query("INSERT INTO buku_tamu VALUES ('','$a','$b','$c')");

$query = mysqli_query($koneksi, "INSERT INTO buku_tamu VALUES ('','$a','$b','$c')");
if ($query)
    echo "<meta http-equiv='refresh' content='0 url=tambahbukutamu.php?Data Telah Tersimpan'>";
else
    echo "gagal";
