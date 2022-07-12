<?php
include "config.php";
?>

<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
   

      var data = google.visualization.arrayToDataTable([
                    ['Data', 'Frequencia Cardiaca', 'Oxigenacao do Sangue', 'Temperatura'],
                     <?php
                    $c=$_SESSION['codi'];

                     $chartQuery = "SELECT * FROM DadosBiometricos where NumPaci = '$c'";
                     $chartQueryRecords = mysqli_query($con, $chartQuery);
                        while($row = mysqli_fetch_assoc($chartQueryRecords)){
                            echo "['".$row['DataDB']."',".$row['FreqCard'].",".$row['OxigSang'].",".$row['Tempera']."],";
                        }
                     ?>
                ]);

      var options = {
        chart: {
          
        },
        width: 1230,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="line_top_x"></div>
</body>
</html>