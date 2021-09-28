<?php
$json_data =include('database.php');
$json_data1 =include('database1.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Virtual Restaurant- Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <style>#header{
        background-color: #ffffff;
      } </style>
      <a href="index.html" class="logo d-flex align-items-center">
     <img src="" alt="" >
        <span>VR</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="main.php">Records</a></li>
          <li><a class="nav-link scrollto "href="admin1.php">Reservations</a></li>
          <li><a class="nav-link scrollto" href="admn3.php">Online_Order</a></li>
          <li><a class="nav-link scrollto" href="alistmenu.php">Menu_section</a></li>
          <li><a class="nav-link scrollto" href="addmenu.php">Addmenu</a></li>
  
      </nav><!-- .navbar -->


    </div>

  </header><!-- End Header -->

<!-- Styles -->
<?php
$json_data =include('database.php');
$json_data1 =include('database1.php');



?>

<style>
#chartdiv {
  width: 600px;
  margin-left: 70px;
  margin-top: 80px;
  height: 400px;
  float: left;
   background-color: #8A9085;
    box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;
}
.gt{


}





</style>
<div class="gt">
<h2>57834</h2>
<!-- Resources -->
<script src="core.js"></script>
<script src="charts.js"></script>
<script src="animated.js"></script>

<!-- Chart code -->
<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.PieChart3D);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.data = <?=$json_data?>;

chart.innerRadius = am4core.percent(40);
chart.depth = 120;

chart.legend = new am4charts.Legend();

var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "Total";
series.dataFields.depthValue = "Total";
series.dataFields.category = "Dish";
series.slices.template.cornerRadius = 5;
series.colors.step = 3;

}); // end am4core.ready()
</script>

<!-- HTML -->
<rect id="chartdiv" width="578" height="400"></rect>

</div>

<!-- Styles -->




<!-- Styles -->
<style>
#chartdiv2 {
  width: 600px;
  height: 270px;
  position:relative;
  top:100px;
  float: right;
  margin-left: 30px;
  margin-right: 20px;
 
  background-color: #8A9085;
  box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;
  order:2;
}
#h22
{
  position:relative;
  bottom:250px;
  left:850px;
  width:200px;
  order:1;
}
#g5{
  position : relative;
  top:600px;
  left:50px;
}

</style>
<div class="gt2">

<!-- Resources -->
<script src="core.js"></script>
<script src="charts.js"></script>
<script src="animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv2", am4charts.XYChart);

// Add data
chart.data = [{
  "date": new Date(2020, 10,1 ),
  "value": 90
}, {
  "date": new Date(2020, 11, 1),
  "value": 102
}, {
  "date": new Date(2020, 12, 1),
  "value": 65
}, {
  "date": new Date(2021,1, 1),
  "value": 62
}, {
  "date": new Date(2021, 2, 1),
  "value": 55
}, 

{
  "date": new Date(2021, 3, 1),
  "value": 65
},{
  "date": new Date(2021, 4, 1),
  "value": 81,
  "disabled": false
}];

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());

// Create value axis
var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var lineSeries = chart.series.push(new am4charts.LineSeries());
lineSeries.dataFields.valueY = "value";
lineSeries.dataFields.dateX = "date";
lineSeries.name = "Sales";
lineSeries.strokeWidth = 3;
lineSeries.strokeDasharray = "5,4";

// Add simple bullet
var bullet = lineSeries.bullets.push(new am4charts.CircleBullet());
bullet.disabled = true;
bullet.propertyFields.disabled = "disabled";

var secondCircle = bullet.createChild(am4core.Circle);
secondCircle.radius = 6;
secondCircle.fill = chart.colors.getIndex(8);


bullet.events.on("inited", function(event){
  animateBullet(event.target.circle);
})


function animateBullet(bullet) {
    var animation = bullet.animate([{ property: "scale", from: 1, to: 5 }, { property: "opacity", from: 1, to: 0 }], 1000, am4core.ease.circleOut);
    animation.events.on("animationended", function(event){
      animateBullet(event.target.object);
    })
}


}); // end am4core.ready()
</script>
</div>

<!-- HTML -->
<div id="chartdiv2"></div>

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

<SECTION id = "g5">
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
          width: 600,
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
    <div id="top_x_div" style="width: 300px; height: 300px;"></div>
    </SECTION>


<?php
           
$servername = "localhost";
$username = "root";
$password = "";
$db= "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

            $yesterday1 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-3,date("Y")));
          
            $result1 = mysqli_query($conn,"SELECT SUM(Price) AS Price1 FROM addcart WHERE M_date=' $yesterday1'"); 
            $row1 = mysqli_fetch_assoc($result1); 
            $sum1 = $row1['Price1'];
          
            

            $yesterday2 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-2,date("Y")));
         
            $result2 = mysqli_query($conn,"SELECT SUM(Price) AS Price2 FROM addcart WHERE M_date=' $yesterday2'"); 
            $row2 = mysqli_fetch_assoc($result2); 
            $sum2 = $row2['Price2'];
         
         

            $yesterday3 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
        
            $result3 = mysqli_query($conn,"SELECT SUM(Price) AS Price3 FROM addcart WHERE M_date =' $yesterday3'"); 
            $row3 = mysqli_fetch_assoc($result3); 
            $sum3 = $row3['Price3'];
        

            $yesterday4 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d"),date("Y")));
     
            $result4 = mysqli_query($conn,"SELECT SUM(Price) AS Price4 FROM addcart WHERE M_date=' $yesterday4'"); 
            $row4 = mysqli_fetch_assoc($result4); 
            $sum4 = $row4['Price4'];
      


?>




<!-- Styles -->
<style>
#chartdiv3 {
  position:relative;
  right:200px;
  width: 400px;
  top:100px;
  height: 400px;
  margin-left:20px;
  margin-bottom:150px; 
  margin-top: 80px;
  background-color: #8A9085;
    box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;
   float: right;
}

</style>

<!-- Resources -->
<script src="core.js"></script>
<script src="charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="animated.js"></script>




</style>



</body>

</html>


