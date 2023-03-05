<?php

include 'koneksi.php';

$nama = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$sekolahasal = $_POST['sekolahasal'];

mysqli_query($db, "Insert into siswa (nama_siswa, alamat, jeniskelamin, agama, sekolahasal) value ('$nama', '$alamat', '$jeniskelamin', '$agama', '$sekolahasal' ");
