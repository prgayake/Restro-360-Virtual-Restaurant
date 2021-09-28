<?php
echo"done";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST['Band']))
    {
      echo"done";
        include 'connect.php';
        $username = $_POST["username"];
        $password = $_POST["password"]; 
        
        
        $sql = "Select * from customer where username='$username' AND Password='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: index.php");

        } 
        else{
            echo"not login";
        }
  }
}
else{
        echo"not login";
    }
    
?>
