
<!DOCTYPE html>
<html>
<?php
include "navbarsql.php";
     if (!$con) {
      # code...
      die("connection failed" . $con.mysql_error());
     }

     $query_1 = $con->query("SELECT score FROM dosenterfavorit where id = 1 ");
     $action_1 = $query_1->fetch_assoc();
     $score_1 = "".$action_1["score"]."";

     $query_2 = $con->query("SELECT score FROM dosenterfavorit where id = 2 ");
     $action_2 = $query_2->fetch_assoc();
     $score_2 = "".$action_2["score"]."";

     $query_3 = $con->query("SELECT score FROM dosenterfavorit where id = 3 ");
     $action_3 = $query_3->fetch_assoc();
     $score_3 = "".$action_3["score"]."";

     $query_4 = $con->query("SELECT score FROM dosenterfavorit where id = 4 ");
     $action_4 = $query_4->fetch_assoc();
     $score_4 = "".$action_4["score"]."";
    

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
          ['2018', 'Vaya Juliana Dillak, S.E., M.M' , 'Kurnia, S.AB., M.M.', 'Dewa Putra Krishna Mahardika, S.E., M.Si.', 'Khairunnisa, S.E., M.M.'],
          ['Dosen Terfavorit', <?php echo $score_1; ?> , <?php echo $score_2; ?>, <?php echo $score_3; ?>, <?php echo $score_4; ?> ]
        ]);

        var options = {
          chart: {
            title: 'Hasil Vote Nominasi Dosen Terfavorit',
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
      <h1>Dosen Terfavorit</h1>
    <div id="columnchart_material" style="width: 850px; height: 450px; position: center; margin-top: 1px; background: transparent;"></div>
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