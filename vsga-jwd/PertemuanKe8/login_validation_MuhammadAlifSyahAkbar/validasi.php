<?php

$email = $_POST['email'];
$pass = $_POST['password'];

if ($email == "" || $pass == "") {
    header("location:login.php?cek=kosong");
} else if ($email != "admin@example.com" || $pass != 'admin') {
    header("location:login.php?cek=salah");
} else {
    echo "<script>
    alert('Anda Berhasil Login');
    document.location.href='dashboard.php';
    </script>";
}
