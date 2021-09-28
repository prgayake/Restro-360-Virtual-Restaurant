<?php


session_start();
include_once 'connect.php';

if(isset($_POST['Remove_Item']))
{
$item = $_POST['Remove_Item'];
$itemname = $_POST['Item'];


}

?>


<?php
if (mysqli_num_rows($result) > 0) {
?>
<br>

<div class="cont">
<h5 id="h5">CART</h5>
  <table>

  -<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tbody>
    <tr>
      <th scope="row"><?php echo $i+1; ?></th>
      <td><?php echo $row["Name"]; ?></td>
      <td><?php echo $row["Quantity"]; ?></td>
      <td><?php echo $row["Price"]; ?></td>
      <td>
        <form action='carthandleadmin.php' method='POST'>
          <button name='Remove_Item' class='btn btm-sm btn-outline-danger'>REMOVE</buttton>
          <input type='hidden' name='Item' value='<?php echo $row["Name"];?>'>
          <input type='hidden' name='Item1' value='<?php echo $itemname;?>'>
</form>
    </tr>
<?php
$i++;
}
?>
<?php
include_once 'connect.php';
$result1 = mysqli_query($conn,"SELECT SUM(Price) AS value_sum FROM addcart  WHERE  LID = '$itemname'"); 
$row1 = mysqli_fetch_assoc($result1); 
$sum = $row1['value_sum'];


?>
<tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td><?php echo"Total :";echo"$sum"; ?></td>
    </tr>
</body>
</table>
</div>

<?php
}
else{
    echo "No result found";
}
?>

 </body>
</html>
 