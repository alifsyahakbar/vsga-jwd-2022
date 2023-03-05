<?php
include '../koneksi.php';

$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$status = $_POST['status'];

$sql =
    "INSERT INTO tb_buku (id_buku, judul_buku, kategori, pengarang, penerbit, status)
		VALUES('$id_buku','$judul_buku','$kategori','$pengarang', '$penerbit', '$status')";
mysqli_query($db, $sql);

header("location:../index.php?p=buku");
