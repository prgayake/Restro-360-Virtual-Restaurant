<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VR Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Virtual Resturant</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
      
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="">Settings</a>
            <a class="dropdown-item" href="">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="reservations.php">
            <i class="fas fa-fw fa-utensils "></i>
            <span>Reservations</span></a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="order.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Order Requests</span></a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="charts.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-table"></i>

            <span>Menu</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Menu Edit</h6>
            <a class="dropdown-item" href="addmenu.php">Add New Items</a>
            <a class="dropdown-item" href="deletemenu.php">Delete Items</a>
            <a class="dropdown-item" href="editmenu.php">Edit Items</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php">
            <i class="fas fa-fw fa-comments"></i>
            <span>feedbacks</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-utensils"></i>
                  </div>
                  <div class="mr-5">New Reservations</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="reservations.php">
                  <span class="float-left">View Reservations</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">Catering Requests !</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="catering.php">
                  <span class="float-left">View Requests</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5"> Orders Requests!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="order.php">
                  <span class="float-left">View Orders</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">FeedBacks !</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="feedback.php">
                  <span class="float-left">View Feedbacks</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

<!-- chart 2-->
          <div class="row">
            <div class="col-lg-8">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-utensils"></i>
                  Top Five trending Dishes</div>
                <div class="card-body">
                 <?php
                      $json_data =include('database.php');
                  ?>
                  <style>
#chartdiv {
  width: 100%;
 
  margin-top: 50px;
  height: 400px;
  float: left;
 
 

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
am4core.useTheme(am4themes_kelly);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

chart.data = <?=$json_data?>;

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "Total";
pieSeries.dataFields.category = "Dish";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

}); // end am4core.ready()
// end am4core.ready()
</script>

<!-- HTML -->
<rect id="chartdiv" ></rect>


                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Past Five days Profit</div>
                <div class="card-body">
                <?php
           
            $servername = "localhost";
$username = "root";
$password = "";
$db= "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

            $yesterday1 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-3,date("Y")));
          
            $result1 = mysqli_query($conn,"SELECT SUM(Price) AS Price1 FROM addcart WHERE M_date='2021-05-27'"); 
            $row1 = mysqli_fetch_assoc($result1); 
            $sum1 = $row1['Price1'];
          
            

            $yesterday2 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-2,date("Y")));
         
            $result2 = mysqli_query($conn,"SELECT SUM(Price) AS Price2 FROM addcart WHERE M_date='2021-05-26'"); 
            $row2 = mysqli_fetch_assoc($result2); 
            $sum2 = $row2['Price2'];
         
         

            $yesterday3 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
        
            $result3 = mysqli_query($conn,"SELECT SUM(Price) AS Price3 FROM addcart WHERE M_date ='2021-05-25'"); 
            $row3 = mysqli_fetch_assoc($result3); 
            $sum3 = $row3['Price3'];
        

            $yesterday4 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d"),date("Y")));
     
            $result4 = mysqli_query($conn,"SELECT SUM(Price) AS Price4 FROM addcart WHERE M_date='2021-05-22'"); 
            $row4 = mysqli_fetch_assoc($result4); 
            $sum4 = $row4['Price4'];
        
            $yesterday5 = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d"),date("Y")));
     
            $result5 = mysqli_query($conn,"SELECT SUM(Price) AS Price5 FROM addcart WHERE M_date='2021-05-27'"); 
            $row5 = mysqli_fetch_assoc($result5); 
            $sum5 = $row5['Price5'];


?>

<!-- Styles -->
<style>
#chartdiv3 {
  width: 400px;
  height: 400px;

   
  margin-top: 50px;

    
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
                    }, 
                      {
                      "country": <?php echo '"'.$yesterday5.'"';?>,
                      "visits": <?php echo $sum5;?>
                    },{ 

                    }];

                    // Create axes
                    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                    categoryAxis.dataFields.category = "country";
                    categoryAxis.renderer.grid.template.location = 0;
                    categoryAxis.renderer.minGridDistance = 30;
                    categoryAxis.renderer.inside = true;
                    categoryAxis.renderer.grid.template.disabled = false;

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

                 </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
          </div>

            <div class="row">
            <div class="col-lg-8">
              <div class="card mb-3">
                
                        <div class="card mb-3">
                    <div class="card-header">
                      <i class="fas fa-chart-area"></i> 
                     Monthly TurnOver </div>
                    <div class="card-body">
                      <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                   
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>

          <p class="small text-center text-muted my-5">
                     </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>virtual Restaurant</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

  </body>

</html>
