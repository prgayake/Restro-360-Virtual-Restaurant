<?php
    
  include('connect.php');
  session_start();

  if(isset($_POST['Reserve']))
  {
    $Fullname = $_POST['fullname'];
    $customer= intval($_POST['customer']);
    $time= $_POST['exampleRadios'];
    $un = $_SESSION['username'];
    $Date=$_SESSION['Mydate'];
    $id=$_SESSION['ID'];
    if($customer<=4)
    $table=1;
    elseif($customer>4 and $customer <=8)
    $table=2;  
    elseif($customer>8 and $customer <=12)
    $table=3;
    
    

    include('connect.php');
    $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='$time' "); 
    $row1 = mysqli_fetch_assoc($result1); 
    $sum = $row1['value_sum'];
    $remain = 10 - $sum;
  

   
 
    if($remain>0)
    {
            
          if($result1)
              {
                 echo$_SESSION['ID'];
                  while($rows = mysqli_fetch_assoc($result1))
                  {
                 
                 $id=$rows['ID'];  

                }
              }
              $_SESSION['ID']  = $id;   

             
              $sql ="INSERT INTO `h_reservation`(`LID`,`username`, `Fullname`, `TableNo`, `CustomerNo`, `Date`, `Slot`) VALUES ('$id','$un','$Fullname',' $table','$customer',' $Date ','$time')";

             $query= mysqli_query($conn,$sql);

             

             echo '<script type="text/javascript">
          location.replace("listmenu.php");
          </script>'; 
          
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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- Template Main CSS File -->
  <link href="assets/css/style 1.css" rel="stylesheet">


</head>

<body>

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
          <li><a class="nav-link scrollto" href="index1.php">Home</a></li>
          <li><a class="nav-link scrollto  active" href="NewReserve.php">Reservation</a></li>
          <li><a class="nav-link scrollto" href="onlinemenu.php">Order</a></li>
          <li><a class="nav-link scrollto" href="cat_request.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="about.html"> About Us</a></li>
          <li><a class="nav-link scrollto" href="listmenu.php">Menu</a></li>
          

       <li class="dropdown"><a href=""><span>

 <?php echo $_SESSION['username']; ?> </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li><a href="profile.php"> Profile</a>
                  <li><a href="profile.php">Your Order </a></li>
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
  <form class="logform" method="post" action="Reservation.php" >
    <h1>Reservation </h1>
    <br>
     <div class="login-box">

  
    <div class="user-box">
      <input type="text" name="fullname" required="">

      <label>Full Name</label>
    </div><br>
    <?php
     $Date=$_SESSION['Mydate'];
     echo '<h5 style="color:blue; font-size: 20px; font-weight: 800";> Selected date :'.$Date.'</h5>';
    ?>
    <br><br>



    <div class="user-box" >
    <label>Select the Slot</label> <br><br>
      <select name="exampleRadios">
        <option value="none">Select The Slot</option>
        
        <option  name="exampleRadios" id="exampleRadios2" value="1">
           <h5> 4:00pm - 5:15pm</h5>
  
    <?php
    include('connect.php');
   
      
      $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='1' "); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['value_sum'];
      $remain = 10 - $sum;
      if($remain<1)
      echo"  No Table Available";
      {
        ?>
        <p class="slot"><?php
            echo" Available table : ";echo$remain;
            }
        ?>
        </p>
        </option>

        <option name="exampleRadios" id="exampleRadios2" value="2">
          <label class="form-check-label" for="exampleRadios2">
  <h5> 5:15pm - 6:30pm</h5>
    <?php
    include('connect.php');
    $Date=$_SESSION['Mydate'];
      $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='2' "); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['value_sum'];
      $remain = 10 - $sum;
      if($remain<1)
      echo"No Table Available";
      {
        ?>
        <p class="slot"><?php
            echo" Available table : ";echo$remain;
            }
        ?>
        </p>
    
  </label>
        </option>
         <option name="exampleRadios" id="exampleRadios2" value="3">
           <label class="form-check-label" for="exampleRadios1">

  <h5>6:30pm - 7:45pm </h5>
    <?php
    include('connect.php');
    $Date=$_SESSION['Mydate'];
      $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='3' "); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['value_sum'];
      $remain = 10 - $sum;
      if($remain<1)
      echo"No Table Available";
      else
      {
        ?>
        <p class="slot"><?php
            echo" Available table : ";echo$remain;
            }
        ?>
        </p>
    
  </label>
         </option>
            <option name="exampleRadios" id="exampleRadios2" value="4">
               <label class="form-check-label" for="exampleRadios2">
  <h5> 7:45pm - 9:00pm</h5>
    <?php
    include('connect.php');
    $Date=$_SESSION['Mydate'];
      $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='4' "); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['value_sum'];
      $remain = 10 - $sum;
      if($remain<1)
      echo"No Table Available";
      {
        ?>
        <p class="slot"><?php
            echo" Available table : ";echo$remain;
            }
        ?>
        </p>
    
  </label>
            </option>
               <option  name="exampleRadios" id="exampleRadios2" value="5">
                  <label class="form-check-label" for="exampleRadios2">
  <h5> 9:00pm - 10:15pm</h5>
  <?php
    include('connect.php');
    $Date=$_SESSION['Mydate'];
      $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='5' "); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['value_sum'];
      $remain = 10 - $sum;
      if($remain<1)
      echo"No Table Available";
      else
      {
        ?>
        <p class="slot"><?php
            echo" Available table : ";echo$remain;
            }
        ?>
        </p>
    
  </label>

               </option>
                  <option name="exampleRadios" id="exampleRadios2" value="6">
                    <label class="form-check-label" for="exampleRadios2">
  <h5> 10:15pm - 11:30pm</h5>
    <?php
    include('connect.php');
    $Date=$_SESSION['Mydate'];
      $result1 = mysqli_query($conn,"SELECT SUM(TableNo) AS value_sum FROM h_reservation WHERE Date='$Date' And Slot='6' "); 
      $row1 = mysqli_fetch_assoc($result1); 
      $sum = $row1['value_sum'];
      $remain = 10 - $sum;
      if($remain<1)
      echo"No Table Available";
      {
        ?>
        <p class="slot"><?php
            echo" Available table : ";echo$remain;
            }
        ?>
        </p>
    
  </label>

      </select>
      </div>
      <br><br>

      <div class="user-box">
      <input type="number" name="customer" required="">

      <label>No of Customer</label>
      </div>


      




    <button class="btn btn btn_primary scrollto d-inline-flex align-items-center justify-content-center align-self-center" type="submit" name="Reserve">Reserve &nbsp <i class="fa fa-arrow-right" aria-hidden="true"></i>
</button>

   
 

</div>

  </form>

</div>


<style type="text/css">
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
.slot{
      margin-left:10px;
      color:red;
      font-size:1.2rem;
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
    margin-top: 445px;
    display: flex;
    border-color: #2c3135;
    flex-wrap: nowrap;
    justify-content: space-between;
    margin-left: 200px;
    background-color: ;
    height: 700px;
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

