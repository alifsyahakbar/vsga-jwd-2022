<?php
include 'koneksi.php';

$query = mysqli_query($db, "SELECT max(id_anggota) as kodeTerbesar FROM tb_anggota");
$data = mysqli_fetch_array($query);
$kodeAnggota = $data['kodeTerbesar'];

$urutan = (int) substr($kodeAnggota, 3, 3);

$urutan++;

$huruf = "AG";
$kodeAnggota = $huruf . sprintf("%03s", $urutan);

$anggotas = mysqli_query($db, "SELECT * FROM tb_anggota");
$bukus = mysqli_query($db, "SELECT * FROM tb_buku");

?>
<div id="label-page" class="d-flex justify-content-between items-center">
    <h2>Input Data Anggota</h2>
    <div class="text-center">
        <a href="index.php?p=anggota" class="btn btn-dark btn-sm">Kembali</a>
    </div>
</div>
<hr>
<div id="content">
    <form action="proses/anggota-input-proses.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="foto" name="foto" required>
                <small><span style="color:red;">*</span> Pastikan ukuran foto tinggi dan lebar sama panjang</small>
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_anggota" class="col-sm-2 col-form-label">ID Anggota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?= $kodeAnggota; ?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                    <label class="form-check-label" for="laki-laki">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="meminjam" id="meminjam">
                    <label class="form-check-label" for="meminjam">
                        Meminjam
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="tidak_meminjam" id="tidak_meminjam">
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