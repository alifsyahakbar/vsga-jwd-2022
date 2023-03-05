<?php
include "../koneksi.php";
$id_anggota = $_GET['id_anggota'];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM tb_anggota WHERE id_anggota='$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);
if (empty($r_tampil_anggota['foto']) or ($r_tampil_anggota['foto'] == '-'))
    $foto = "admin-no-photo.jpg";
else
    $foto = $r_tampil_anggota['foto'];
?>
<div id="label-page">
    <h3>Kartu Anggota</h3>
</div>
<div id="content">
    <table id="tabel-input" class="table table-striped">
        <tr>
            <td class=" label-formulir">FOTO</td>
            <td class="isian-formulir">:
                <img src="../images/<?php echo $foto; ?>" width=70px height=75px>
            </td>
        </tr>
        <tr>
            <td class="label-formulir">ID Anggota</td>
            <td class="isian-formulir">: <?php echo $r_tampil_anggota['id_anggota']; ?></td>
        </tr>
        <tr>
            <td class="label-formulir">Nama</td>
            <td class="isian-formulir">: <?php echo $r_tampil_anggota['nama']; ?></td>
        </tr>
        <tr>
            <td class="label-formulir">Jenis Kelamin</td>
            <td class="isian-formulir">: <?php echo $r_tampil_anggota['jenis_kelamin']; ?></td>
        </tr>
        <tr>
            <td class="label-formulir">Alamat</td>
            <td class="isian-formulir">: <?php echo $r_tampil_anggota['alamat']; ?></td>
        </tr>
    </table>
</div>
<script>
    window.print();
</script>