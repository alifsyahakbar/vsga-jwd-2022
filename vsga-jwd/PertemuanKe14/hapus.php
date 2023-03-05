<?php

$id_siswa = $_GET['id'];


$qdelete = mysqli_query($db, "delete from siswa where id_siswa = '$id_siswa");

if ($qdelete) {
    header('location:tampilsiswa.php');
} else {
    echo "Data Gagal dihapus.";
}
