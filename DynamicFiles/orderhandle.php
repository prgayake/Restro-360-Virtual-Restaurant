<?php

session_start();
include_once 'connect.php';

if(isset($_POST['Remove_Item']))
{
$item = $_POST['Remove_Item'];
$itemname = $_POST['Item'];
$name = $_SESSION['username'];
$id = $_SESSION['ID'];


        $sql ="DELETE FROM `addcart1` WHERE LID='$id' And Name='$itemname'";
       
        if (mysqli_query($conn, $sql)) {
            echo '<script type="text/javascript">alert("Record Deleted")</script>';  
          } else {
            echo '<script type="text/javascript">alert("Error Occured to Delete the Record")</script>';  
          }
          echo '<script type="text/javascript">
          location.replace("menucard.php");
           </script>';
        
}
        else
        {
          echo '<script type="text/javascript">alert("Incorrect Password !")</script>';  
        }
        

?>