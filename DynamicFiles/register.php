<?php
    
  include('connect.php');

 

if(isset($_POST['Register']))
{
$Fullname = $_POST['Fullname'];
$username= $_POST['username'];
$Phone= $_POST['Phone'];
$Email= $_POST['Email'];
$Password= $_POST['Password'];
$cpassword =$_POST['cpassword'];


      if($_POST['Password'] == $_POST['cpassword'])      
        {
          
          $sql =" INSERT INTO `customer_details`(`Fullname`, `Phone`, `username`, `password`, `email`) VALUES ('$Fullname','$Phone','$username','$Password','$Email')";

          $result= mysqli_query($conn,$sql);
        }
        else
        {
          echo '<script type="text/javascript">alert("Incorrect Password !")</script>';  
        }
        

        echo '<script type="text/javascript">
        location.replace("login.php");
         </script>';  

  
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
  <link href="assets/css/style 1.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
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
        <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto " href="Reservation.php">Reservation</a></li>
          <li><a class="nav-link scrollto" href="about.html"> About Us</a></li>
          <li><a class="nav-link scrollto" href="Newmenu.php"> Menu</a></li>
          

          
            
            </ul>
          </li> 
          
          
        </ul>
       
      </nav><!-- .navbar -->


    </div>

  </header><!-- End Header -->


    <section id="hero" class="hero d-flex align-items-center">

      <div class="login_box">
  <img src="desk.svg" class="img_log">
  <form class="logform" method="post" action="register.php" >
    <h1>Sign Up </h1>
     <div class="login-box">

  
    <div class="user-box">
      <input type="text" name="Fullname" required="">

      <label>Full Name</label>

      <div class="user-box">
      <input type="Username" name="username" required="">

      <label>username</label>


      <div class="user-box">
      <input type="phone" name="Phone" required="">

      <label>Phone No</label>

<div class="user-box">
      <input type="email" name="Email" required="">

      <label>Email</label>



<div class="user-box">
      <input type="password" name="Password" required="">

      <label>Password</label>



      <div class="user-box">
      <input type="password" name="cpassword"  required="">

      <label>Confirm Password</label>
    </div>

    <button class="btnn" type="submit" name="Register">Submit</button>
      <br>
      <br>


   
 

</div>

  </form>

</div>

<style type="text/css">
.btnn{
  width:110px;
  border:2px solid blue;
  border-radius:5px;
  padding:3px;
  font-weight:bold;
  font-size:1rem;

}
.btnn:hover{
  background-color:blue;
  border:2px solid black;
  color:white;
  
}
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
  color:black;
  position: relative;
}

.login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color:black;
    margin-bottom: 30px;
    border-color: transparent;
    border-bottom: 1px solid #000;
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
  color: black;
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



  .login_box

  {
    margin-top: 50px;
    display: flex;
    border-color: #2c3135;
    flex-wrap: nowrap;
    justify-content: space-between;
    margin-left: 200px;
    background-color: ;
    height: 800px;
    width: 1000px;
    background-repeat: no-repeat;
    background-size:cover;
    opacity: 0.8;
    border-radius: 9px;
   
  box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;

 

  }

</style>
  </section>

</body>

</html>

