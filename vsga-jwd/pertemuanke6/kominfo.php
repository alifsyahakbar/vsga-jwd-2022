<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Validasi</title>
</head>

<body>
    <h1>Membuat Form Validasi Dengan PHP <br> ---</h1>
    <?php
    if (isset($_GET['nama'])) {
        if ($_GET['nama'] == "kosong") {
            echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
        }
    }

    ?>

    <form action="cek.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
                </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur"></td>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tanggal_lahir"></td>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="Jenis_kelamin"></td>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
                </td>
            </tr>
            <td><button type="submit">Kirim</button></tr>
        </table>
    </form>
</body>

</html>