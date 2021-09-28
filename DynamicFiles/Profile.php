<?php
            session_start();
            include('connect.php');

          $name = $_SESSION['username'];
 ?>
          <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Document</title>
              <!-- Favicons -->
            <link href="assets1/img/favicon.png" rel="icon">
            <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

       <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

            <style>
            .conta{
              height:240px;
              width:600px;
              border:5px solid black;
            }
            .prfile{
              margin:10px;
              text-decoration:none;
              list-style-type: none;
              
              width:400px;
              height:35px;
              padding:5px;
              font-weight:bold;
              font-size:1.2rem;
            
            }
            .prfile1{
              margin:10px;
              text-decoration:none;
              list-style-type: none;
              font-size:1.2rem;
              width:100px;
              height:35px;
              padding:5px;
              font-weight:bold;
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
          <li><a class="nav-link scrollto active" href="index1.php">Home</a></li>
          <li><a class="nav-link scrollto" href="NewReserve.php">Reservation</a></li>
          <li><a class="nav-link scrollto" href="onlinemenu.php">Order</a></li>
          <li><a class="nav-link scrollto" href="cat_request.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="about.html"> About Us</a></li>
          <li><a class="nav-link scrollto" href="listmenu.php">Menu</a></li>
          

       <li class="dropdown"><a href=""><span>

 
        <i class="bi bi-list mobile-nav-toggle"></i> <?php echo $_SESSION['username']; ?> </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li><a href="profile2.php"> Profile</a>
              <li><a href="profile.php">Reservations</a></li>
                  <li><a href="test23.php">Your Order </a></li>
                  <li><a   href="logout.php"> Logout</a></li>
                 
              </li>
            
            </ul>
          </li> 
          
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>

  </header><!-- End Header -->
              <br>
         

<br>
<section id="hero" class="hero d-flex  flex-column align-items-center">

 
<?php
           
            include('connect.php');

          $name = $_SESSION['username'];

         
      
            $sql = "SELECT `ID`, `username`, `Fullname`, `TableNo`, `CustomerNo`, `Date` , `Slot` FROM `h_reservation` WHERE  username = '$name'";
            $result = mysqli_query($conn,$sql)
?>
<br>
<br><br><br><br>
<h2 >My Reservation</h2>
  <table>

  -<table class="table">
  <thead class="table table-dark table-striped">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Name</th>
      <th scope="col">No of Table</th>
      <th scope="col">No of Customer</th>
      <th scope="col">Date</th>
      <th scope="col">Slot</th>
      <th scope="col"></th>
      <th scope="col"></th>
      


    </tr>
  </thead>
<?php
while($rows = mysqli_fetch_assoc($result))
{ 
  
?> 

<tbody class="table">
    <tr>
      <td><?php echo $rows['ID']; ?></td>
      <td><?php echo $rows['username']; ?></td>
      <td><?php echo $rows['Fullname']; ?></td>
      <td><?php echo $rows['TableNo']; ?></td>
      <td><?php echo $rows['CustomerNo']; ?></td>
      <td><?php echo $rows['Date']; ?></td>
      <td><?php echo $rows['Slot']; ?></td>
      <td>
      <form action='addcart.php' method='POST'>
      <button  class='btn btm-sm btn-outline-danger' type="submit" name="LOGIN">MENU</button>
          <input type='hidden' name='Item' value='<?php echo $rows['ID'];?>'>
      </form>
      </td>
      <td>
      <form action='reservehandle.php' method='POST'>
          <button name='Remove_Item' class='btn btm-sm btn-outline-danger'>REMOVE</buttton>
          <input type='hidden' name='Item' value='<?php echo $rows['ID'];?>'>
      </form>
      </td>
    </tr> 
    </tbody>
           
<?php
}
?>
</table>

</section>
</body>
</html>

