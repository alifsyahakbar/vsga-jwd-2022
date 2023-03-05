<?php
include "../koneksi.php";
$id_transaksi = $_GET['id_transaksi'];
$q_tampil_transaksi = mysqli_query($db, "SELECT * FROM tb_transaksi WHERE id_transaksi = '$id_transaksi'");
$r_tampil_transaksi = mysqli_fetch_array($q_tampil_transaksi);
?>
<div id="label-page">
    <h3>Kartu Transaksi</h3>
</div>
<div id="content">
    <table id="tabel-input" class="table table-striped">
        <tr>
            <td class="label-formulir">ID Transaksi</td>
            <td class="isian-formulir">: <?php echo $r_tampil_transaksi['id_transaksi']; ?></td>
        </tr>
        <tr>
            <td class="label-formulir">ID Anggota</td>
            <td class="isian-formulir">: <?php echo $r_tampil_transaksi['id_anggota']; ?></td>
        </tr>
        <tr>
            <td class="label-formulir">Nama</td>
            <td class="isian-formulir">: <?php echo $r_tampil_transaksi['nama_anggota']; ?></td>
        </tr>
        <tr>
            <td class="label-formulir">ID Buku</td>
            <td class="isian-formulir">: <?php echo $r_tampil_transaksi['id_buku']; ?></td>
        </tr>
        <tr>
            <td class="label-formulir">Tanggal Peminjaman</td>
            <td class="isian-formulir">: <?php echo $r_tampil_transaksi['tgl_pinjam']; ?></td>
        </tr>
        <tr>
            <td class="label-formulir">Tanggal Pengembalian</td>
            <td class="isian-formulir">: <?php echo $r_tampil_transaksi['tgl_kembali']; ?></td>
        </tr>
    </table>
</div>
<script>
    window.print();
</script>