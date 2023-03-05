<?php

$email = $_POST['email'];
$pass = $_POST['password'];

if ($email != "admin@example.com" or $pass != "admin") {
    header("location:login.php?cek=salah");
} else {
    echo "<script>
    alert('Anda Berhasil Login');
    document.location.href='login.php';
    </script>";
}
