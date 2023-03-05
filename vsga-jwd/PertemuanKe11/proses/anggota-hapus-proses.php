<?php

include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];


mysqli_query($db, "DELETE from tb_anggota where id_anggota = '$id_anggota'");

header('location:../index.php?p=anggota');
