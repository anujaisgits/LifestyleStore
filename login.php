<?php
require "common.php";
if (isset($_SESSION['email']))
	{   header('location: products.php'); }
?>
<html>
<head>
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

	
    <title>Login</title>

</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
           <div class="navbar-header">
		   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		   </button>
		   <a href="#" class="navbar-brand">Lifestyle Store</a>
		   </div> 
            <div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
			  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
			  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
			  </ul>
            </div>			
               
                
        </div>
    </nav>
	<br><br><br><br><div class="container">
	        <div class="row ">
			    <div class="col-xs-5 col-xs-offset-4">
				    <div class=" panel panel-primary">
					        <div class="panel-heading">
					           <h1>Login </h1>
					        </div>
					      <div class="panel-body">
						      <p class="text-warning">Login to make purchase</p>
						       <form action="login_submit.php" method="post">
					              
						          <div class="form-group ">
						          <input type="email" class="form-control " name="email" required="true" placeholder="Email"/>
						           </div>
						           <div class="form-group">
						           <input type="password" class="form-control " name="password" required="true" placeholder="Password"/>
                                  </div>
  				             
							</div>
					    
						       
						          <div class="container"><button type="submit" class="btn btn-primary">Login</button></div>
						       </form>   
						       
						<br><br><br>	   <div class="panel-footer">
							   <div class="container"><p>Don't have an account?<a href="signup.php">Register</a></p></div>
						      </div> 
				   </div>
					
				</div>
           </div> 			
	 </div>
	 </div>
<br><br><br><br><br><br><br><br><br><?php include "footer.php" ?>