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


$sql="SELECT COUNT(Quantity),Name FROM addcart GROUP BY Name ORDER BY COUNT(Quantity) DESC LIMIT 0,5";
$result  = mysqli_query($conn,$sql);
if ($result) 
{	$finalarr=array();
	 while($row = mysqli_fetch_array($result)){

	 	$arr = array(
	 				'Dish' =>$row['Name'], 'Total'=>$row['COUNT(Quantity)']
	 		);

	 	$finalarr [] =$arr;
	 }

	 return json_encode($finalarr);
}else
{
	echo "Nooo";
}

?>
