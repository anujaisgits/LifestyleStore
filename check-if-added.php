<?php
function check_if_added_to_cart($item_id){
require "common.php";
	$user_id=$_SESSION['id'];
 $find="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
 $find_result=mysqli_query($con,$find);
 if(mysqli_num_rows($find_result)>=1){
	 return 1;
 }
 else{
	 return 0;
 }
}?>




