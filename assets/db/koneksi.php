<?php
$conn = mysqli_connect('localhost','root','','himaku');
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>