<!DOCTYPE html>
<html lang="en" >
    <?php
    session_start();

    if (isset($_SESSION['User'])) {
        
    } else {
        header("location:index.php?No");
    }
    ?> 
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Accounting Award 3.0</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/gaia.css" rel="stylesheet" />
        <link href="assets/css/loading.css" rel="stylesheet" />
        <link href="assets/css/fonts/cambo.css" rel="stylesheet" type="text/css">
        <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <div id="loader"></div>
</head>

<div style="display:none;" id="myDiv" class="animate-bottom">
    <body onload="myFunction()" style="margin:0;background:#2F302E;" >

        <?php
        include "assets/db/koneksi.php";
        $pilihTabel = '';
        $namaTabel = '';
        $kodeTabel = '';
        $counterAngka = 0;
        $query = mysqli_query($conn, "select * from log_vote where nim='" . $_SESSION['Nim'] . "'");
        $queryData = mysqli_query($conn, "select * from users where nim='" . $_SESSION['Nim'] . "'");
        $dataUser = mysqli_fetch_array($queryData);
        $dataNim = mysqli_fetch_array($query);
        $counterAngka = "$dataNim[counter]";

        switch ("$dataNim[counter]") {
            case '0':
                $pilihTabel = 'dosenterbaik';
                $namaTabel = 'Dosen Terbaik';
                $kodeTabel = 'dosen_terbaik_id';
                break;
            case '1':
                $pilihTabel = 'dosenterfavorit';
                $namaTabel = 'Dosen Terfavorit';
                $kodeTabel = 'dosen_terfavorit_id';
                break;
            case '2':
                $pilihTabel = 'mhsterbaikakd';
                $namaTabel = 'Mahasiswa Terbaik (Akademik)';
                $kodeTabel = 'mhs_terbaik_akademik_id';
                break;
            case '3':
                $pilihTabel = 'mhsterbaiknonakd';
                $namaTabel = 'Mahasiswa Terbaik (Non Akademik)';
                $kodeTabel = 'mhs_terbaik_non_akademik_id';
                break;
            case '4':
                $pilihTabel = 'mhsteraktif';
                $namaTabel = 'Mahasiswa Teraktif';
                $kodeTabel = 'mhs_teraktif_id';
                break;
            case '5':
                $pilihTabel = 'staffterbaik';
                $namaTabel = 'Staff Terbaik';
                $kodeTabel = 'staff_terbaik_id';
                break;
            case '6':
                $pilihTabel = 'csterbaik';
                $namaTabel = 'CS Terbaik';
                $kodeTabel = 'cs_terbaik_id';
                break;
            case '7':
                $pilihTabel = 'tenantterbaik';
                $namaTabel = 'Tenant Terbaik';
                $kodeTabel = 'tenant_id';
                break;
            case '8':
                $pilihTabel = 'mabateraktif';
                $namaTabel = 'Maba Teraktif';
                $kodeTabel = 'maba_teraktif_id';
                break;
            case '9':
                $pilihTabel = 'bestentrepreneur';
                $namaTabel = 'Best Young Entrepreneur';
                $kodeTabel = 'best_young_id';
                break;
            default:
                $namaTabel = 'Anda telah Vote<br>Terima Kasih';
                break;
        }
        $query1 = mysqli_query($conn, "select * from " . $pilihTabel);
        ?>

        <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" >
            <div class="container">
                <ul class="nav navbar-nav navbar-left navbar-uppercase">
                    <li>
                        <img style="margin-top:10px"src="assets/img/akutansi.png" width="40px" height="55px">&nbsp;&nbsp;&nbsp;
                    </li>
                    <li>
                        <img style="margin-top:10px"src="assets/img/logo.png" width="45px" height="60px">
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"><?php echo "$dataUser[nama]"; ?>
                                <img src="assets/img/down.png" width="15px" height="8px"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i><center><?php echo "$dataUser[nama]"; ?></center></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i><center><?php echo "$dataUser[nim]"; ?></center></a>
                            </li>
                            <li>
                                <a href="logout.php?logout"><i class="fa fa-instagram"></i><center><b>Log Out</b></center></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="section section-header">
            <div class="parallax filter">
                <div class="image" style="background:#272822" >
                </div>
                <div class="container">
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
                    <div class="content">
                        <div class="title-area">
                            <p>ACCOUNTING AWARD 3.0</p>
                            <h1 class="title-modern"><?php echo $namaTabel; ?></h1>
                            <?php
                            if ($namaTabel == 'Anda telah Vote<br>Terima Kasih') {
                                
                            } else {
                                ?>
                                <h3>Selamat Datang di Accounting Award 3.0</h2>
                                    <div class="separator line-separator"> <img src="assets/img/down.png" width="15px" height="8px"></div>
                                    <button  class="btnVote"><a href="#voting">Vote Now!</a></button>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-our-team-freebie" style="background:#2F302E">
            <div class="image" style="background:#2F302E" >
            </div>
            <div class="container">
                <div class="content">
                    <div id="voting">
                        <div class="team">
                            <div class="col-md-10 col-md-offset-1">
                                <h3 class="title-modern"style="color :white;">Nominasi <?php echo $namaTabel; ?></h3> 
                                <h5 class="title-modern"style="color :white;">pilih gambar untuk melihat detail Kandidat</h5>
                                <div class="separator line-separator"> <img src="assets/img/down.png" width="15px" height="8px"></div>
                                <?php
                                while ($kandidat1 = mysqli_fetch_array($query1)) {
                                    ?>
                                    <div  id="tombol" class="col-md-4">
                                        <div onclick="loadDynamicContentModal('<?php echo $pilihTabel; ?>',
                                                        '<?php echo "$kandidat1[foto]"; ?>', '<?php echo $kodeTabel; ?>')"
                                             style="height:260px" class="card card-member">
                                            <div class="content">

                                                <div class="avatar avatar-danger">
                                                    <img src="assets/img/foto/<?php echo "$kandidat1[foto]"; ?>.jpg" />
                                                </div>
                                                <div class="description">
                                                    <h4 class="title-modern"id="namaKandidat" class="title">
                                                        <?php
                                                        echo"$kandidat1[nama]";
                                                        ?>
                                                    </h4>         
                                                    <button class="btnVote" onclick="window.location.href = '<?php
                                                    echo 'assets/php/update.php?namaTabel=' . $kodeTabel . '&idKandidat=' . "$kandidat1[id]" .
                                                    '&nim=' . "$dataUser[nim]" . '&counter=' . $counterAngka . '&pilihTabel=' . $pilihTabel;
                                                    ?>'">Vote!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="bootstrap-modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Detail Kandidat</h4>
                        </div>
                        <div id="demo-modal"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                    data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



    </body>

    <!--   core js files    -->
    <script>
        function loadDynamicContentModal(tabel, modal, idTb) {
            var options = {
                modal: true,
                height: 400,
                width: 700
            };
            $('#demo-modal').load('assets/php/data.php?modal=' + modal + '&tabel=' + tabel + '&idTable=' + idTb,
                    function () {
                        $('#bootstrap-modal').modal({
                            show: true
                        });
                    });
        }



    </script>
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/loading.js" type="text/javascript"></script>
    <script src="assets/js/smoothScroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/gaia.js"></script>
    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>


</html>