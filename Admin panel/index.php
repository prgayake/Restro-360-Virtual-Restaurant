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
            <a class="dropdown-item" href="/adminlog.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
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

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Area Chart Example</div>
            <div class="card-body">
              

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
                 
                }

</style>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Reservation Details</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Fullname</th>
                      <th>No of Table</th>
                      <th>No of Guests</th>
                      <th>Date</th>
                      <th>Slot date</th>
                      <th>Action</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tfoot>
                     <tr>
                      <th>Fullname</th>
                      <th>No of Table</th>
                      <th>No of Guests</th>
                      <th>Date</th>
                      <th>Slot date</th>
                      <th>Action</th>
                      <th>Action</th>

                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
             
                        include('connect.php');

                        $sql = "SELECT `ID`,`LID`, `username`, `Fullname`, `TableNo`, `CustomerNo`, `Date` , `Slot` FROM `h_reservation` ";
                        $result = mysqli_query($conn,$sql);

                        while($rows = mysqli_fetch_assoc($result))
                        { 
  

                    ?>
                    
                    <tr>
                      <td><?php echo $rows['Fullname']; ?></td>
                      <td><?php echo $rows['TableNo']; ?></td>
                      <td><?php echo $rows['CustomerNo']; ?></td>
                      <td><?php echo $rows['Date']; ?></td>
                      <td><?php echo $rows['Slot']; ?></td>
                         <td> 
                          <form action='showmenu.php' method='POST'>
                            <button name='Remove_Item' id="a1" class='btn btn-success'>MENU</buttton>
                            <input type='hidden' name='Item' value='<?php echo $rows['ID'];?>'>
                        </form>
                      </td>

                 

                      
                      <form action='delete_res_index.php' method='POST'>
                           <td> <button onclick="deleteRow(this)" name='Remove_Item' id="a1" class='btn btn-danger'>REMOVE   </buttton>
                            <input type='hidden' name='Item' value='<?php echo $rows['ID'];?>'>
                        </form>
                          </td>
                    </tr>
                    <?php
                  }
                    ?>
                  
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>


   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css

">


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js" > </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
"></script>
