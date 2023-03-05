<?php
include '../koneksi.php';


$id_transaksi = $_POST['id_transaksi'];
$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$id_buku = $_POST['id_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];

$sql =
    "INSERT INTO tb_transaksi (id_transaksi, id_anggota, nama_anggota, id_buku, tgl_pinjam)
		VALUES('$id_transaksi','$id_anggota', '$nama_anggota', '$id_buku','$tgl_pinjam')";
mysqli_query($db, $sql);

header("location:../index.php?p=transaksi-peminjaman");
