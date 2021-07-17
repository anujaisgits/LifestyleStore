<?php
require "common.php";
if (isset($_SESSION['email']))
	{   header('location: products.php'); }
?>
<html>
<head>
  <title>LifestyleStore</title>
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
      include "header.php";
	  ?>
	<div class="banner-image">
	   <div class="container">
	        <center><div class="banner-content">
			 <h1>We sell lifestyle.</h1>
			 <p>Flat 40% OFF on premium brands</p>
			  <a href="products.php" class="btn btn-danger btn-lg active">ShopNow</a>
			</div></center>
           	   
	   </div>
	
	</div>
	      <br> <div class="container">
		        <div class="row">
	              <div class="col-xs-4 col-md-4">
				           <center><img src="ba/1.jpg" class="img-responsive thumbnail"/>
						   <h2>Cameras</h2>             
			  <p>Choose among the best available in the world.</p></center>
						  
				   </div>
				   <div class="col-xs-4 col-md-4">
				            <img src="ba/7.jpg" class="img-responsive thumbnail"/>
							<center><h2>Watches</h2>             
			  <p>Original watches from best brands</p></center>
						
				   </div>
				   <div class="col-xs-4 col-md-4">
				             <img src="ba/8.jpg" class="img-responsive thumbnail"/>
							<center><h2>Shirts</h2>             
			  <p>Our exiquisite collection of shirts.</p></center>
						  
			        </div>
				</div>	
			</div>	  




<br>
<?php
  include "footer.php";
?>
	 
</body>
</html>