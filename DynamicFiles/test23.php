
<?php
session_start();




?>
<?php
include_once 'connect.php';
$name=$_SESSION['username'];
$id=$_SESSION['ID'];
$result = mysqli_query($conn,"SELECT SUM(Price) as Price,LID,Address,Time from addcart1 where username='Anuj@99' ");
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
                    <div class="p-2 px-3 text-uppercase">No</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Address</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Time</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase"></div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase"></div>
                  </th>
                </tr>
              </thead>
              <?php
    $i=1;
    while($row = mysqli_fetch_array($result)) {
    ?>
              <tbody>
                <tr>
                    <td class="border-0 align-middle"><strong><?php echo $i; ?></strong></td>
                
                  <td class="border-0 align-middle"><strong><?php echo $row["Address"]; ?></strong></td>
                  <td class="border-0 align-middle"><strong><?php echo $row["Time"]; ?></strong></td>
                  <td class="border-0 align-middle"><strong><?php echo $row["Price"]; ?></strong></td>
                  <td>
                  <form action='addcart11.php' method='POST'>
          <button name='Menu' class='btn btm-sm btn-outline-primary'>MENU</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["LID"];?>'>
    </form>
    
            </td>
                  <td>
                  <form action='orderhandle.php' method='POST'>
          <button name='Remove_Item' class='btn btm-sm btn-outline-danger'>REMOVE</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["username"];?>'>
    </form>

            </td>
            
              </tbody>
              <?php
    $i=$i+1;
    }
    ?>
            </table>
          </div>
          <!-- End -->
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


