    <?php
    include '../koneksi.php';

    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $status = $_POST['status'];

    $sql =
        "UPDATE tb_buku SET judul_buku = '$judul_buku', kategori = '$kategori', pengarang = '$pengarang', penerbit = '$penerbit', status = '$status' WHERE id_buku = '$id_buku'";
    mysqli_query($db, $sql);

    header('location:../index.php?p=buku');
