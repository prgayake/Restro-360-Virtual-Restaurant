<?php
    session_start();
  include('connect.php');

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
  <link href="assets/css/style_req.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <style>#header{
        background-color: #ffffff;
      } </style>
      <a href="index.html" class="logo d-flex align-items-center">
     <img src="logo.png" alt="" >
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
          

          
            
            </ul>
          </li> 
          
           
        </ul>
    

<script>
function myFunction() {
  document.getElementById("demo").innerHTML =  alert("Please Login First");  
}
</script>


      </nav><!-- .navbar -->


    </div>





  </header><!-- End Header -->


        <style type="text/css">
        .img_log
        {
          margin-top: 40px;
          width:400px;
          float: left;
          height: 800px; 
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
            margin-top: 100px;
            display: flex;
            border-color: #2c3135;
            flex-wrap: nowrap;
            justify-content: space-between;
            margin-left: 200px;
            background-color: ;
            height: 800px;
            width: 900px;
             background-repeat: no-repeat;
            background-size:cover;
            opacity: 0.8;
            border-radius: 9px;
           
          box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;

         

          }

</style>

  <section>
    <div class="login_box">
  
  <form class="logform" method="post" >
    <h1>Request </h1>
     <div class="login-box">

  <form action="cat_request.php" method="post">

  <div class="user-box">
      <input type="text" name="name"  required="">

      <label>Name</label>
    </div>

    <div class="user-box">
      <input type="email" name="email" required="">

      <label>Email</label>


      <div class="user-box">
      <input type="phone" name="phone"  required="">

      <label>Contact No.</label>
    </div>

     

      <div class="user-box">
      <input type="text" name="subject"  required="">

      <label>subject</label>
    </div>


          <div class="user-box">
      
      <textarea type="text" name="request" placeholder="Write Your Request" required="" style="width: 500px;height: 150px; margin-bottom: 20px; border-color: black;"></textarea>

   
    </div>







    <button class="btn btn_primary" type="submit" name="SEND"> SEND</button>

   
  </form>

</div>

  </form>
  </section>





  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
       
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
             
              <span>VR</span>
            </a>
            <p>This Project Ddesigned By Group 15 .</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Reservation</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Parcel Order</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Customer servieces</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Quality Food</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
           
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
     
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Group 15</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  

</body>

</html>




<?php

    if(isset($_POST['SEND']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone = $_POST['phone'];
      $subject =$_POST['subject'];
      $request = $_POST['request'];

      $sql ="INSERT INTO catering_req (Name ,email,mobile,Subject,Request) VALUES ('$name','$email','$phone','$subject','$request');";

               $query= mysqli_query($conn,$sql);

               if($query)
              {
                echo '<script type="text/javascript">alert("Data Saved")</script>';  
              }
              else
              {

              }
   
      }  
   ?>
