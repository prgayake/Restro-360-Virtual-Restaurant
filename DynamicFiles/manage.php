<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_to_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION'cart'],'Item_name');
            
            $Count=count($_SESSION['cart']);
            $_SESSION['cart'][$Count]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>$_POST['Number']);
            print_r($_SESSION['cart']);

        }
        else
        {

            $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>$_POST['Number']);
            print_r($_SESSION['cart']);

        }
    }


}

?>