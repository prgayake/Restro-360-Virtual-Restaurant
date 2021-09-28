<?php
{
    session_start();
    include("connect.php");
    $user=$_SESSION['username'];
    
   
    $result = mysqli_query($conn,"SELECT MAX(ID) as ID FROM logindetails where username = '$user'");
      
            if($result)
                {
                    echo"done";
                    while($rows = mysqli_fetch_assoc($result))
                    {
                   
                   $id=$rows['ID'];  

                  }
                }
                $_SESSION['ID']  = $id;       
                
    echo$_SESSION['ID'];

    echo '<script type="text/javascript">
    location.replace("index1.php");
     </script>';

    
}

