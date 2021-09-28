<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


                $query = "SELECT COUNT(ID),EXTRACT(Day FROM R_date) FROM `h_reservation` GROUP BY EXTRACT(Day FROM R_date) DESC";
                
                $exec = mysqli_query($conn,$query);
              


if ($exec) 
{	$finalarr=array();
	 while($row = mysqli_fetch_array($exec)){

	 	$arr = array(
	 				'count' =>$row['COUNT(ID)'], 'date'=>$row['EXTRACT(Day FROM R_date)']
	 		);

	 	$finalarr [] =$arr;
	 }

	 echo  json_encode($finalarr);
}else
{
	
}

?>




