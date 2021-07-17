
<?php 
require "common.php";
include "header.php";
if (!isset($_SESSION['email']))
	{die() ;}
$user_id=$_SESSION['id'];
$q="select items.name ,items.price,items.id from user_items INNER JOIN items on user_items.item_id=items.id where user_id=$user_id";
$item_details=mysqli_query($con,$q);
$sum=0;
if(mysqli_num_rows($item_details)==0){
	echo "add item to the cart first";
	die(header('location: products.php'));
}
else{
    while($row = mysqli_fetch_array($item_details)){
	 
	 $sum=$sum+$row['price'];
	  echo "add item to the cart first";
	 }
	
}
?>

<html>
<head>
    <title>Your Cart</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="mystyle.css" type="text/css">
</head>
<body>
    <br><br><br><br><div class="container" >
	       <?php $q="select items.name ,items.price,items.id from user_items INNER JOIN items on user_items.item_id=items.id where user_id=$user_id";
                   $item_details=mysqli_query($con,$q);
		   while($row= mysqli_fetch_array($item_details)){ ?>
           <div class="row jumbotron">
        		   <div class="col-xs-3"> <h4><?php echo $row['name'];?></h4> </div>
				   <div class="col-xs-5"><center><h4>$<?php echo $row['price'];?></h4></center> </div>
				   <div class="col-xs-3"> <a href="success.php " class="btn btn-primary btn-lg">Confirm</a></center> </div>
				   <div class="col-xs-1 "><center> <a href="cart-remove.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-lg active">Remove</a></center></div>
				   
		   </div>
		   
		   
		   <?php } ?>
		   
	 </div>
      <div class="container jumbotron"><center><h2><?php echo "Total Price:$sum" ;?></h2></center></div>
	  <?php include "footer.php" ?>
</body>
</html>
