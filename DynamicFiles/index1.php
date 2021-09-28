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


  <link href="assets/img/favicon.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

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
      </nav><!-- .navbar -->


    </div>


  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">


<div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Hey, Welcome !</h1>
          <h2 data-aos="fade-up">Good food and great vibes.</h2>
          <br><br>
          <h1 data-aos="fade-up">Reserve Your Table</h1>
          <div ><br><br>
            <div class="text-center text-lg-start">
              <a onclick="myFunction()" href="NewReserve.php" class="btn btn btn_primary scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Reserve Table</span>
               
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" >
          <img data-aos="fade-up-right" src="2.svg " class="img-fluid" alt="">
        </div>
      </div>
      <div>
 
   
  </section><!-- End Hero -->

    <section id="hero" class="hero d-flex align-items-center">


<div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Hurry Up !</h1>
          <h2 data-aos="fade-up">Get Fresh ! Safe Food Home Delivary!!</h2>
          <br>
          <p data-aos="fade-up">Order food & beverages online from restaurants near & around you. We deliver food from your neighborhood local joints in your area. Exciting bit? We place no minimum order restrictions! Order in as little (or as much) as you'd like.</p>
          <div ><br><br>
            <div class="text-center text-lg-start">
              <a onclick="myFunction()" href="onlinemenu.php" class="btn btn btn_primary scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Order Now</span>
               
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" >
          <img style="margin-left: 60px;" data-aos="fade-up-right" src="https://image.freepik.com/free-vector/safe-food-delivery_23-2148547689.jpg" class="img-fluid" alt="">
        </div>
      </div>
      <div>
 
   
  </section><!-- End Hero -->



  <section id="hero" class="hero d-flex align-items-center">


<div class="container">
 <center> <h1 data-aos="fade-up -right"> Galary</h1></center><br><br>
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img  id="img1"  src="https://img4.nbstatic.in/tr:w-500/5e20402acff47e000c438886.jpg"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img id="img1" src="https://media-cdn.tripadvisor.com/media/photo-s/04/5a/a4/b4/cafe-blu.jpg"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img id="img1" src="https://cdn.eatigo.com/restaurant-cover-image/5004078_panel_f0f007f5-fb64-40f3-b488-054e0f3899cd.jpg"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>

</body>



<style type="text/css">
  .carousel{
    background: #fff;
width: 870px;
    height: 430px;
margin-left: 100px;
    margin-top: 20px;
     box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;

}
.carousel-item{
    text-align: center;
    /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel-indicators li, .carousel a{
    cursor: pointer;
}

  #img1,#myCarousel
  {
    width: 870px;
    height: 430px;

  }
</style>   
  </section>


   <center><br><br><h1 style=" font-size: 48px;
  font-weight: 700;
  color: #012970;" data-aos="fade-up-left">Our Team </h1></center>
       
 <section id="hero" class="hero d-flex align-items-center">


        
       <div class="center">


        <div data-aos="zoom-in" class="property-card">
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
      <div data-aos="zoom-in" class="property-card">
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
      <div data-aos="zoom-in" class="property-card">
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

   <center><br><br><h1 style=" font-size: 48px;
  font-weight: 700;
  color: #012970;" data-aos="fade-up-left">Our Services </h1></center>
       

  <section id="hero" class="hero d-flex align-items-center">


<div class="container">
      <div class="row">
        <h1 data-aos="zoom-in" style="font-size: 38px;">CATERING</h1>
        <p style="width: 600px; margin-top: 60px;font-size: 20px;font-weight: 500;">
          Do you have to organize lunches or dinners, business events or private parties?<br>

      The Risotteria Melotti will cook the dishes for you,<br> recreating a typically italian  atmosphere in your home or wherever you prefer. <br>

Do not hesitate to ask for more information.
        </p>
      <div>
        <div class="imgcatering" style="margin-left: 600px;margin-top: -250px; width: 500px;height: 350px; " >
          <img style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;" data-aos="fade-up-right" src="https://cookifi.com/blog/wp-content/uploads/2017/04/87095891.jpg" class="img-fluid" alt="">
        </div>
        
        <br><br>
        <div class="text-center text-lg-start">
              <a onclick="myFunction()" href="cat_request.php" class="btn btn btn_primary scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Send Request</span>
               
              </a>
            </div>

   
  </section>

  
     <div class="text-center text-lg-start">

        <a style="margin-top: 80px;" onclick="myFunction1()" class="btn btn btn_primary scrollto d-inline-flex align-items-center justify-content-center align-self-center" href="demo.php">
                <span>Give feedback</span>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
               
              </a>
            </div>
   
  </section>


<center>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-50f73698-bf53-4592-8308-c5d9c3302756"></div></center>
 

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

</body>

</html>

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