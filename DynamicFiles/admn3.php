<?php
include_once 'connect.php';


$result = mysqli_query($conn,"SELECT * FROM addcart1 ");
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
.address{
  width:400px;
  margin-left:20px;

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
<style>
.cont{
  margin-top:40px;
  margin-bottom:30px;
}
#h5{
  margin-top:80px;
  margin-bottom:30px;
}
#time{
  magin:5px;
  font-size:1.2rem;
  font-weight:bold;

}
.time1{
 
  border:2px solid black;
  margin:5px;
  border-radius:4px;

}

</style>
</head>
<body>
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
        <li><a class="nav-link scrollto " href="main.php">Records</a></li>
          <li><a class="nav-link scrollto "href="admin1.php">Reservations</a></li>
          <li><a class="nav-link scrollto active" href="admn3.php">Online_Order</a></li>
          <li><a class="nav-link scrollto" href="alistmenu.php">Menu_section</a></li>
          <li><a class="nav-link scrollto" href="addmenu.php">Addmenu</a></li>
  
          

            </ul>
          </li> 
          
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>


  </header><!-- End Header -->
  

<?php
if (mysqli_num_rows($result) > 0) {
?>
<br>
<div class="cont">
<h5 id="h5">Online Order</h5>

  <table>

  -<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
    
      <th scope="col">Address</th>
      <th scope="col">Time</th>
      <th scope="col">Menu</th>
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
      <td><?php echo $row["username"]; ?></td>
      <td><?php echo $row["Address"]; ?></td>
      <td><?php echo $row["Time"]; ?></td>
   
      <td>
      <form action='admin4.php' method='POST'>
          <button name='Remove_Item' class='btn btm-sm btn-outline-danger'>MENU</buttton>
          <input type='hidden' name='Item' value='<?php echo$row["LID"];?>'>
      </form>
      </td>
      
      </td>
    </tr>
<?php
$i++;
}
?>


</body>
</table>
</div>

<?php
}
else
{
    
}
?>
</body>
</html>
