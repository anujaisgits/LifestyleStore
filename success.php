<?php
require "common.php";
$user_id=$_SESSION['id'];
$q="UPDATE user_items SET status='confirmed' WHERE user_id=$user_id";
mysqli_query($con,$q);


?>
<html>
<head>
<title>Success</title>
</head>
<body>
<center>
   <div class=" jumbotron">
          <p> <center><h2>Your order has been confirmed <a href="products.php">Click here</a> to buy other products</h2></center></p>
   </div>

</center>
</body>
</html>