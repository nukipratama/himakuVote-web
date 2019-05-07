<?php

require ("../db/DBController.php");
include ("../db/koneksi.php");
$dbController = new DBController();
$query = "SELECT * FROM " . $_GET["tabel"] . " WHERE foto = '" . $_GET["modal"] . "'";
$result = $dbController->runQuery($query);
if (!empty($result)) {
    ?>
    <h2 style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);margin-left: 20px;margin-right: 20px;font-family: 'Poppins';font-weight: 200;"><?php echo $result[0]["nama"] ?></h2>
    <img style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
         text-align: center;" width='auto' height="200px" src='assets/img/foto/<?php echo $result[0]["foto"] ?>.jpg' />
    <div style="margin-left: 20px;margin-right: 20px;text-align: center;"class='modal-text'><?php
        echo "<br>";
        echo $result[0]["deskripsi"];
        ?></div>
    <br>
    <?php
}
?>