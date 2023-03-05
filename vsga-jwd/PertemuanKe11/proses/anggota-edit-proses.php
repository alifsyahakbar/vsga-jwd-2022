<?php
include '../koneksi.php';

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$foto_lama = $_POST['foto_lama'];

if (isset($_POST['simpan'])) {
    extract($_POST);
    $nama_file   = $_FILES['foto']['name'];
    if (!empty($nama_file)) {
        // Baca lokasi file sementar dan nama file dari form (fupload)
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $id_anggota . "." . $tipe_file;

        // Tentukan folder untuk menyimpan file
        $folder = "../images/$file_foto";
        // Apabila file berhasil di upload
        move_uploaded_file($lokasi_file, "$folder");
    } else
        $file_foto = $foto_lama;

    $sql = "UPDATE tb_anggota SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', status = '$status', foto = '$file_foto'
       
        WHERE id_anggota = '$id_anggota'";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=anggota");
}
