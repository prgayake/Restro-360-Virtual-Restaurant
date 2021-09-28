<?php


include_once 'connect.php';

if(isset($_POST['Remove_Item']))
{
$item = $_POST['Remove_Item'];
$itemname = $_POST['Item'];
$id =$_POST['Item1'];


        $sql ="DELETE FROM `addcart` WHERE LID='$id' And Name='$itemname'";
       
        if (mysqli_query($conn, $sql)) {
            echo '<script type="text/javascript">alert("Record Deleted")</script>';  
          } else {
            echo '<script type="text/javascript">alert("Error Occured to Delete the Record")</script>';  
          }
          echo '<script type="text/javascript">
          location.replace("admin1.php");
           </script>';
        
}
if(isset($_POST['Remove_Item1']))
{

$itemname = $_POST['Item'];
$id =$_POST['Item1'];


        $sql ="DELETE FROM `addcart1` WHERE LID='$id' And Name='$itemname'";
       
        if (mysqli_query($conn, $sql)) {
            echo '<script type="text/javascript">alert("Record Deleted")</script>';  
          } else {
            echo '<script type="text/javascript">alert("Error Occured to Delete the Record")</script>';  
          }
          echo '<script type="text/javascript">
          location.replace("admin1.php");
           </script>';
        
}
        else
        {
          echo '<script type="text/javascript">alert("Incorrect Password !")</script>';  
        }
        

?>