<?php

include 'koneksi.php';


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIGITAL TALENT | Input Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">DIGITAL TALENT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="tampilsiswa.php">Calon Peserta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar Baru</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-4">
            <div class="col">
                <h1>Update Data Siswa</h1>
                <hr>
                <?php
                $id_siswa = $_GET['id_siswa'];
                $a = mysqli_query($db, "select * from siswa where id_siswa = '$id_siswa'");
                $data = mysqli_fetch_array($a);
                ?>
                <form action="prosessimpan.php" method="post">
                    <div class="row mb-3">
                        <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="L">
                                <label class="form-check-label" for="gridRadios1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="P">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="agama" name="agama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sekolahasal" class="col-sm-2 col-form-label">Sekolah Asal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sekolahasal" name="sekolahasal">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
                            <button type="reset" class="btn btn-info" name="reset" value="reset">Reset</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>