<?php
include 'koneksi.php';

$buku = $_GET['id'];
$a = mysqli_query($db, "select * from tb_buku where id_buku = '$buku'");
$data = mysqli_fetch_array($a);

?>
<div id="label-page" class="d-flex justify-content-between items-center">
    <h2>Edit Data Buku</h2>
    <div class="text-center">
        <a href="index.php?p=buku" class="btn btn-dark btn-sm">Kembali</a>
    </div>
</div>
<hr>
<div id="content">
    <form action="proses/buku-edit-proses.php" method="post">
        <div class="row mb-3">
            <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $data['id_buku']; ?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $data['judul_buku']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $data['kategori']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $data['pengarang']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $data['penerbit']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="status" id="status">
                    <option value="tersedia" <?php if ($data['status'] == 'tersedia') { ?> selected="selected" <?php } ?>>Tersedia</option>
                    <option value="tidak_tersedia" <?php if ($data['status'] == 'tidak_tersedia') { ?> selected="selected" <?php } ?>>Tidak Tersedia</option>
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