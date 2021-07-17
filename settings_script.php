<?php 
 require "common.php";
 
 if (!isset($_SESSION['email']))
	{header('location:index1.php') ;}
 $newpassword=mysqli_real_escape_string($con,$_POST['newpassword']);
 $oldpassword=mysqli_real_escape_string($con,$_POST['oldpassword']);
 $user_id=$_SESSION['id'];
 $q2="select password from users where id=$user_id";
 $orgpassword=mysqli_query($con,$q2);
 $row=mysqli_fetch_array( $orgpassword);
     $opassword=$row['password'];
    $b= md5($newpassword);
  if(md5( $oldpassword)== $opassword){
	   
	  $q="UPDATE users SET password='$b' WHERE id=$user_id";
	 mysqli_query($con,$q);
	  header('location:products.php');
 }
 else{
	echo "retyped password doesn't match the first one";
 }
?>