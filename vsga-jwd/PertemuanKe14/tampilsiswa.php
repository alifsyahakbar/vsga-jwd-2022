<?php

include 'koneksi.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIGITAL TALENT 2022</title>
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
                            <a class="nav-link" href="inputsiswa.php">Daftar Baru</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-4">
            <div class="col">
                <h1>Pendaftar</h1>
                <hr>
                <div class="alert alert-danger d-none" role="alert">
                    A simple danger alert—check it out!
                </div>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $q = mysqli_query($db, "Select * FROM siswa");
                        while ($b = mysqli_fetch_array($q)) {;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $b['nama_siswa']; ?></td>
                                <td><?php echo $b['alamat']; ?></td>
                                <td><?php echo $b['jeniskelamin']; ?></td>
                                <td><?php echo $b['agama']; ?></td>
                                <td><?php echo $b['sekolahasal']; ?></td>
                                <td>
                                    <a href="edit.php?id_siswa=<?php echo $b['id_siswa']; ?>" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>