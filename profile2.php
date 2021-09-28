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
.image{
    width: 280px;
    height: 250px;
    margin-left: 430px;
    margin-top: 90px;
    border-radius: 50%;
     border-style: solid;
    border-color: black;
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
    width: 1200px;
    background-repeat: no-repeat;
    background-size:cover;
    opacity: 0.8;
    border-radius: 9px;
   
  box-shadow: 0 7px 0 #BFBAAD, 0 0.5em 0 #A8A38C, 0 12px 12px #A8A38C;

 

  }

</style>
<style type="text/css">
    :root {
    --main-bg-color: #f0f0f0;
    --item-hover-bg: #8e44ad;
    --item-hover-color: #fff;

}

body {
    font-family: Verdana, sans-serif;
    font-size: 20px;
    font-weight: 800;
    display: flex;


}

.box {
    width: 600px;
    margin-top: 220px;
    margin-left: -50px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-direction: column;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25),
                            0 10px 10px rgba(0,0,0,0.22);
}

.box-header {
    padding: 10px 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: var(--box-header-bg);
    color: var(--box-header-color);
}

.list {
    position: relative;
    padding: unset;
    margin: 0;
    width: 100%;    
}

.item {
    list-style: none;
    padding: 15px 40px;
    box-shadow: 0 5px 25px rgba(0,0,0,.1);
    position: relative;
    background: var(--item-bg-color);
    cursor: pointer;
    transition: all 0.3s;
}

.item:hover {
    transform: scale(1.1);
    z-index: 100;
    background: var(--item-hover-bg);
    color: var(--item-hover-color);
}

.item i {
    color: var(--item-hover-bg);
}


</style>
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

</header>
<?php
         
      
         $sql = "SELECT Fullname ,username,Phone,email FROM customer_details where username = '$name'";
         $result = mysqli_query($conn,$sql);
        
?>
 <div class="login_box">

        <img src="https://img.pngio.com/png-svg-profile-png-512_512.png" class="image">

          <title>List item with hover effect</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <?php
  while($rows = mysqli_fetch_assoc($result))
{
  
?>

    <div class="box">
        <div class="box-header">
            <h2>
                Profile
            </h2>
        </div>
        <ul class="list">
            <li class="item">
                <i class="left-icon far fa-circle"></i>
                <div >
                    Full Name : <?php echo $rows['Fullname']; ?>
                </div>
                <i class="right-icon far fa-trash-alt"></i>
            </li>
            <li class="item">
                <i class="left-icon far fa-check-circle"></i>
                <div>
                    Email : <?php echo $rows['email']; ?>
                </div>
                <i class="right-icon far fa-trash-alt"></i>
            </li>
            <li class="item">
                <i class="left-icon far fa-circle"></i>
                <div>
                    Phone: <?php echo $rows['Phone']; ?>
                </div>
                <i class="right-icon far fa-trash-alt"></i>
            </li>
            <li class="item">
                <i class="left-icon far fa-check-circle"></i>
                <div>
                   Username : <?php echo $rows['username']; ?>
                </div>
               
        </ul>
    </div>
</div>
<?php
}
?>
</body>
 </html>

