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
        <li><a class="nav-link scrollto " href="main.php">Records</a></li>
          <li><a class="nav-link scrollto "href="admin1.php">Reservations</a></li>
          <li><a class="nav-link scrollto" href="admn3.php">Online_Order</a></li>
          <li><a class="nav-link scrollto  active" href="alistmenu.php">Menu_section</a></li>
          <li><a class="nav-link scrollto" href="addmenu.php">Addmenu</a></li>
  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


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

  }
  </style>
  <div class="box11"></div>

  <?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM menulist");
if (mysqli_num_rows($result) > 0) {
?>
<br>

<div class="cont">
<h5 id="h5">Menu List</h5>
  <table>

  -<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
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
      <td>
        <form action='menuhandle.php' method='POST'>
          <button name='Remove_Item1' class='btn btm-sm btn-outline-danger'>REMOVE</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
        </form>
    </td>
    <td>
        <form action='menuhandle1.php' method='POST'>
          <button name='update_Item1' class='btn btm-sm btn-outline-danger'>UPDATE</buttton>
          <input type='hidden' name='mid' value='<?php echo $row["M_ID"];?>'>
        </form>
    </td>
    </tr>
<?php
$i++;
}
}
?>



 
 
</body>

</html>
