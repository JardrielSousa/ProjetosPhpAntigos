<?php

  try{
    $conn = new PDO("mysql:dbname=teste;host=localhost","root","vertrigo");
    $stmt = $conn->prepare("SELECT * FROM material");
    $stmt->execute();
    $resp;
    if($dados = $stmt->fetch()){
      $resp = preg_split("// ",$dados[1],-1, PREG_SPLIT_NO_EMPTY);
    };
    $matrix = array();
    $valores = array(0,0,0,0,0);
   
    for($i=0;$i<count($resp);$i++){
      $valores[$resp[$i]]+=1;
    }
    print_r($valores);
    }catch(PDOException $e){
    throw new Exception($e);
  }

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>