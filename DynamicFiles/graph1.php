<?php
          include('connect.php');
          $Date = date('y/m/d');
          $result1=mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum1 FROM h_reservation WHERE Date='$Date' And Slot='1' "); 
          $row1 = mysqli_fetch_assoc($result1); 
          $sum1 = $row1['value_sum1'];

        
          $result2=mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum2 FROM h_reservation WHERE Date='$Date' And Slot='2' "); 
          $row2 = mysqli_fetch_assoc($result2); 
          $sum2 = $row2['value_sum2'];
        
     
          $result3=mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum3 FROM h_reservation WHERE Date='$Date' And Slot='3' "); 
          $row3 = mysqli_fetch_assoc($result3); 
          $sum3 = $row3['value_sum3'];
         

        
          $result4=mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum4 FROM h_reservation WHERE Date='$Date' And Slot='4' "); 
          $row4 = mysqli_fetch_assoc($result4); 
          $sum4 = $row4['value_sum4'];
        

          
          $result5=mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum5 FROM h_reservation WHERE Date='$Date' And Slot='5' "); 
          $row5 = mysqli_fetch_assoc($result5); 
          $sum5 = $row5['value_sum5'];
         

?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Time', 'Reserved Table'],  
          ["4:00 - 5:15", <?php echo$sum1 ?>],
          ["5:15 - 6:30",<?php echo$sum2 ?>],
          ["6:30 - 7:45",<?php echo$sum3 ?>],
          ["7:45 - 9:00",<?php echo$sum4 ?>],
          ["9:00 - 10:15",<?php echo$sum5 ?>],
        ]);

        var options = {
          width: 600;
          legend: { position: 'none' },
         
          axes: {
            x: {
              0: { side: 'top', label: 'Todays Reservation'} // Top x-axis.
            }
          },
          bar: { groupWidth: "50%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 600px; height: 600px;"></div>
  </body>
</html>
