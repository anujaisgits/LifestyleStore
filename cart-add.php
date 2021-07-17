<?php 
require "common.php" ;
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$q="INSERT INTO user_items(user_id, item_id, status) VALUES($user_id , $item_id, 'Added to cart')" ;
mysqli_query($con,$q);
header('location: products.php');
?>



