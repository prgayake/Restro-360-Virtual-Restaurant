<?php
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    include('connect.php');
    $Item=$_POST['Item_name'];
    $Price=$_POST['Price'];
    $Number=$_POST['Number'];
    $name = $_SESSION['username'];
    $id = $_SESSION['ID'];
    $Date = date('y/m/d');
    
  
    if(isset($_POST['Add_to_Cart']))
    {
        
        if(isset($_SESSION['username']))
        {
            
            $sql ="INSERT INTO `addcart`(`LID`,`username`, `Name`, `Price`, `Quantity`,`M_date`) VALUES ('$id','$name','$Item','$Price','$Number','$Date')";

            $query= mysqli_query($conn,$sql);
           
        }
        
    }

}

?>

<?php



include('connect.php');
$result = mysqli_query($conn,"SELECT * FROM addcart  WHERE  username = '$name' AND LID = '$id'");
?>

 <?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM addcart  WHERE  username = '$name' AND LID = '$id'");
?> 
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <!-- Favicons -->
 <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">
 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
.cont{
  margin-top:40px;
  margin-bottom:30px;
}
#h5{
  margin-top:80px;
  margin-bottom:30px;
}
.but{
  width:150px;
  height:40px;
  margin-left:20px;
  border:2px solid white;
  border-radius:5px;
  background-color:black;
  color:white;
  padding:8px;
  margin-top:50px;
  margin-bottom:40px;
  text-decoration:none;
  font-size:1.0rem;
  
}

</style>
 </head>
<body>


<?php
if (mysqli_num_rows($result) > 0) {
?>
<br>

<div class="cont">
<h5 id="h5">CART</h5>
  <table>

  -<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
    
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tbody>
    <tr>
      <th scope="row"><?php echo $i+1; ?></th>
      <td><?php echo $row["Name"]; ?></td>
      <td><?php echo $row["Quantity"]; ?></td>
      <td><?php echo $row["Price"]; ?></td>
      <td>
        <form action='carthandle.php' method='POST'>
          <button name='Remove_Item' class='btn btm-sm btn-outline-danger'>REMOVE</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
</form>
    </tr>
<?php
$i++;
}
?>
<?php
include_once 'connect.php';
$result1 = mysqli_query($conn,"SELECT SUM(Price) AS value_sum FROM addcart  WHERE  username = '$name'  AND LID = '$id'"); 
$row1 = mysqli_fetch_assoc($result1); 
$sum = $row1['value_sum'];


?>
<tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td><?php echo"Total :";echo"$sum"; ?></td>
    </tr>
</body>
</table>
</div>

<?php
}
else{
    echo "No result found";
}
?>

<a class="but" href="Newmenu.php">Back To Menu</a>
<a class="but" id="confirm" href="bill.php">Confirm Order</a>



 </body>
</html>
 