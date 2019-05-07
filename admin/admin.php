<?php
    session_start();
 
    if(!isset($_SESSION['User']))
    {
        header("location:../index.php?No");
    }   
 
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/logo.png">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">

  </head>
  <body style=" background: white ;">

    <div class="navbar">
      <a href="admin.php">Home</a>
      
      <div class="dropdown">
        <button class="dropbtn">Hello, Admin
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <?php echo  '<a href="../logout.php?logout">Logout</a>' ?>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Hasil Voting
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="DosenTerbaik.php">Dosen Terbaik</a>
          <a href="DosenTerfavorit.php">Dosen Terfavorit</a>
          <a href="MhsTerbaikAkademik.php">Mahasiswa Terbaik Akademik</a>
          <a href="MhsTerbaikNonAkademik.php">Mahasiswa Terbaik Non Akademik</a>
          <a href="MhsTeraktif.php">Mahasiswa Teraktif</a>
          <a href="StaffTerbaik.php">Staff Terbaik</a>
          <a href="CsTerbaik.php">CS Terbaik</a>
          <a href="TenantTerbaik.php">Tenant Terbaik</a>
          <a href="MabaTeraktif.php">Mahasiswa Baru Teraktif</a>
          <a href="BestEntrepreneur.php">Best Young Entrepreneur</a>
          <a href="GolonganPutih.php">Golongan Putih</a>
        </div>
      </div>
    </div>



    <center>
    <h1 id="home">Accounting Award 3.0</h1>
    <h2>Himpunan Mahasiswa Akuntansi</h2>
    </center>

    <footer>Copyright &#169; ProjectQ
    <?php echo date("Y"); ?></footer>
    <style>
    
    </style>
    <ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </body>
</html>