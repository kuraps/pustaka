<html>

<head>
    <title>WP 1</title>
</head>

<body>

    <?php
    include 'koneksi.php';
    $a = $_GET['id'];
    $tampil = "SELECT * FROM buku_tamu WHERE id='$a'";
    $query = mysqli_query($koneksi, $tampil) or die("gagal" . mysqli_connect_error());
    $row = mysqli_fetch_array($query);
    $a = $row['id'];
    $b = $row['nama'];
    $c = $row['email'];
    $d = $row['pesan'];

    ?>
    <form id="form1" name="form1" method="post" action="updatebukutamu.php">
        <table width="64%" border="0" align="center">
            <tr>
                <td colspan="2" align="center" bgcolor="#FFFF99">
                    <h2 style="font:'Courier New',Courier,monospace; color:#F36">Edit Buku Tamu</h2>
                </td>
            </tr>
            <tr>
                <td>ID Buku Tamu</td>
                <td><input type="text" name="id" readonly value="<?= $a; ?>" /></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama" value="<?= $b; ?>" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email" value="<?= $c; ?>" /></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea type="text" cols="45" rows="5" name="pesan" id="pesan"><?= $d; ?></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="update" id="update" value="UPDATE" />
                    <input type="reset" name="cancel" id="cancel" value="CANCEL" />
                </td>
            </tr>
        </table>
    </form>

</body>

</html>