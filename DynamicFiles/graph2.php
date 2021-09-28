
<?php
            include('connect.php');
            
            $yesterday1 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-3,date("Y")));
            echo$yesterday1;
            $result1 = mysqli_query($conn,"SELECT SUM(Price) AS Price1 FROM addcart WHERE M_date='$yesterday1'"); 
            $row1 = mysqli_fetch_assoc($result1); 
            $sum1 = $row1['Price1'];
            echo"sum1";echo$sum1;

            $yesterday2 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-2,date("Y")));
            echo$yesterday2;
            $result2 = mysqli_query($conn,"SELECT SUM(Price) AS Price2 FROM addcart WHERE M_date='$yesterday2'"); 
            $row2 = mysqli_fetch_assoc($result2); 
            $sum2 = $row2['Price2'];
            echo"sum2";echo$sum2;

            $yesterday3 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
            echo$yesterday3;
            $result3 = mysqli_query($conn,"SELECT SUM(Price) AS Price3 FROM addcart WHERE M_date='$yesterday3'"); 
            $row3 = mysqli_fetch_assoc($result3); 
            $sum3 = $row3['Price3'];
            echo"sum3";echo$sum3;

            $yesterday4 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d"),date("Y")));
            echo$yesterday4;
            $result4 = mysqli_query($conn,"SELECT SUM(Price) AS Price4 FROM addcart WHERE M_date='$yesterday4'"); 
            $row4 = mysqli_fetch_assoc($result4); 
            $sum4 = $row4['Price4'];
            echo"sum4";echo$sum4;

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
         
          ['Today',<?php echo$sum4 ?>],
          
          ['yesterday',<?php echo$sum3?>],
          ['2 days ago',<?php echo$sum2?>],
          ['3 days ago',<?php echo$sum1 ?>],
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
