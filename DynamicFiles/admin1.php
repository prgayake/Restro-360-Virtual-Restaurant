<?php
       
            include('connect.php');
    
           

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
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
h2
{
  margin-top:90px;
}
#sub{
  position:relative;
  left:1000px;
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
        <li><a class="nav-link scrollto " href="main.php">Records</a></li>
          <li><a class="nav-link scrollto active"href="admin1.php">Reservations</a></li>
          <li><a class="nav-link scrollto" href="admn3.php">Online_Order</a></li>
          <li><a class="nav-link scrollto" href="alistmenu.php">Menu_section</a></li>
          <li><a class="nav-link scrollto" href="addmenu.php">Addmenu</a></li>
  
          

       <li class="dropdown"><a href=""><span>

 

    </div>

  </header><!-- End Header -->
              <br>
         <?php
           
            include('connect.php');

            $sql = "SELECT `ID`,`LID`, `username`, `Fullname`, `TableNo`, `CustomerNo`, `Date` , `Slot` FROM `h_reservation` Order by Date desc , Slot ";
            $result = mysqli_query($conn,$sql)
?>
<br>
<br>
<h2 data-aos="fade-up">Reservation</h2>

<br>
<form action="admin8.php">
<button class="btn btn_primary" id="sub" type="submit">Delete Multiple</button>
</form>
  <table>

  -<table class="table table-borderless">
  <thead class="table table-dark table-striped">
    <tr>
    <th scope="col">ID</th>
    
      <th scope="col">Fullname</th>
      <th scope="col">No of Table</th>
      <th scope="col">No of Customer</th>
      <th scope="col">Date</th>
      <th scope="col">Slot</th>
      <th scope="col"></th>
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
      
      <td><?php echo $rows['Fullname']; ?></td>
      <td><?php echo $rows['TableNo']; ?></td>
      <td><?php echo $rows['CustomerNo']; ?></td>
      <td><?php echo $rows['Date']; ?></td>
      <td><?php echo $rows['Slot']; ?></td>
      <td>
      <form action='admin2.php' method='POST'>
          <button name='Remove_Item' id="a1" class='btn btn-outline-primary'>MENU</buttton>
          <input type='hidden' name='Item' value='<?php echo $rows['ID'];?>'>
      </form>
      </td>
      <td>
      <form action='reservehandleadmin.php' method='POST'>
          <button name='Remove_Item' id="a1" class='btn btm-sm btn-outline-danger'>REMOVE</buttton>
          <input type='hidden' name='Item' value='<?php echo $rows['ID'];?>'>
      </form>
      </td>
      <td>
      <form action='admin7.php' method='POST'>
          <button name='Remove_Item' id="a1" class='btn btm-sm btn-outline-success' >CONFIRM</buttton>
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
<script>
function myFunction()
{
  document.getElementbyId("demo").stylecolor="green";
}
</script>
</body>
</html>