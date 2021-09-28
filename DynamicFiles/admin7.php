<?php
include('connect.php');

if(isset($_POST['Remove_Item']))
{

$date= $_POST['Item'];

                $result = mysqli_query($conn,"UPDATE `h_reservation` SET `status`=1 WHERE ID='$date' ");
                if($result)
                {
                    echo"done";
                  

                }
                echo '<script type="text/javascript">
                location.replace("admin1.php");
                 </script>';
}
?>