<html>
<head>
  <title>Products</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="mystyle.css" type="text/css">
	
</head>
<body>
      <?php 
	  require "common.php";
	  include "header.php";
	   
         function check_if_added_to_cart($item_id){
             $con=mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
			
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
 
	<div class="container">
	      <div class="jumbotron">
		    <h1><center>Welcome to our Lifestyle Store!</center> <h1>
			<p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
		  </div>
	
	</div>
	
	<div class="container">
	      <div class="row text-center">
		           <div class="col-xs-6 col-md-3 ">
				          <img src="ba/5.jpg" class="img-responsive thumbnail"/>
						   <h3>Cannon EOS</h3>
						  <p>Price:Rs.36000.00</p>
						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(1)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                 <?php                               
										                           }
										                }    
										   ?> 
 
				   </div>
				   <div class="col-xs-6 col-md-3">
				           <img src="ba/2.jpg" class="img-responsive thumbnail"/>
						   <h3>Nikon DSLR</h3>
						  <p>Price:Rs.40000.00</p>
						 						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(2)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
						   
				   </div>
				   <div class="col-xs-6 col-md-3">
				            <img src="ba/3.jpg" class="img-responsive thumbnail"/>
							<h3>Sony DSLR</h3>
						  <p>Price:Rs.50000.00</p>
						  						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(3)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
				   </div>
				   <div class="col-xs-6 col-md-3">
				             <img src="ba/4.jpg" class="img-responsive thumbnail"/>
							 <h3>Sony DSLR</h3>
						  <p>Price:Rs.80000.00</p>
						  						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(4)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
				   </div>
		  </div>
		  <br><div class="row text-center">
		           <div class="col-xs-6 col-md-3 ">
				          <img src="ba/9.jpg" class="img-responsive thumbnail"/>
						  <h3>Titan Model#301</h3>
						  <p>Price:Rs.13000.00</p>
						  						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(5)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
				   </div>
				   <div class="col-xs-6 col-md-3">
				           <img src="ba/10.jpg" class="img-responsive thumbnail">
						   <h3>Titan Model#201</h3>
						  <p>Price:Rs.3000.00</p>
												                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(6)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
						   
				   </div>
				   <div class="col-xs-6 col-md-3">
				            <img src="ba/11.jpg" class="img-responsive thumbnail"/>
							<h3>HMT Milan</h3>
						  <p>Price:Rs.8000.00</p>
						  						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(7)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
				   </div>
				   <div class="col-xs-6 col-md-3">
				             <img src="ba/12.jpg" class="img-responsive thumbnail"/>
							 <h3>Faber Luba#111</h3>
						  <p>Price:Rs.18000.00</p>
												                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(8)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
				   </div>
		      </div>
		      <div class="row text-center">
		         <br>  <div class="col-xs-6 col-md-3 ">
				          <img src="ba/8.jpg" class="img-responsive thumbnail"/>
						  <h3>H&W </h3>
						  <p>Price:Rs.800.00</p><br>
						  						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(9)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
				   </div>
				   <div class="col-xs-6 col-md-3">
				           <img src="ba/6.jpg" class="img-responsive thumbnail">
						   <h3>Luis Phil</h3>
						  <p>Price:Rs.1000.00</p>
						  						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(10)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
						   
				   </div>
				   <div class="col-xs-6 col-md-3">
				            <img src="ba/13.jpg" class="img-responsive thumbnail"/>
							<h3>John Zok</h3>
						  <p>Price:Rs.1500.00</p>
						  						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(11)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
				   </div>
				   <div class="col-xs-6 col-md-3">
				             <img src="ba/14.jpg" class="img-responsive thumbnail"/>
							 <h3>Jhalsani</h3>
						  <p>Price:Rs.1300.00</p>
						  						                   <?php if (!isset($_SESSION['email'])) { ?> 
										          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
										   <?php } else {    
										                 
										                      if (check_if_added_to_cart(12)) {            
											                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
										                      }
															  else {                                     ?>                                     
										                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>    
										                <?php                               
										                               }
										                }    
										   ?> 
				   </div>
		  </div>
	</div>
<!--	
	<div class="banner-image">
	   <div class="container">
	        <center><div class="banner-content">
			 <h1>We sell lifestyle.</h1>
			 <p>Flat 40% OFF on premium brands</p>
			  <a href="products.html" class="btn btn-danger btn-lg active">ShopNow</a>
			</div></center>
           	   
	   </div>
	
	</div>-->
<br><footer class="footer">	
<div class="container"><center> Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center> </div>
</footer>
	
	 
</body>
</html>