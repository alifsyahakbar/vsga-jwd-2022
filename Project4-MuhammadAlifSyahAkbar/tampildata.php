<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>

<body>
    <div>
        <h1>DTS Junior Web Developer</h1>
        <p>Halaman Menampilkan Data Anggota</p>
    </div>

    <div>
        <ul>
            <li><a href="index.php">Tampil Data</a></li>
            <li><a href="inputdata.php">Input Data</a></li>
        </ul>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>No</td>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $no = 1;
            $q = mysqli_query($db, "select * from tb_anggota");
            $cek = mysqli_num_rows($q);
            if ($cek > 0) {
                while ($d = mysqli_fetch_array($q)) {
            ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $d['id_anggota']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['jenis_kelamin']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['status']; ?></td>
                        <td>Edit | Hapus</td>
                    </tr>
                <?php
                    $no++;
                }
            } else {
                ?>
                <tr>
                    <td colspan="7" style="text-align: center;">Data tidak ditemukan</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>