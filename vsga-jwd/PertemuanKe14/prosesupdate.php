<?php

include "koneksi.php";

$id_siswa = $_POST['id_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$sekolahasal = $_POST['sekolahasal'];

$query = mysqli_query($db, "update siswa set nama_siswa = '$nama_siswa', alamat = '$alamat', jeniskelamin = '$jeniskelamin', agama = '$agama', sekolahasal = '$sekolahasal' where id_siswa = '$id_siswa'");


if ($query) {
    echo "Data Gagal diUpdate";
} else {
    header('location:tampilsiswa.php');
}
