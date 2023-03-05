<?php
include 'koneksi.php';

$anggota = $_GET['id_anggota'];
$a = mysqli_query($db, "select * from tb_anggota where id_anggota = '$anggota'");
$data = mysqli_fetch_array($a);

?>

<div id="label-page" class="d-flex justify-content-between items-center">
    <h2>Edit Data Anggota</h2>
    <div class="text-center">
        <a href="index.php?p=anggota" class="btn btn-dark btn-sm">Kembali</a>
    </div>
</div>
<hr>
<div id="content">
    <form action="proses/anggota-edit-proses.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $data['foto']; ?>" name="foto_lama" value="foto_lama">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Foto Lama</label>
            <div class="col-sm-10">
                <img src="./images/<?php echo $data['foto']; ?>" alt="" height="150px">
            </div>
        </div>
        <div class="row mb-3">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="foto" name="foto">
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_anggota" class="col-sm-2 col-form-label">ID Anggota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $data['id_anggota']; ?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="jenis_kelamin" <?php if ($data['jenis_kelamin'] == 'laki-laki') {
                                                                                                                                echo 'checked';
                                                                                                                            } else {
                                                                                                                                echo '';
                                                                                                                            } ?>>
                    <label class="form-check-label" for="gridRadios1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="jenis_kelamin" <?php if ($data['jenis_kelamin'] == 'perempuan') {
                                                                                                                                echo 'checked';
                                                                                                                            } else {
                                                                                                                                echo '';
                                                                                                                            } ?>>
                    <label class="form-check-label" for="gridRadios2">
                        Perempuan
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="alamat" rows="3" name="alamat" value="<?php echo $data['alamat']; ?>" required><?php echo $data['alamat']; ?></textarea>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="meminjam" id="meminjam" <?php if ($data['status'] == 'meminjam') {
                                                                                                                    echo 'checked';
                                                                                                                } else {
                                                                                                                    echo '';
                                                                                                                } ?>>
                    <label class="form-check-label" for="meminjam">
                        Meminjam
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="tidak_meminjam" id="tidak_meminjam" <?php if ($data['status'] == 'tidak_meminjam') {
                                                                                                                                echo 'checked';
                                                                                                                            } else {
                                                                                                                                echo '';
                                                                                                                            } ?>>
                    <label class="form-check-label" for="tidak_meminjam">
                        Tidak Meminjam
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
            </div>
        </div>
    </form>
</div>