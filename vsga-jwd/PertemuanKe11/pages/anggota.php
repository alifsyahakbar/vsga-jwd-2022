<div id="label-page">
    <h2>Data Anggota</h2>
</div>
<hr>
<div id="content">
    <div class="d-flex justify-content-between my-4">
        <div>
            <a href="index.php?p=anggota-input" class="btn btn-primary">Tambah Anggota</a>
            <a target="_blank" href="pages/cetak.php"><img src="images/print.png" height="50px" height="50px"></a>
        </div>
        <div class="mr-auto p-2 ">
            <form class="d-flex my-2 my-lg-0" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="pencarian">
                <button class="btn btn-dark my-2 my-sm-0" type="submit" name="search">Search</button>
            </form>
        </div>
    </div>


    <div class="table-responsive-lg">
        <table class="table table-hover table-border">
            <thead style="background-color:#6e85b7 ; color:white;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Anggota</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $batas = 5;
                extract($_GET);
                if (empty($hal)) {
                    $posisi = 0;
                    $hal = 1;
                    $nomor = 1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                    $nomor = $posisi + 1;
                }
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
                    if ($pencarian != "") {
                        $sql = "SELECT * FROM tb_anggota WHERE nama LIKE '%$pencarian%'
						OR id_anggota LIKE '%$pencarian%'
						OR jenis_kelamin LIKE '%$pencarian%'
						OR alamat LIKE '%$pencarian%'";

                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM tb_anggota LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tb_anggota";
                        $no = $posisi * 1;
                    }
                } else {
                    $query = "SELECT * FROM tb_anggota LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM tb_anggota";
                    $no = $posisi * 1;
                }

                //$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
                $q_tampil_anggota = mysqli_query($db, $query);
                if (mysqli_num_rows($q_tampil_anggota) > 0) {
                    while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
                        if (empty($r_tampil_anggota['foto']) or ($r_tampil_anggota['foto'] == '-'))
                            $foto = "admin-no-photo.jpg";
                        else
                            $foto = $r_tampil_anggota['foto'];
                ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $r_tampil_anggota['id_anggota']; ?></td>
                            <td><?php echo $r_tampil_anggota['nama']; ?></td>
                            <td><img src="images/<?php echo $foto; ?>" width=70px height=70px></td>
                            <td><?php echo $r_tampil_anggota['jenis_kelamin']; ?></td>
                            <td><?php echo $r_tampil_anggota['alamat']; ?></td>
                            <td class="">
                                <div><a target="_blank" href="pages/cetak_kartu.php?id_anggota=<?php echo $r_tampil_anggota['id_anggota']; ?>" class="btn btn-dark btn-sm">Cetak Kartu</a></div>
                                <div><a href="index.php?p=anggota-edit&id_anggota=<?php echo $r_tampil_anggota['id_anggota']; ?>" class="btn btn-primary btn-sm">Edit</a></div>
                                <div><a href="proses/anggota-hapus-proses.php?id_anggota=<?php echo $r_tampil_anggota['id_anggota']; ?>" onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="btn btn-danger btn-sm">Hapus</a></div>
                            </td>
                        </tr>
                <?php $nomor++;
                    }
                } else {
                    echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
                } ?>
        </table>
    </div>
    </tbody>
    </table>
    <hr>

    <?php
    if (isset($_POST['pencarian'])) {
        if ($_POST['pencarian'] != '') {
            echo "<div style=\"float:left;\">";
            $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
            echo "Data Hasil Pencarian: <b>$jml</b>";
            echo "</div>";
        }
    } else { ?>
        <div style="float: left;">
            <?php
            $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
            echo "Jumlah Data : <b>$jml</b>";
            ?>
        </div>
        <div class="pagination">
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i = 1; $i <= $jml_hal; $i++) {
                if ($i != $hal) {
                    echo "<a href=\"?p=anggota&hal=$i\">$i</a>";
                } else {
                    echo "<a class=\"active\">$i</a>";
                }
            }
            ?>
        </div>
    <?php
    }
    ?>
</div>