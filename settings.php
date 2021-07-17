<html>
<head>
  <title>settings</title>
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
			   <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
			  <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
			  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
			  </ul>
            </div>			
               
                
        </div>
    </nav>
	<div class="container">
	      <br><br><br> <br><br><br><div class="row ">
			        <div class="col-xs-5 col-xs-offset-4">
					                              <h1>Change Password</h1>					      
						                               <form action="settings_script.php" method="post" >
													           <div class="form-group">
						                                        <input type="password" class="form-control " name="oldpassword" required="true" placeholder="Old Password"/>
                                                                 </div>
				                                               <div class="form-group">
						                                        <input type="password" class="form-control " name="newpassword" required="true" placeholder="New Password"/>
                                                                 </div>
																 <div class="form-group">
						                                        <input type="password" class="form-control " name="rpassword" required="true" placeholder="Re-type New Password"/>
                                                                 </div>
								                               
  				                                         
							                             <div><button type="submit" class="btn btn-primary">Submit</button></div>
						                                </form>
				   </div>   
	       </div>
	</div>
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><footer class="footer">	
<div class="container"><center> Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center> </div>
</footer>
</body>
</html>