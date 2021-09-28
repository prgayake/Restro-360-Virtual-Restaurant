<?php
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    include('connect.php');
    
    if(isset($_POST['Add_item']))
    {
      $Item=$_POST['Item'];
      $Price=intval($_POST['cost']);
      $Number=intval($_POST['Number']);
      $name = $_SESSION['username'];
      $id = $_SESSION['ID'];
      $Date = date('y/m/d');
      $Price=$Price * $Number;
        
       
            
            $sql ="INSERT INTO `addcart1`(`LID`,`username`, `Name`, `Price`, `Quantity`,`M_date`) VALUES ('$id','$name','$Item','$Price','$Number','$Date')";

            $query= mysqli_query($conn,$sql);
           
        
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Virtual Restaurant- Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- Template Main CSS File -->
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
   
        <span>VR</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="index1.php">Home</a></li>
          <li><a class="nav-link scrollto" href="NewReserve.php">Reservation</a></li>
          <li><a class="nav-link scrollto active" href="onlinemenu.php">Order</a></li>
          <li><a class="nav-link scrollto" href="cat_request.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="about.html"> About Us</a></li>
          <li><a class="nav-link scrollto" href="listmenu.php">Menu</a></li>
          

       <li class="dropdown"><a href=""><span>

       <?php echo $_SESSION['username']; ?> </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li><a href="profile2.php"> Profile</a>
              <li><a href="Profile.php">Reservations</a></li>
                  <li><a href="test23.php">Your Order </a></li>
                  <li><a   href="logout.php"> Logout</a></li>
                 
              </li>
            
            </ul>
          </li> 
          
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>


    </div>

</header>
  

<style type="text/css">

.img_log
{
  margin-top: 40px;
  width:400px;
  float: left;
  height: 420px; 
}

li ,a {
  margin-top: 10px;
  list-style-type: none;
  text-decoration: none
}


.logform{
  margin-left: 160px;
    margin-top: 90px;
    width: 400px;
  margin-right: 100px;

}
.login-box .user-box {
  margin-top: 10px;

  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #000;
  margin-bottom: 30px;
  border-color: transparent;
  border-bottom: 1px  solid #000;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #000;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
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
  position:relative;
  top:20px;
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



  .login_box

  {
    margin-top: 50px;
    display: flex;
    border-color: #2c3135;
    flex-wrap: nowrap;
    justify-content: space-between;
    margin-left: 200px;
    background-color: ;
    height: 500px;
    width: 900px;
     background-repeat: no-repeat;
    background-size:cover;
    opacity: 0.8;
    border-radius: 9px;
   
  box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;
  }
  .box11{
      margin-top:130px;

  }
  .add{
      width:140px;
      border-radius:6px;
  }
  #sub{
    position:relative;
    left:1200px;
  }

  #headi{
    font-size:2rem;
    font-weight:bolder;
    padding:10px;
    margin:15px;
    position:relative;
    left:550px;
    top:100px;
  }
  #h5{
    margin-bottom:20px;
  }
  </style>
  <div class="box11"></div>

  <p id="headi">MENU</p>
  <br>
  <form action="handleonline.php" method="POST">

<button class="btn btn_primary" id="sub" type="submit" name="LOGIN">Submit</button>

</form>  
<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM menulist where section='1'");
if (mysqli_num_rows($result) > 0) {

?>

  <table class="table table-striped table-hover">

  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
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
      <td><?php echo $row["Price"]; ?></td>
      <form action='onlinemenu.php' method='POST'>
      <td>
        <input type="number" name="Number" class="add" placeholder="Enter value">
    </td>
     <td>
          <button name='Add_item' class='btn btm-sm btn-primary'>ADD</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
          <input type='hidden' name='cost' value='<?php echo $row["Price"];?>'>    
    </td> 
    </form>
    </tr>
<?php
$i++;
}
}

?>
<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM menulist where section='2'");
if (mysqli_num_rows($result) > 0) {
?>


<br>
<h3 id="h5">VEG</h3>
  <table>

  -<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
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
      <td><?php echo $row["Price"]; ?></td>
      <form action='onlinemenu.php' method='POST'>
      <td>
        <input type="number" name="Number" class="add" placeholder="Enter value">
    </td>
     <td>
          <button name='Add_item' class='btn btm-sm btn-outline-danger'>ADD</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
          <input type='hidden' name='cost' value='<?php echo $row["Price"];?>'>    
    </td> 
    </form>
    </tr>
<?php
$i++;
}
}

?>
<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM menulist where section='3'");
if (mysqli_num_rows($result) > 0) {
?>
<br>

<br>
<h3 id="h5">NON-VEG</h3>
  <table>

  -<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
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
      <td><?php echo $row["Price"]; ?></td>
      <form action='onlinemenu.php' method='POST'>
      <td>
        <input type="number" name="Number" class="add" placeholder="Enter value">
    </td>
     <td>
          <button name='Add_item' class='btn btm-sm btn-outline-danger'>ADD</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
          <input type='hidden' name='cost' value='<?php echo $row["Price"];?>'>    
    </td> 
    </form>
    </tr>
<?php
$i++;
}
}

?>
<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM menulist where section='4'");
if (mysqli_num_rows($result) > 0) {
?>
<br>

<br>
<h3 id="h5">RICE</h3>
  <table>

  -<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
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
      <td><?php echo $row["Price"]; ?></td>
      <form action='onlinemenu.php' method='POST'>
      <td>
        <input type="number" name="Number" class="add" placeholder="Enter value">
    </td>
     <td>
          <button name='Add_item' class='btn btm-sm btn-outline-danger'>ADD</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
          <input type='hidden' name='cost' value='<?php echo $row["Price"];?>'>    
    </td> 
    </form>
    </tr>
<?php
$i++;
}
}

?>
<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM menulist where section='5'");
if (mysqli_num_rows($result) > 0) {
?>
<br>

<br>
<h3 id="h5">TANDOOR</h3>
  <table>

  -<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
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
      <td><?php echo $row["Price"]; ?></td>
      <form action='onlinemenu.php' method='POST'>
      <td>
        <input type="number" name="Number" class="add" placeholder="Enter value">
    </td>
     <td>
          <button name='Add_item' class='btn btm-sm btn-outline-danger'>ADD</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
          <input type='hidden' name='cost' value='<?php echo $row["Price"];?>'>    
    </td> 
    </form>
    </tr>
<?php
$i++;
}
}

?>
<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM menulist where section='6'");
if (mysqli_num_rows($result) > 0) {
?>
<br>

<br>
<h3 id="h5">STARTER</h3>
  <table>

  -<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
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
      <td><?php echo $row["Price"]; ?></td>
      <form action='onlinemenu.php' method='POST'>
      <td>
        <input type="number" name="Number" class="add" placeholder="Enter value">
    </td>
     <td>
          <button name='Add_item' class='btn btm-sm btn-outline-danger'>ADD</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
          <input type='hidden' name='cost' value='<?php echo $row["Price"];?>'>    
    </td> 
    </form>
    </tr>
<?php
$i++;
}
}
?>
<h3 id="h5">DESERT</h3>




 
</body>

</html>
