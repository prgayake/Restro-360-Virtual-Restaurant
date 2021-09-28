<?php

include_once "connect.php";
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

  <style>

      .flexb{
          
          display:flex;
          height:100%;
          width:100%;
          align-items:center;
          justify-content:space-around;
         
         
      }
      .moveup{
          position:relative;
          bottom:230px;
      }
      .flexi{
        display:flex;
        border : 4px solid;
        border-color:#673ab7f5;
        height:300px;
        width:210px;
        border-radius:7px;
        margin:10px;
      }
      #flexb1{
        display:flex;
        flex:column;
        
      }
      .imgflex{
        width: 196px;;
        height: 110px;
        position: relative;
        left:3px;
        margin-top: 4px;
        border:2px solid #673ab7f5;
        border-radius:7px;
       
      }
    
      h1{
         
          position:relative;
          top:50px;
      }
      .foot{
            padding:120px;
      }
      .insidecard{
            position: relative;
            top: 17px;
            padding-left: 25px;
            margin: 11px;
    }
    h5{
      
      font-weight:bold;
      margin:5px;
    }
    p{
      font-weight:bold;
      margin:5px;
      font-size:1rem;
    }
    .btn{
      border:2px solid #673ab7f5;
      padding:2px;
      margin:5px;
      width:75%;
      background-color:#a492c3ad;
      font-weight:bold;
      margin-top:7px;
      

    }
    .head2{
      position:relative;
      right:500px;
      top:40px;
      font-size:1.5rem;
      font-weight:bold;
      
    }
    .btn:hover{
      background-color:#673ab7f5;
      border:2px solid black;
      color: white;
      
    }
    #head22{
      margin-bottom:40px;
    }
    #head123{
      margin-bottom:40px;
    }
    #head1234{
      margin-bottom:40px;
    }
    #head1235{
      margin-bottom:40px;
    }
    .no{
      width:80px;
      border:2px solid #673ab7f5;
      border-radius:5px;
      
    }
    .b{
      position:relative;
      left:2px;
      margin-bottom:7px;
    }
    
    label{
        position:relative;
        left:3px;
        font-weight:bold;
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
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="NewReserve.php">Reservation</a></li>
          <li><a class="nav-link scrollto" href="menucard.php">Order</a></li>
          <li><a class="nav-link scrollto" href="cat_request.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="about.html"> About Us</a></li>
          <li><a class="nav-link scrollto" href="Newmenu.php">Menu</a></li>
          

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


    </div>

        </header><!-- End Header -->

    <section id="hero" class="hero d-flex  flex-column align-items-center">
        
            <div class="login_box mt-4">
             <h1>Menu Card</h1>
             <p class="head2" id="head22">Starters</p>
            </div>
        <section id="hero" class="hero d-flex  flex-column align-items-center">
        
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Aloo Nazakat.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Aloo Nazakat<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit  name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Aloo Nazakat">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Broccoli Lolipop.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Broccoli Lolipop<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Broccoli Lolipop">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Chili Garlic Pops.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Chili Garlic Pops<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Chili Garlic Pops">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/S_Baby-Corn Crispy.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Baby-Corn Crispy<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Baby-Corn Crispy">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                </div>
                <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Veg Kebab.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Veg Kebab<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit  name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Veg Kebab">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/S_Panner Tikka.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Panner Tikka<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Panner Tikka">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Veg Crispy.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Veg Crispy<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Veg Crispy">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Chicken 65.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Chicken 65<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Chicken 65">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                </div>
                <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Chicken Lolipop.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Chicken Lolipop<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit  name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Chicken Lolipop">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Fish Koliwada.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Fish Koliwada<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Panner Tikka">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Veg Crispy.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Veg Crispy<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Veg Crispy">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/S_Baby-Corn Crispy.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Baby-Corn Crispy<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Baby-Corn Crispy">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                </div>
                <div class="login_box" id="nonveg">
                <p class="head2" id="head123">Veg Gravies</p>
            </div>
            <div class="flexb" id="flexb1">
                <div class="flexi" id="flexi1">
                  <form action="addcart.php" method="POST">
                      <div class="mybody">
                      <img src="menuphoto/Butter panner.jpg" alt="" class="imgflex">
                      </div>
                      <div class="insidecard">
                        <p>Butter Panner</p>
                        <p>Price : Rs.200</p>
                        <label>Qty:</label> <input type="Number" name="Number" required="" class="no">
                        <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                        <input type="hidden" name="Item_name" value="Butter Panner">
                        <input type="hidden" name="Price" value="400">
                      </div>
                  </form>
                  </div>
                  <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Panner Tikka.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Panner Tikka<p>
                    <p>Price : Rs.240</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Panner Tikka">
                    <input type="hidden" name="Price" value="240">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Malai Soya.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Malai Soya<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Malai Soya">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
               <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Mix Vege.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Mix Vege<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Mix Vege">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                     
               
            </div>
            <div class="flexb ">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Panner Lababdar.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Panner Lababdar<p>
                    <p>Price : Rs.235</p>
                    <label>Qty</label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Panner Lababdar">
                    <input type="hidden" name="Price" value="235">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Veg Kofta.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Veg Kofta<p>
                    <p>Price : Rs.200</p>
                    <label>Qty</label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Veg Kofta">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Veg Kurma.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Veg Kurma<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Veg Kurma">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Mushroom Tikka.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Mushroom Tikka<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Mushroom Tikka">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                
            </div>
            <div class="flexb ">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Panner Lababdar.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Panner Lababdar<p>
                    <p>Price : Rs.235</p>
                    <<label>Qty:</label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Panner Lababdar">
                    <input type="hidden" name="Price" value="235">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Panner Makhani.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Panner Makhani<p>
                    <p>Price : Rs.215</p>
                    <label>Qty:</label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Panner Makhani">
                    <input type="hidden" name="Price" value="215">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Panner Chili.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Panner Chili<p>
                    <p>Price : Rs.240</p>
                    <label>Qty:</label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Panner Chili">
                    <input type="hidden" name="Price" value="240">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Badami Panner.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Badami Panner<p>
                    <p>Price : Rs.220</p>
                    <label>Qty:</label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Badami Panner">
                    <input type="hidden" name="Price" value="220">
                    </div>
                    </form>
                </div>
            </div>
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Veg Kholhapuri.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Veg Kolhapuri<p>
                    <p>Price : Rs.210</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Veg Kolhapuri">
                    <input type="hidden" name="Price" value="210">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Panner Kolhapuri.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Panner Kolhapuri<p>
                    <p>Price : Rs.230</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Panner Kolhapuri">
                    <input type="hidden" name="Price" value="230">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/kaju Curry.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>kaju Curry<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Ckicken Massamam">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Kashmiri Panner.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Kashmiri Panner<p>
                    <p>Price : Rs.225</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Kashmiri Panner">
                    <input type="hidden" name="Price" value="225">
                    </div>
                    </form>
                </div>
            </div>
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/ChanaMasala.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Chana Masala<p>
                    <p>Price : Rs.150</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Chana Masala">
                    <input type="hidden" name="Price" value="150">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Akkha Massor.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Akkha Massor<p>
                    <p>Price : Rs.140</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Akkha Massor">
                    <input type="hidden" name="Price" value="140">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Bhindi masala.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Bhindi masala<p>
                    <p>Price : Rs.130</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Bhindi masala">
                    <input type="hidden" name="Price" value="130">
                    </div>
                    </form>
                </div>
                
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Potato masala.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>YPotato masala<p>
                    <p>Price : Rs.120</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Potato masala">
                    <input type="hidden" name="Price" value="120">
                    </div>
                    </form>
                </div>
            </div>   
            <div class="login_box" id="nonveg">
                <p class="head2" id="head123">Non-Veg Gravies</p>
            </div>
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Butter Chicken.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Butter Chicken<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit  name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Butter Chicken">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Chicken Karachi.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Chicken Karachi<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Chicken Karachi">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Ginger Chicken.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Ginger Chicken<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Ginger Chicken">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Skillet Chicken.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Skillet Chicken<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Skillet Chicken">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                </div>
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Blackpaper Chicken.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>BlackpaperChicken<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Blackpaper Chicken">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Chicken Tikka.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Chicken Tikka<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Chicken Tikka">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Ckicken Massamam.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>CkickenMassamam<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Ckicken Massamam">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Yellow Chicken.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Yellow Chicken<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Yellow Chicken">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
            </div>  
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Fish Curry.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Fish Curry<p>
                    <p>Price : Rs.350</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Fish Curry">
                    <input type="hidden" name="Price" value="350">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Fish Korma.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Fish Korma<p>
                    <p>Price : Rs.360</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Fish Korma">
                    <input type="hidden" name="Price" value="360">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Fish Makhani.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Fish Makhani<p>
                    <p>Price : Rs.365</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Fish Makhani">
                    <input type="hidden" name="Price" value="365">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Fish Vindaloo.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Fish Vindaloo<p>
                    <p>Price : Rs.370</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Fish Vindaloo">
                    <input type="hidden" name="Price" value="370">
                    </div>
                    </form>
                </div>
            </div>  
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Chettinad Fish.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Chettinad Fish<p>
                    <p>Price : Rs.375</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Chettinad Fish">
                    <input type="hidden" name="Price" value="375">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Pepper Fish.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Pepper Fish<p>
                    <p>Price : Rs.365</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Pepper Fish">
                    <input type="hidden" name="Price" value="365">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Surmai Curry.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Surmai Curry<p>
                    <p>Price : Rs.355</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Surmai Curry">
                    <input type="hidden" name="Price" value="355">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Mustard Fish.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Mustard Fish<p>
                    <p>Price : Rs.370</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Mustard Fish">
                    <input type="hidden" name="Price" value="370">
                    </div>
                    </form>
                </div>
            </div>  
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Kerla Tuna.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Kerla Tuna<p>
                    <p>Price : Rs.385</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Kerla Tuna">
                    <input type="hidden" name="Price" value="385">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Garlic Prawn.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Garlic Prawn<p>
                    <p>Price : Rs.305</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Garlic Prawn">
                    <input type="hidden" name="Price" value="305">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Prawn masala.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Prawn masala<p>
                    <p>Price : Rs.300</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Prawn masala">
                    <input type="hidden" name="Price" value="300">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Egg masala.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Egg Masala<p>
                    <p>Price : Rs.180</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Egg masala">
                    <input type="hidden" name="Price" value="180">
                    </div>
                    </form>
                </div>
            </div>
            <div class="login_box" id="Rice">
                <p class="head2" id="head123">Rice</p>
            </div>
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Chicken Biryani.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Chicken Biryani<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Chicken Biryani">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Panner Biryani.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Panner Biryani<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Panner Biryani">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Schezwan Rice.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Schezwan Rice<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Schezwan Rice">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Mexican Rice.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Mexican Rice<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Mexican Rice">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>

                
            </div>
            <div class="flexb">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Dal Khichadi.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Dal Khichadi<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Dal Khichadi">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Jeera Rice.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Jeera Rice<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Jeera Rice">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Fried Rice.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Fried Rice<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Fried Rice">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Palak Rice.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Palak Rice<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Palak Rice">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>   
            </div>

       
            <div class="login_box" id="Tandoor">
                <p class="head2" id="head123">Desert</p>
            </div>
      
        <div class="flexb" id="flexlast">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Gulab Jamun.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Gulab Jamun<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Gulab Jamun">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Halwa.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Halwa<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Halwa">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Jalebi.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Jalebi<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Jalebi">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Khir.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Khir<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Khir">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                
            </div>
            <div class="flexb" id="flexlast">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Rasmalai.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Rasmalai<p>
                    <p>Price : Rs.25</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Paratha">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Matka Kulfi.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Matka Kulfi<p>
                    <p>Price : Rs.12</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Matka Kulfi">
                    <input type="hidden" name="Price" value="12">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Mastani.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Mastani<p>
                    <p>Price : Rs.20</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Mastani">
                    <input type="hidden" name="Price" value="20">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/kulfi.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>kulfi<p>
                    <p>Price : Rs.20</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="kulfi">
                    <input type="hidden" name="Price" value="20">
                    </div>
                    </form>
                </div>
                
            </div>  
            </div>
            <div class="flexb" id="flexlast">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/choclate ice.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Choco ice-cream<p>
                    <p>Price : Rs.25</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Paratha">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Mango.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Mango ice-cream<p>
                    <p>Price : Rs.12</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Matka Kulfi">
                    <input type="hidden" name="Price" value="12">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Pista.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Pista ice-cream<p>
                    <p>Price : Rs.20</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Pista ice-cream">
                    <input type="hidden" name="Price" value="20">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Cone.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Ice-cream Cone<p>
                    <p>Price : Rs.20</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Ice-cream Cone">
                    <input type="hidden" name="Price" value="20">
                    </div>
                    </form>
                </div>
                
            </div>  
            <div class="login_box" id="Tandoor">
                <p class="head2" id="head123">Tandoor</p>
            </div>
      
        <div class="flexb" id="flexlast">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Paratha.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Paratha<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Paratha">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Kulcha.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Kulcha<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Kulcha">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Butter Naan.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Butter Naan<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Butter Naan">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Butter Roti.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Butter Roti<p>
                    <p>Price : Rs.200</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Butter Roti">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                
            </div>
            <div class="flexb" id="flexlast">
                <div class="flexi" id="flexi1">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/appam.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Appam<p>
                    <p>Price : Rs.25</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Paratha">
                    <input type="hidden" name="Price" value="200">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi2">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/chapati.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Chapati<p>
                    <p>Price : Rs.12</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Chapati">
                    <input type="hidden" name="Price" value="12">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi3">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Bhatura.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Bhatura<p>
                    <p>Price : Rs.20</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Bhatura">
                    <input type="hidden" name="Price" value="20">
                    </div>
                    </form>
                </div>
                <div class="flexi" id="flexi4">
                <form action="addcart.php" method="POST">
                <div class="mybody">
                  <img src="menuphoto/Puri.jpg" alt="" class="imgflex">
                  </div>
                  <div class="insidecard">
                    <p>Puri<p>
                    <p>Price : Rs.20</p>
                    <label>Qty </label> : <input type="Number" name="Number" required="" class="no">
                    <button type=submit name="Add_to_Cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_name" value="Puri">
                    <input type="hidden" name="Price" value="20">
                    </div>
                    </form>
                </div>
                
            </div>  


        </section>
        
            
        
       

        
        
    </section>



    </body>

    </html>
