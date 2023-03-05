<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Anggota</title>
</head>

<body>
    <h1>DTS Junir Web Developer</h1>
    <p>Form Input Data Anggota</p>
    <br>
    <a href="tampildata.php">Kembali</a>
    <br><br>
    <form action="simpandata.php" method="post">
        <table>
            <tr>
                <td>ID Anggota</td>
                <td><input type="text" name="id_anggota" id="id_anggota"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="" value="save">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>