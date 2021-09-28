<?php


include("connect.php");
if(isset($_POST['show1']))
{
    $Item=$_POST['name'];
    $mid1=$_POST['mid'];
    $Price=intval($_POST['price']);
    $Number=intval($_POST['exampleRadios']);

    $sql ="UPDATE `menulist` SET `Name`='$Item',`Price`='$Price',`Section`='$Number' WHERE  M_ID='$mid1'";

    $query= mysqli_query($conn,$sql);

    if($query)
    echo("done");

    echo '<script type="text/javascript">
               location.replace("alistmenu.php");
                </script>';

}



?>