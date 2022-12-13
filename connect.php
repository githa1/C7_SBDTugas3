<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tugas3_sbd';

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { #cek koneksi
    die(' Database Tidak Bisa Terhubung');
} 
?>

