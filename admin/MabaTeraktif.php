
<!DOCTYPE html>
<html>
<?php
include "navbarsql.php";
     if (!$con) {
      # code...
      die("connection failed" . $con.mysql_error());
     }

     $query_1 = $con->query("SELECT score FROM mabateraktif where id = 1 ");
     $action_1 = $query_1->fetch_assoc();
     $score_1 = "".$action_1["score"]."";

     $query_2 = $con->query("SELECT score FROM mabateraktif where id = 2 ");
     $action_2 = $query_2->fetch_assoc();
     $score_2 = "".$action_2["score"]."";

     $query_3 = $con->query("SELECT score FROM mabateraktif where id = 3 ");
     $action_3 = $query_3->fetch_assoc();
     $score_3 = "".$action_3["score"]."";

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
          ['2018', 'Anisa Juli Chairani' , 'Syadza Adilah Malsuf', 'Gilang Ramadhan'],
          ['Mahasiswa Baru Teraktif', <?php echo $score_1; ?> , <?php echo $score_2; ?>, <?php echo $score_3; ?>]
        ]);

        var options = {
          chart: {
            title: 'Hasil Vote Nominasi Mahasiswa Baru Teraktif',
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
      <h1>Mahasisa Baru Teraktif</h1>
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