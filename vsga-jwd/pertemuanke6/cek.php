<?php
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['Jenis_kelamin'];
if ($nama == "") {
    header("location:kominfo.php?nama=kosong");
} else {
    echo "Nama Saya adalah " . $nama . "<br>";
    echo "Umur adalah " . $umur . "<br>";
    echo "Tanggal Lahir adalah " . $tanggal_lahir . "<br>";
    echo "Jenis Kelamin adalah " . $jenis_kelamin . "<br>";
    echo "Alamat adalah " . $alamat . "<br>";
}
