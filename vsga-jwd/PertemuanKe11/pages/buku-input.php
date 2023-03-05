<?php
include 'koneksi.php';

$query = mysqli_query($db, "SELECT max(id_buku) as kodeTerbesar FROM tb_buku");
$data = mysqli_fetch_array($query);
$kodeBuku = $data['kodeTerbesar'];

$urutan = (int) substr($kodeBuku, 3, 3);

$urutan++;

$huruf = "BK";
$kodeBuku = $huruf . sprintf("%03s", $urutan);

?>
<div id="label-page">
    <h3>Input Data Buku</h3>
</div>
<div id="content">
    <form action="proses/buku-input-proses.php" method="post">
        <div class="row mb-3">
            <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?= $kodeBuku; ?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kategori" name="kategori" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pengarang" name="pengarang" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="status">
                    <option selected>Pilih Status</option>
                    <option name="status" value="tersedia">Tersedia</option>
                    <option name="status" value="tidak_tersedia">Tidak Tersedia</option>
                </select>
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