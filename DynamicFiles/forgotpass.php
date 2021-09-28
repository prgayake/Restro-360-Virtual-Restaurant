<?php 
include 'connect.php';
session_start();
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
     <img src="" alt="" >
        <span>VR</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.html  ">Home</a></li>
          <li><a class="nav-link scrollto"  href="#">Reservation</a></li>
          <li><a class="nav-link scrollto" href="listmenu.php">Order</a></li>
          <li><a class="nav-link scrollto  active" href="cat_request.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="about.html"> About Us</a></li>
          <li><a class="nav-link scrollto" href="#"> Menu</a></li>
          

          <li class="dropdown"><a href="#"><span>Menu </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li><a href="#"> Starter</a>
                  <li><a href="#">Veg </a></li>
                  <li><a href="#">Non veg</a></li>
                 
              </li>
            
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


    <section id="hero" class="hero d-flex align-items-center">
   <div class="login_box">
  <img src="fp.svg" class="img_log">
  <form class="logform" method="post" action="forgotpass.php" >
    <h1>Forgot Password</h1>
     <div class="login-box">

      <label>Please Enter Register Email </label>
    <div class="user-box">
      <input type="email" name="email" required="">

      <label>Enter Email </label>




      

    <button class="submit" type="submit" name="LOGIN"> Confirm</button>



</div>

  </form>

</div>

<style type="text/css">
.img_log
{
  margin-top: 30px;
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
  margin-top: 40px;

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

</style>
  </section>


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>VR</span>
            </a>
            
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          

          

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
         

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="#">Pradyumna</a>
      </div>
    </div>
  </footer><!-- End Footer -->

 

</body>

</html>


<?php



    if(isset($_POST['LOGIN']))
    {
      $email=$_POST['email'];
      $code =rand(999999,111111);
   

      $result =mysqli_query($conn,"SELECT * from customer_details where email='$email'");
      while($row = mysqli_fetch_array($result)){
       $name=$row['Fullname'];
    }
      
     if($result)
     {
      $_SESSION['email'] = $email;
 
      $sql = mysqli_query($conn,"UPDATE customer_details
              SET code ='$code'
              WHERE Email ='$email'");
              
                require 'PHPMailerAutoload.php';
                $mail = new PHPMailer;

                //$mail->SMTPDebug = 4;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'prmaratha96k@gmail.com';                 // SMTP username
                $mail->Password = 'pradyumna@9';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to 

                $mail->setFrom('prmaratha96k@gmail.com', 'Pradyumna Gayake');
                $mail->addAddress($email);     // Add a recipient


                   // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'OTP Confirmation ';
                $mail->Body    = "Dear" .$name."  Your One time Password is :  ".$code."\n Thanks Regards : Virtuals Hotels :)";
                $mail->AltBody = 'Thanks Regards : Virtuals Hotels :)  ';

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }


     echo '<script type="text/javascript">
                      location.replace("passrecover.php");
                </script>';

      }


  }
     

?>