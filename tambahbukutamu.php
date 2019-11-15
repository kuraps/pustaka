<html>

<head>
    <title>WP 1</title>
</head>

<body>

    <form id="formadd" name="formadd" method="POST" action="simpanbukutamu.php">
        <table width="53%" border="0" align="left">
            <tr>
                <td colspan="3" align="center">
                    <h2 style="font:Tahoma,Geneva,sans-serif;color:#30f;">Buku Tamu</h2>
                </td>
            </tr>
            <tr>
                <td width="16%">Nama</td>
                <td width="4%">:</td>
                <td width="80%"><input type="text" name="nama" id="nama" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" id="email" /></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>:</td>
                <td><textarea name="pesan" id="pesan" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="kirim" id="kirim" value="KIRIM" />
                    <input type="reset" name="batal" id="batal" value="BATAL" />
                    <a href="tampilbukutamu.php">[ Lihat Buku Tamu ]</a>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>