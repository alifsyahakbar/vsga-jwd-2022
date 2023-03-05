<?php

$db = mysqli_connect('localhost', 'root', '', 'dbpmb');

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
