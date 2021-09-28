<?php
include("connect.php");
if(isset($_POST['Remove_Item1']))
{

$itemname = $_POST['Item'];



        $sql1 ="DELETE FROM `menulist` WHERE Name='$itemname'";
       
        if (mysqli_query($conn, $sql1)) {
            echo '<script type="text/javascript">alert("Record Deleted")</script>';  
          } else {
            echo '<script type="text/javascript">alert("Error Occured to Delete the Record")</script>';  
          }
          echo '<script type="text/javascript">
          location.replace("alistmenu.php");
           </script>';
        
}
        else
        {
          echo '<script type="text/javascript">alert("Incorrect Password !")</script>';  
        }
        

?>