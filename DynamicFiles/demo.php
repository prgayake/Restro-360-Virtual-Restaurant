<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<a class="first" ></a>
<script type="text/javascript">
Swal.fire({
  icon : 'success',
  title: 'Write feedback',
  html:
    '<form action="demo.php" method="post">'+
    '<input type="text" style="margin-bottom:30px; width:400px;height:50px;" name="name" placeholder ="Name" required=""><br>' +
    '<input type="email" style="margin-bottom:30px; width:400px;height:50px;" name="email" placeholder ="Email" required=""><br>' +
    ' <textarea type="text" name="request" placeholder="Write Your honest FeedBack" required="" style="width: 400px;height: 150px; margin-bottom: 20px; border-color: black; border-radius:8px;"></textarea>'+

    '<button type="text" style="margin-bottom:30px; width:250px;height:50px; font-size:22px;border-radius:8px; color: blue; background-color: #adf06a ;" name="SEND" > Submit</button><br>' +
    '</form>'
})
</script>

   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css

">


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js" > </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
"></script>



<style type="text/css">
  

body {
  margin: 20px auto;
  font-family: 'Lato';
  font-weight: 300;
  width: 600px;
  text-align: center;
}
</style>



<?php
include("connect.php");

    if(isset($_POST['SEND']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $request = $_POST['request']; 

      $sql ="INSERT INTO feedback (Name ,email,feedback) VALUES ('$name','$email','$request');";

               $query= mysqli_query($conn,$sql);

               if($query)
              {
                echo '<script type="text/javascript">
               location.replace("index1.php");
                </script>';


              }
              else
              {

              }
   
      }  
   ?>

