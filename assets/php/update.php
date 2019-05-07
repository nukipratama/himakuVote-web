<?php

include ('../../assets/db/koneksi.php');
$tambah = $_GET["counter"];
$tambah++;
$queryInsert = mysqli_query($conn, "update log_vote set " . $_GET["namaTabel"] . "='" . $_GET["idKandidat"] . "',counter=" . $tambah . " where nim =" . $_GET["nim"]);

$queryUpdate = mysqli_query($conn, "update ".$_GET["pilihTabel"]." set score = (select count(*) from log_vote where ".$_GET["namaTabel"]."=".$_GET["idKandidat"].") where id=".$_GET["idKandidat"]);
        
header("location:../../main.php");
?>
