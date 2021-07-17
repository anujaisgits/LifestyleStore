<?php
require "common.php";


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

	
    <title>signup</title>
</head>
<body>
<?php
include "header.php";
?>
<br><br><br><br>
	<div class="container">
	       <div class="row ">
			        <div class="col-xs-5 col-xs-offset-4">
					                              <h1>Signup </h1>					      
						                               <form action="signup_script.php" method="post" >
					              
						                                        <div class="form-group ">
						                                        <input type="text" class="form-control " name="name" required="true" placeholder="Name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"/>
																</div>
						                                        <div class="form-group ">
						                                        <input type="email" class="form-control " name="email" required="true" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
						                                         </div>
						                                        <div class="form-group">
						                                        <input type="password" class="form-control " name="password" required="true" placeholder="Password" pattern=".{6,}" />
                                                                 </div>
								                                 <div class="form-group">
						                                           <input type="text" class="form-control " name="contact" required="true" placeholder="Contact"/>
                                                                 </div>
								                                 <div class="form-group"> 
						                                          <input type="text" class="form-control " name="city" required="true" placeholder="City"/>
                                                                </div>
								                               <div class="form-group">
						                                            <input type="text" class="form-control " name="address" required="true" placeholder="Address"/>
                                                                </div>
  				                                         
																<div><button type="submit" class="btn btn-primary">Submit</button></div>
						                                </form>
				   </div>   
	       </div>
	</div>
<br><<br><br><br><br><br><br><br><br><br><br>
<?php
include "footer.php";
?>
</body>
</html>