<div id="label-page">
    <h2>Data Buku</h2>
</div>
<hr>
<div id="content">
    <div class="d-flex justify-content-between my-4">
        <div>
            <a href="index.php?p=buku-input" class="btn btn-primary">Tambah Buku</a>
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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Status</th>
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
                        $sql = "SELECT * FROM tb_buku WHERE judul_buku LIKE '%$pencarian%'
						OR id_buku LIKE '%$pencarian%'
						OR penerbit LIKE '%$pencarian%'
						OR kategori LIKE '%$pencarian%'";

                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM tb_buku LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tb_buku";
                        $no = $posisi * 1;
                    }
                } else {
                    $query = "SELECT * FROM tb_buku LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM tb_buku";
                    $no = $posisi * 1;
                }

                //$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
                $q_tampil_anggota = mysqli_query($db, $query);
                if (mysqli_num_rows($q_tampil_anggota) > 0) {
                    while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
                ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $r_tampil_anggota['id_buku']; ?></td>
                            <td><?php echo $r_tampil_anggota['judul_buku']; ?></td>
                            <td><?php echo $r_tampil_anggota['kategori']; ?></td>
                            <td><?php echo $r_tampil_anggota['penerbit']; ?></td>
                            <td><?php echo $r_tampil_anggota['status']; ?></td>
                            <td class="d-flex">
                                <div><a href="index.php?p=buku-edit&id=<?php echo $r_tampil_anggota['id_buku']; ?>" class="btn btn-primary btn-sm">Edit</a></div> |
                                <div><a href="proses/buku-hapus-proses.php?id=<?php echo $r_tampil_anggota['id_buku']; ?>" onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="btn btn-danger btn-sm">Hapus</a></div>
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>