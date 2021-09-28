

  <html>
  <head>
    <style>
  .graph{
        width:700;
        height:400;
        margin:20px;
        border:2px solid black;
  }
  </style>

    <!--------------------------------------------------------------------------------------->
    
    <!--------------------------------------------------------------------------------------->
    </head>

 
  <body>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    <?php
    include('connect.php');
      $Date = date('y/m/d');
      echo"date";
      $time=1;
      $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='1' "); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['value_sum'];
      echo"123";
      ?>
      12345
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Slot", "Density", { role: "style" } ],
        ["6:30 - 7:45",<?php echo$sum?>, 'stroke-color:black; stroke-width: 4; fill-color: #76A7FA'],
        <?php
    include('connect.php');
      $Date = date('y/m/d');
      $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='2' "); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['value_sum'];
      ?>
        ["7:45-9:00",<?php echo$sum?>, 'stroke-color:black; stroke-width: 4; fill-color: #76A7FA'],
        <?php
    include('connect.php');
      $Date = date('y/m/d');
      $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='3' "); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['value_sum'];
      ?>
        ["9:00-10:15", <?php echo$sum?>, 'stroke-color:black; stroke-width: 4; fill-color: #76A7FA'],
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Todays Reservation",
        vAxis: {title: 'No of Tables'},
        hAxis: {title: 'Slot'},
        width: 500,
        height: 300,
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

    <div id="curve_chart" style="width: 800px; height: 400px">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      <?php
      include_once 'connect.php';
      $yesterday = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-4,date("Y")));
      $result1 = mysqli_query($conn,"SELECT SUM(Price) AS Price FROM addcart WHERE M_date='$yesterday'"); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['Price'];
      ?>
      
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['DATE', 'Amount'],
          ['4Days Ago' ,<?php echo$sum ?>],
          
         <?php
      include_once 'connect.php';
      $yesterday = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-3,date("Y")));
      $result1 = mysqli_query($conn,"SELECT SUM(Price) AS Price FROM addcart WHERE M_date='$yesterday'"); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['Price'];
      ?>
         ['3Days Ago' ,<?php echo$sum ?>],

         <?php
      include_once 'connect.php';
      $yesterday = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-2,date("Y")));
      $result1 = mysqli_query($conn,"SELECT SUM(Price) AS Price FROM addcart WHERE M_date='$yesterday'"); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['Price'];
      ?>
         ['2Days Ago' ,<?php echo$sum ?>],
         <?php
      include_once 'connect.php';
      $yesterday = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
      $result1 = mysqli_query($conn,"SELECT SUM(Price) AS Price FROM addcart WHERE M_date='$yesterday'"); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['Price'];
      ?>
         ['Yesterday' ,<?php echo$sum ?>],

         
         <?php
      include_once 'connect.php';
      $Date = date('y/m/d');
      $Date1 = date('d');
      $result1 = mysqli_query($conn,"SELECT SUM(Price) AS Price FROM addcart WHERE M_date='$Date'"); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['Price'];
      ?>
      ['Today',<?php echo$sum ?>],
         
        ]);

        var options = {
          title: 'Hotel Income',
          curveType: 'function',
          vAxis: {title: 'Total Amount'},
          hAxis: {title: 'Day'},
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  
  

 </div>
  </body>
  </html>