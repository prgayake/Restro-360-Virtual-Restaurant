<?php
    
  include('connect.php');
  session_start();

  if(!isset($_SESSION['username'])){
    header("location: login.php");
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
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- Template Main CSS File -->
  <link href="assets/css/style 1.css" rel="stylesheet">
  <style>
    .slot{
      margin-left:10px;
      color:red;
      font-size:1.2rem;
    }
 
 
#pnote{
    position:relative;
    top:-10px;
    font-size:0.8rem;
    color:red;
}
.submit:hover{
    background-color:black;
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
    height: 600px;
    width: 1000px;
    background-repeat: no-repeat;
    background-size:cover;
    opacity: 0.8;
    border-radius: 9px;
   
  box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;

 

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
     <img src="logo.png" alt="" >
        <span>VR</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="index1.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="NewReserve.php">Reservation</a></li>
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


  <section id="hero" class="hero d-flex align-items-center">

        <div class="login_box">
                    <img src="desk.svg" class="img_log">
          <form class="logform" method="post" action="NewReserve.php" >
                      <h1>Reservation </h1>
                      <br><br>
              <div class="login-box">

                    
                      <h5 style="color: black ;font-weight: 700">Select Date For Reservation</h5>
                      <br>
                      </div>
                        <div class="user-box">
                        <input type="Date" name="date" required="" style="width: 300px; height: 40px; border-color: black; border-radius: 8px;">
                        <i class="fa fa-calendar" aria-hidden="true" ></i>

                        </div>
                        <br><br>

                      
                       

                      <button class="btn btn btn_primary scrollto d-inline-flex align-items-center justify-content-center align-self-center" type="submit" name="Reserve">Proceed &nbsp<i class="fa fa-arrow-right" aria-hidden="true"></i>
</button>


            </div>

          </form>

        </div>

    </section>



    <?php



if(isset($_POST['Reserve']))
{
  $today= date("Y-m-d", mktime(0, 0, 0, date("m") , date("d"),date("Y")));
                        
$date= $_POST['date'];
if($date>=$today)
{
$_SESSION['Mydate']=$date;

echo"done";
echo '<script type="text/javascript">
location.replace("Reservation.php");
 </script>';
}
else{
        echo '<script>alert("The Date is Passed  !!Not Allow for Reservation"); 
  </script>';
    

}
}
else
{ 

}
?>
</body>
    </html>
