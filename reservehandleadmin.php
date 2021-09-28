<?php

session_start();
include_once 'connect.php';

if(isset($_POST['Remove_Item']))
{
$item = $_POST['Remove_Item'];
$itemname = $_POST['Item'];
$id = $_SESSION['ID'];
echo$itemname;

        $sql ="DELETE FROM `h_reservation` WHERE ID='$itemname'";
       
        if (mysqli_query($conn, $sql)) {
            echo '<script type="text/javascript">alert("Record Deleted")</script>';  
          }
        else 
        {
            echo '<script type="text/javascript">alert("Error Occured to Delete the Record")</script>';  
          }
          echo '<script type="text/javascript"> 
          location.replace("admin.php"); 
           </script>';        
}
        else
        {
          echo '<script type="text/javascript">alert("Incorrect Password !")</script>';  
        }    
    

?>