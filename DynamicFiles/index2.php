
<?php
session_start();
include('connect.php');

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.html");
    exit;
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
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.1.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style type="text/css">
  


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





.property-card
{
  height:20em;
  float: left;
  width:14em;
  position:relative;
  -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  border-radius:16px;
  overflow:hidden;
  -webkit-box-shadow:  15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
  box-shadow:  15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
}


.property-image
{
  height:150px;
  width:14em;
  padding:1em 2em;
  position:Absolute;
  top:0px;
  -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  background-image:url('https://hiring-assets.careerbuilder.com/media/attachments/careerbuilder-ar_post-2372.jpg?1465925468');
  background-size:cover;
  background-repeat:no-repeat;
}
.property2-image
{
  height:150px;
  width:14em;
  padding:1em 2em;
  position:Absolute;
  top:0px;
  -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  background-image:url('https://www.restaurant-hospitality.com/sites/restaurant-hospitality.com/files/styles/article_featured_retina/public/uploads/2015/10/stockworkers.jpg?itok=HVOqnj8Q');
  background-size:cover;
  background-repeat:no-repeat;
}

.property1-image
{
  height:150px;
  width:14em;
  padding:1em 2em;
  position:Absolute;
  top:0px;
  -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  background-image:url('https://i.insider.com/5d13ad8b9c51011d54215f53?width=1100&format=jpeg&auto=webp');
  background-size:cover;
  background-repeat:no-repeat;
}


/* Bottom Card Section */

.property-description
{
  background-color: #FAFAFC;
  height:12em;
  width:14em;
  position:absolute;
  bottom:0em;
  -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  padding: 0.5em 1em;
  text-align:center;
}



/* Property Cards Hover States */

.property-card:hover .property-description
{
  height:5em;
  padding:0px 0em;
}
.property-card:hover .property-image
{
  height:13em;
  background-size: cover;

}


.property-card:hover .property1-image
{
  height:13em;
  background-size: cover;

}
.property-card:hover .property2-image
{
  height:13em;
  background-size: cover;

}


.property-card:hover .property-social-icons:hover
{
  background-color:blue;
  cursor:pointer;
}
.center
{
  margin-left: 50px;
  height:100vh;
  float: left;
  width:100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

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
          <li><a class="nav-link scrollto" href="Reservation.php">Reservation</a></li>
          <li><a class="nav-link scrollto" href="about.html"> About Us</a></li>
          <li><a class="nav-link scrollto" href="Newmenu.php"> Menu</a></li>
          <li><a class="nav-link scrollto" href="menucard.php"> Online</a></li>
          
          <li><a href="Profile.php">Profile</a></li>
          <li><a class="getstarted scrollto" href="logout.php">Logout </a></li>
          <h6><?php

                echo $_SESSION['username'];
                echo $_SESSION['ID'];
               
              ?>
          </ul>
          </h6>
       
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

<script>
function myFunction() {
  document.getElementById("demo").innerHTML =  alert("Please Login First");  
}
</script>





  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">


<div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">

   
</h6>
          <h1 data-aos="fade-up">Hey, Welcome !</h1>
          <h2 data-aos="fade-up">Good food and great vibes.</h2>
          <div ><br><br>
            <div class="text-center text-lg-start">
              <a href="about.html" class="btn btn btn_primary scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" >
          <img data-aos="fade-down" src="2.svg " class="img-fluid" alt="">
        </div>
      </div>
      <div>
 
   
  </section><!-- End Hero -->
       
 <section id="hero" class="hero d-flex align-items-center">

        
       <div class="center">


        <div data-aos="fade-up" class="property-card">
        <a href="#">
          <div class="property-image">
            <div class="property-image-title">
              <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
            </div>
          </div></a>
        <div class="property-description">
          <h5>Manager 1 </h5>
          <p> Handels Adminstration Part .</p>
        </div>
        <a href="#">
          <div class="property-social-icons">
                </div>
        </a>
      </div>
      </div>

      <div class="center">
      <div data-aos="fade-up" class="property-card">
        <a href="#">
          <div class="property1-image">
            <div class="property-image-title">
              <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
            </div>
          </div></a>
        <div class="property-description">
          <h5> Sinor Chef </h5>
          <p>Handels kicthen</p>
        </div>
        <a href="#">
          <div class="property-social-icons">
                </div>
        </a>
      </div>
      </div>

      <div class="center">
      <div data-aos="fade-up" class="property-card">
        <a href="#">
          <div class="property2-image">
            <div class="property-image-title">
              <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
            </div>
          </div></a>
        <div class="property-description">
          <h5> Staff</h5>
          <p>.</p>
        </div>
        <a href="#">
          <div class="property-social-icons">
                </div>
        </a>
      </div>
      </div>
    </section><!-- End About Section -->



     <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

   

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
         
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Group15</span></strong>. All Rights Reserved
      </div>
      
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
<script type="text/javascript">
  var speed = 10;

/* Call this function with a string containing the ID name to
 * the element containing the number you want to do a count animation on.*/
function incEltNbr(id) {
  elt = document.getElementById(id);
  endNbr = Number(document.getElementById(id).innerHTML);
  incNbrRec(0, endNbr, elt);
}
  
/*A recursive function to increase the number.*/
function incNbrRec(i, endNbr, elt) {
  if (i <= endNbr) {
    elt.innerHTML = i;
    setTimeout(function() {//Delay a bit before calling the function again.
      incNbrRec(i + 1, endNbr, elt);
    }, speed);
  }
}

/*Function called on button click*/
function incNbr(){
  incEltNbr("nbr");
}

incEltNbr("nbr"); /*Call this funtion with the ID-name for that element to increase the number within*/

</script>

</body>

</html>



