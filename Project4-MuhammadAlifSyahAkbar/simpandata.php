<?php

$idanggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$status = 'Tidak Meminjam';

include 'koneksi.php';

mysqli_query($db, "insert into tb_anggota value ('$idanggota', '$nama', '$jenis_kelamin', '$alamat', '$status', 'gambar.png')");

header("Location:tampildata.php");
