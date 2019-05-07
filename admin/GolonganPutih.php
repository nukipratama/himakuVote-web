
<!DOCTYPE html>
<html>
<?php
include "navbarsql.php";
    if (!$con) {
    # code...
    die("connection failed" . $con.mysql_error());
    }

    $counter = $con->query("SELECT counter FROM log_vote where counter = 0  AND nim LIKE '_____5%' ");
    $counter_15 = mysqli_num_rows($counter);
    
    $counter = $con->query("SELECT counter FROM log_vote where counter = 0  AND nim LIKE '_____6%' ");
    $counter_16 = mysqli_num_rows($counter);
    
    $counter = $con->query("SELECT counter FROM log_vote where counter = 0  AND nim LIKE '_____7%' ");
    $counter_17 = mysqli_num_rows($counter);
    
    $counter = $con->query("SELECT counter FROM log_vote where counter = 0  AND nim LIKE '_____8%' ");
    $counter_18 = mysqli_num_rows($counter);

    $counter = $con->query("SELECT counter FROM log_vote where counter = 0 ");
    $counter_ALL = mysqli_num_rows($counter);
    
    
    $con->close();
    ?>
    <html>
      <head>
      <script type="text/javascript" src="../assets/js/loader.js"></script>
        <script type="text/javascript">

        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['2018', 'Angkatan 2015' , 'Angkatan 2016', 'Angkatan 2017', 'Angkatan 2018'],
        ['Mahasiswa', <?php echo $counter_15;  ?> , <?php echo $counter_16;  ?>, <?php echo $counter_17;  ?>,<?php echo $counter_18;  ?>]
        ]);
        var options = {
        chart: {
        title: 'Data Mahasiswa yang tidak memberikan vote  :  <?php echo $counter_ALL ?>  Mahasiswa' ,
        subtitle: '',
        }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        </script>
        
      </head>
      <body style="background: none;">
        <center>
        <h1>Data Mahasiswa Tidak Memberikan Vote</h1>
        <div id="columnchart_material" style="width: 850px; height: 450px; position: center; margin-top: 1%; background: transparent;"></div>
        </center>
      </body>
    </html>
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