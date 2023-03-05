<div id="label-page">
    <h2>Transaksi Peminjaman</h2>
</div>
<hr>
<div id="content">
    <div class="d-flex justify-content-between my-4">
        <div>
            <a href="index.php?p=transaksi-peminjaman-input" class="btn btn-primary">Transaksi Baru</a>
            <a target="_blank" href="pages/cetak.php"><img src="images/print.png" height="50px" height="50px"></a>
        </div>
        <div class="mr-auto p-2 ">
            <form class="d-flex my-2 my-lg-0" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="pencarian">
                <button class="btn btn-dark my-2 my-sm-0" type="submit" name="search">Search</button>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">ID Anggota</th>
                    <th scope="col">Nama</th>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
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
                        $sql = "SELECT * FROM tb_transaksi WHERE id_buku LIKE '%$pencarian%'
						OR id_transaksi LIKE '%$pencarian%'
						OR id_anggota LIKE '%$pencarian%'";

                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM tb_transaksi LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tb_transaksi";
                        $no = $posisi * 1;
                    }
                } else {
                    $query = "SELECT * FROM tb_transaksi LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM tb_transaksi";
                    $no = $posisi * 1;
                }

                //$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
                $q_tampil_transaksi = mysqli_query($db, $query);
                if (mysqli_num_rows($q_tampil_transaksi) > 0) {
                    while ($r_tampil_transaksi = mysqli_fetch_array($q_tampil_transaksi)) {
                ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $r_tampil_transaksi['id_transaksi']; ?></td>
                            <td><?php echo $r_tampil_transaksi['id_anggota']; ?></td>
                            <td><?php echo $r_tampil_transaksi['nama_anggota']; ?></td>
                            <td><?php echo $r_tampil_transaksi['id_buku']; ?></td>
                            <td><?php echo $r_tampil_transaksi['tgl_pinjam']; ?></td>
                            <td class="d-flex">
                                <div><a target="_blank" href="pages/cetak_note.php?id_transaksi=<?php echo $r_tampil_transaksi['id_transaksi']; ?>" class="btn btn-dark btn-sm">Cetak Note</a></div> |
                                <div><a href="#" class="btn btn-success btn-sm">Pengembalian</a></div>
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
                    echo "<a href=\"?p=transaksi-peminjaman&hal=$i\">$i</a>";
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