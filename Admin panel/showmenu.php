<?php


session_start();
include_once 'connect.php';

if(isset($_POST['Remove_Item']))
{
$item = $_POST['Remove_Item'];
$itemname = $_POST['Item'];


}

include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM addcart  WHERE RID = '$itemname'");

?> 


 <div class="card mb-3">
 	   		
                    
            <div class="card-header">
              <i class="fas fa-table"></i>
              Customer's Menu </div>
        
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                	
					      <th scope="col">Item Name</th>
					      <th scope="col">Quantity</th>
					      <th scope="col">Price</th>
					 
                    </tr>
                  </thead>
                  <tfoot>
                     <tr>
	                            
						      <th scope="col">Item Name</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Price</th>
						   

                    </tr>
                  </tfoot>
                  <tbody>
                 	<?php
             
                   
                        while($rows = mysqli_fetch_assoc($result))
                        { 
                        

                    ?>
                    
                    <tr>
                      <td><?php echo $rows['Name']; ?></td>
                      <td><?php echo $rows['Quantity']; ?></td>
                      <td><?php echo $rows['Price']; ?></td>
                    


                   
                 

              
                    </tr>
                        <?php
                        }
                        ?>
     
                       
                      
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">  <form action='reservations.php' >
                          <center>  <button name='Remove_Item' id="a1" class='btn btn-success'>Done</buttton></center>
                            
                        </form></div>
          </div>

        </div>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
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