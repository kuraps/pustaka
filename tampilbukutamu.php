<html>

<head>
    <title>WP 1</title>
</head>

<body>
    <?php
    include 'koneksi.php';
    $tampil = "SELECT * FROM buku_tamu";
    $query = mysqli_query($koneksi, $tampil) or die("gagal" . mysqli_connect_error());
    $jumlah = mysqli_num_rows($query);

    ?>
    <table width="70%" border="1" style="border:#000" align="center">
        <tr>
            <td colspan="6" align="center">
                <h1><b>DATA BUKU TAMU</b></h1>
            </td>
        </tr>
        <tr align="center" bgcolor="#0066ff">
            <td width="6%"><b>No</b></td>
            <td width="20%"><b>Nama</b></td>
            <td width="25%"><b>Email</b></td>
            <td width="49"><b>Pesan</b></td>
            <td width="20%" colspan="2"><b>Action</b></td>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $a = $row['id'];
            $b = $row['nama'];
            $c = $row['email'];
            $d = $row['pesan'];
            ?>
            <tr align="center">
                <td><?= $no++ ?></td>
                <td><?= $b ?></td>
                <td><?= $c ?></td>
                <td><?= $d ?></td>
                <td>
                    <a href="hapusbukutamu.php?id=<?= $a ?>" onclick="return confirm ('Anda Yakin Ingin Menghapus Item ini?');">HAPUS</a>
                    <a href="editbukutamu.php?id=<?= $a ?>">EDIT</a></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="6">Jumlah Record : <?= $jumlah ?></td>
        </tr>
    </table>
</body>

</html>