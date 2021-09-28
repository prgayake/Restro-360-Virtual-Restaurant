
  <?php

  session_start();
  include_once 'connect.php';

  if(isset($_POST['Remove_Item']))
  {
  $itemname = $_POST['Item'];


          $sql ="DELETE FROM `h_reservation` WHERE ID='$itemname'";
          $result =mysqli_query($conn, $sql);
          if ($result) {
              
                    
                ?> 

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
              <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
              <a class="first" ></a>
              <script type="text/javascript">
               Swal.fire({
                  icon: "success",
                  title: " Deleted ...",
                  text: "Record Has been Deleted !",
                 
                  confirmButtonText: `OK`,
                  
                }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'success')
                    location.replace("reservations.php");
                  } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                  }
                })
              </script>

                 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300"> 
                  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css

              ">


                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js" > </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
              "></script>





              <?php 
            
            }
          else {
              echo '<script type="text/javascript">alert("Error Occured to Delete the Record")</script>';  
            }
                    
  
                 
  }