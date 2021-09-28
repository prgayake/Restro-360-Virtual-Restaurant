<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql="SELECT COUNT(Quantity),Name FROM addcart GROUP BY Name ORDER BY COUNT(Quantity) DESC LIMIT 0,5";
$result  = mysqli_query($conn,$sql);
if ($result) 
{	$finalarr=array();
	 while($row = mysqli_fetch_array($result))
	 {
	 		



?>

<script type="text/javascript">
	// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: [<?php
				echo '"'.$row['Name'].'",';
						
			?>],
    datasets: [{
      data: [<?php

		echo ''.$row['COUNT(Quantity)'].',';
			}
			}

    	  ?>],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
});



</script>-->