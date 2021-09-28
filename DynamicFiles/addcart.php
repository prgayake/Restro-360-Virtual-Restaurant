
<?php

if(isset($_POST['LOGIN']))
{
  
session_start();
$name=$_SESSION['username'];
$Item=$_POST['Item'];

include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM addcart  WHERE  username = '$name' AND RID = '$Item'");
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
.btn {
    display: inline-block;
    vertical-align: baseline;
    padding: 16px 28px;
    border-color: transparent;
    border-radius: 8px;
    font-family: "Nunito", sans-serif;
    font-weight: 650;
    text-decoration: none;
    cursor: pointer;
    text-align: center;
    text-transform: uppercase;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in
}

.btn_primary {
    border: none;
    background-image: -webkit-linear-gradient(248.16deg, #4DD4FF -32.14%, #A041FF 113.57%);
    background-image: linear-gradient(201.84deg, #4DD4FF -32.14%, #A041FF 113.57%);
    color: #ffffff
}

.btn_primary:hover {
    color: #ffffff;
    opacity: 0.8;
    -webkit-box-shadow: 0 0 20px 7px rgba(151, 156, 255, 0.44);
    box-shadow: 0 0 20px 7px rgba(151, 156, 255, 0.44)
}

.btn--full {
    min-width: 250px;
    padding: 15px 42px;
    font-size: 20px;
    color: #ffffff;
    line-height: 1.4;
    text-transform: none;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in
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
                  <form action='carthandle.php' method='POST'>
              <button name='Remove_Item' class='btn btm-sm btn-outline-danger'>REMOVE</buttton>
              <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
              <input type='hidden' name='rid' value='<?php echo $row["RID"];?>'>
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

      
        <?php
    include_once 'connect.php';
    $result1 = mysqli_query($conn,"SELECT SUM(Price) AS value_sum FROM addcart  WHERE  username = '$name'  AND RID = '$Item'"); 
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
            <form action='bill.php' method='POST'>
            <input type='hidden' name='Item' value='<?php echo$Item;?>'>
            <button class="btn btn-dark rounded-pill py-2 btn-block" name ="Add_item11" type="submit">Proceed</button>

             
            </form>
         <br><br>
            <form action='reservehandle.php' method='POST'>
          <button name='Remove_Item'class="btn btn-dark rounded-pill py-2 btn-block">CANCEL RESERVATION</buttton>
          <input type='hidden' name='Item' value='<?php echo $Item;?>'>
          </form>
            </td>
           
           
            
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php
    }
    else{
      ?>
      <p>No Data Found</p>
      <br>
      <br>
      <form action="listmenu22.php" method="POST">
      <input type="hidden" name="rid" value='<?php echo$Item; ?>'>
  <button class="btn btn_primary" id="sub" name ="Add_item11" type="submit">Add menu</button>
 
  </form>
    <?php
    }
}
    ?>

</body>
</html>


