<?php
include 'koneksi.php';

$query = mysqli_query($db, "SELECT max(id_transaksi) as kodeTerbesar FROM tb_transaksi");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];

// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeBarang, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;

// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "TR";
$kodeBarang = $huruf . sprintf("%03s", $urutan);

$anggotas = mysqli_query($db, "SELECT * FROM tb_anggota");
$bukus = mysqli_query($db, "SELECT * FROM tb_buku");

?>

<div id="label-page" class="d-flex justify-content-between items-center">
    <h2>Input Transaksi Peminjaman</h2>
    <div class="text-center">
        <a href="index.php?p=transaksi-peminjaman" class="btn btn-dark btn-sm">Kembali</a>
    </div>
</div>
<hr>
<div id="content">
    <form action="proses/transaksi-input-proses.php" method="post">
        <div class="row mb-3">
            <label for="id_transaksi" class="col-sm-2 col-form-label">ID Transaksi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $kodeBarang; ?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_anggota" class="col-sm-2 col-form-label">ID Anggota</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="id_anggota" id="id_anggota">
                    <option value="">Pilih ID Anggota</option>
                    <?php foreach ($anggotas as $anggota) : ?>
                        <option value="<?= $anggota['id_anggota']; ?>"><?= $anggota['id_anggota'];  ?> / <?= $anggota['nama'];  ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_anggota" class="col-sm-2 col-form-label">Anggota</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="nama_anggota" id="nama_anggota">
                    <option value="">Pilih Nama</option>
                    <?php foreach ($anggotas as $anggota) : ?>
                        <option value="<?= $anggota['nama']; ?>"><?= $anggota['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_buku" class="col-sm-2 col-form-label">Buku</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="id_buku" id="id_buku">
                    <option value="">Pilih Buku</option>
                    <?php foreach ($bukus as $buku) : ?>
                        <option value="<?= $buku['id_buku']; ?>"><?= $buku['id_buku']; ?> / <?= $buku['judul_buku']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tgl_pinjam" class="col-sm-2 col-form-label">ID Transaksi</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
            </div>
        </div>
    </form>
</div>