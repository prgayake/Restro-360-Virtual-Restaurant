
<?php
session_start();



    
    include('connect.php');
    
    
    if(isset($_POST['Address']))
    {
      $add=$_POST['Add'];
      $name = $_SESSION['username'];
      $time = $_POST['time'];
      $id = $_SESSION['ID'];
      $Date = date('y/m/d');
      echo$time;
        
      
      $result ="UPDATE `addcart1` SET Address='$add' WHERE  LID='$id'";
      $query= mysqli_query($conn,$result);

      $result1 ="UPDATE `addcart1` SET Time='$time' WHERE LID='$id'";
       $query1= mysqli_query($conn,$result1);

      if($query)
      {
        ?>
        <div class="alert alert-success" role="alert">
         Address Updated Proceed to Confirmation
        </div>
        <?php
      
      }
      if($query1)
      {
        ?>
        <div class="alert alert-success" role="alert">
        inserted
        </div>
        <?php
      
      }
    }




?>
<?php
include_once 'connect.php';
$name=$_SESSION['username'];
$id=$_SESSION['ID'];
$result = mysqli_query($conn,"SELECT * FROM addcart1  WHERE  username = '$name' AND LID = '$id'");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
  /*

*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

body {
  background: #eecda3;
  background: -webkit-linear-gradient(to right, #eecda3, #ef629f);

  min-height: 100vh;
}

</style>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"  >

<link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php
    if (mysqli_num_rows($result) > 0) {
    ?>
<div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <?php

    while($row = mysqli_fetch_array($result)) {
    ?>
              <tbody>
                <tr>
                    <td class="border-0 align-middle"><strong><?php echo $row["Name"]; ?></strong></td>
                  <td class="border-0 align-middle"><strong><?php echo $row["Quantity"]; ?></strong></td>
                  <td class="border-0 align-middle"><strong><?php echo $row["Price"]; ?></strong></td>
                 
                  <td>
                  <form action='orderhandle.php' method='POST'>
          <button name='Remove_Item' class='btn btm-sm btn-outline-danger'>REMOVE</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
          <input type='hidden' name='lid' value='<?php echo $row["LID"];?>'>

    </form>
            </td>
              </tbody>
              <?php
    
    }
    ?>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-4 p-3 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Delivery Details</div>
          <div class="p-4">
          <form action="handleonline.php" method="POST">
                <p class="font-italic mb-4">Enter Time</p>
                  <div class="input-group mb-4 border rounded-pill p-2">
                    <input type="time" name="time" aria-describedby="button-addon3" class="form-control border-0">
                    <div class="input-group-append border-0">
                    </div>
                  </div>
                </div>
                
                  <p class="font-italic mb-4">Enter Your Address</p>
                  <textarea name="Add" cols="30" rows="2" class="form-control"></textarea>
                </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
               <button class="btn btn-dark"  type="submit" name="Address">Submit</button>
      
               </div>
       
          </form>
       
        <?php
    include_once 'connect.php';
    $result1 = mysqli_query($conn,"SELECT SUM(Price) AS value_sum FROM addcart1  WHERE  username = '$name'  AND LID = '$id'"); 
    $row1 = mysqli_fetch_assoc($result1); 
    $sum = $row1['value_sum'];


    ?>


        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            
             
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold"><?php echo"$sum"; ?></h5>
              </li>
            </ul>
            <a href="bill1.php" class="btn btn-dark">Procceed to Confirm</a>
            <form action='orderhandle.php' method='POST'>
            <br>
          <button name='Remove_All' class="btn btn-dark">Cancel Order</buttton>
          
          <input type='hidden' name='lid' value='<?php echo $id;?>'>

          </form>
            
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php
    }
    else{
        echo "No result found";
    }
  
    ?>

</body>
</html>


