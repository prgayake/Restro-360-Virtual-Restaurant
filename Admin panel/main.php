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
  height: 500px;
  margin-left: 70px;
  margin-top: 150px;
  height: 400px;
  float: left;
 
    box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;


}


</style>

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

let title = chart.titles.create();
title.text = "Top 5 Trending Dishes";
title.fontSize = 25;
title.marginBottom = 30;


var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "Total";
series.dataFields.depthValue = "Total";
series.dataFields.category = "Dish";
series.slices.template.cornerRadius = 5;
series.colors.step = 3;

}); // end am4core.ready()
</script>

<!-- HTML -->
<rect id="chartdiv" ></rect>


<!-----------------------------------------------------------------------------!-->


<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Number of Reservations "
  },
  axisX:{
    valueFormatString: "DD MMM",
    crosshair: {
      enabled: true,
      snapToDataPoint: true
    }
  },
  axisY: {
    title: "Total Reservations",
    includeZero: true,
    crosshair: {
      enabled: true
    }
  },
  toolTip:{
    shared:true
  },  
  legend:{
    cursor:"pointer",
    verticalAlign: "bottom",
    horizontalAlign: "left",
    dockInsidePlotArea: true,
    itemclick: toogleDataSeries
  },
  data: [{
    type: "line",
    showInLegend: true,
    name: "Total Reservations",
    markerType: "square",
    xValueFormatString: "DD MMM, YYYY",
    color: "#F08080",
    dataPoints: [
      { x: new Date(2017, 0, 3), y: 650 },
      { x: new Date(2017, 0, 4), y: 700 },
      { x: new Date(2017, 0, 5), y: 710 },
      { x: new Date(2017, 0, 6), y: 658 },
      { x: new Date(2017, 0, 7), y: 734 },
      { x: new Date(2017, 0, 8), y: 963 },
      { x: new Date(2017, 0, 9), y: 847 },
      { x: new Date(2017, 0, 10), y: 853 },
      { x: new Date(2017, 0, 11), y: 869 },
      { x: new Date(2017, 0, 12), y: 943 },
      { x: new Date(2017, 0, 13), y: 970 },
      { x: new Date(2017, 0, 14), y: 869 },
      { x: new Date(2017, 0, 15), y: 890 },
      { x: new Date(2017, 0, 16), y: 930 }
    ]
  },
  {
    type: "line",
    showInLegend: true,
    name: "Total Online Orders",
    lineDashType: "solid",
    dataPoints: [
      { x: new Date(2017, 0, 3), y: 510 },
      { x: new Date(2017, 0, 4), y: 560 },
      { x: new Date(2017, 0, 5), y: 540 },
      { x: new Date(2017, 0, 6), y: 558 },
      { x: new Date(2017, 0, 7), y: 544 },
      { x: new Date(2017, 0, 8), y: 693 },
      { x: new Date(2017, 0, 9), y: 657 },
      { x: new Date(2017, 0, 10), y: 663 },
      { x: new Date(2017, 0, 11), y: 639 },
      { x: new Date(2017, 0, 12), y: 673 },
      { x: new Date(2017, 0, 13), y: 660 },
      { x: new Date(2017, 0, 14), y: 562 },
      { x: new Date(2017, 0, 15), y: 643 },
      { x: new Date(2017, 0, 16), y: 570 }
    ]
  }]
});
chart.render();

function toogleDataSeries(e){
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  } else{
    e.dataSeries.visible = true;
  }
  chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 800px"></div>
<script src="canvasjs.min.js"></script>


<style type="text/css">
  
#chartContainer{
  width: 600px;
  height: 300px;
  margin-left: 70px;
  margin-top: 150px;
 
  float: left;

    box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;}

</style>
<!--------------------------------------------------------------------------->

<!-- Styles -->
<style>
#chartdiv2 {
   width: 600px;
  height: 270px;
  float: right;
   margin-left: 30px;
   margin-top: 500px;
   margin-right: 300px;

  margin-top: 80px;
    box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;
}

</style>

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

let title = chart.titles.create();
title.text = "Mothly Turnover";
title.fontSize = 25;
title.marginBottom = 30;


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

<!-- HTML -->
<div id="chartdiv2"></div>



<!------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------- Graph 4 starts ---------------------------------!-->

<?php
           
            $servername = "localhost";
$username = "root";
$password = "";
$db= "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

            $yesterday1 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-3,date("Y")));
          
            $result1 = mysqli_query($conn,"SELECT SUM(Price) AS Price1 FROM addcart WHERE M_date='2021-04-28'"); 
            $row1 = mysqli_fetch_assoc($result1); 
            $sum1 = $row1['Price1'];
          
            

            $yesterday2 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-2,date("Y")));
         
            $result2 = mysqli_query($conn,"SELECT SUM(Price) AS Price2 FROM addcart WHERE M_date='2021-05-01'"); 
            $row2 = mysqli_fetch_assoc($result2); 
            $sum2 = $row2['Price2'];
         
         

            $yesterday3 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
        
            $result3 = mysqli_query($conn,"SELECT SUM(Price) AS Price3 FROM addcart WHERE M_date ='2021-05-01'"); 
            $row3 = mysqli_fetch_assoc($result3); 
            $sum3 = $row3['Price3'];
        

            $yesterday4 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d"),date("Y")));
     
            $result4 = mysqli_query($conn,"SELECT SUM(Price) AS Price4 FROM addcart WHERE M_date='2021-04-28'"); 
            $row4 = mysqli_fetch_assoc($result4); 
            $sum4 = $row4['Price4'];
      


?>




<!-- Styles -->
<style>
#chartdiv3 {
  width: 400px;
  height: 400px;
   margin-left:160px;
   
  margin-top: 80px;

    box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;
   float: left;
}

</style>

<!-- Resources -->
<script src="core.js"></script>
<script src="charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_kelly);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv3", am4charts.XYChart3D);
chart.paddingBottom = 30;
chart.angle = 35;

let title = chart.titles.create();
title.text = "5 Days Sell History";
title.fontSize = 25;
title.marginBottom = 30;

// Add data
chart.data = [{
  "country": <?php echo '"'.$yesterday1.'"';?>,
  "visits": <?php echo $sum1;?>
}, {
  "country": <?php echo '"'.$yesterday2.'"';?>,
  "visits": <?php echo $sum2;?>
}, {
  "country": <?php echo '"'.$yesterday3.'"';?>,
  "visits": <?php echo $sum3;?>
}, {
}, {
  "country": <?php echo '"'.$yesterday4.'"';?>,
  "visits": <?php echo $sum4;?>
}, {
}];

// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 20;
categoryAxis.renderer.inside = true;
categoryAxis.renderer.grid.template.disabled = true;

let labelTemplate = categoryAxis.renderer.labels.template;
labelTemplate.rotation = -90;
labelTemplate.horizontalCenter = "left";
labelTemplate.verticalCenter = "middle";
labelTemplate.dy = 10; // moves it a bit down;
labelTemplate.inside = false; // this is done to avoid settings which are not suitable when label is rotated

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.grid.template.disabled = true;

// Create series
var series = chart.series.push(new am4charts.ConeSeries());
series.dataFields.valueY = "visits";
series.dataFields.categoryX = "country";

var columnTemplate = series.columns.template;
columnTemplate.adapter.add("fill", function(fill, target) {
  return chart.colors.getIndex(target.dataItem.index);
})

columnTemplate.adapter.add("stroke", function(stroke, target) {
  return chart.colors.getIndex(target.dataItem.index);
})

}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv3"></div>



</body>





</html>


