<?php
require "common.php";
$name=$_POST['name'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5(mysqli_real_escape_string($con,$_POST['password']));
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$select_query="select id from users where email='$email'";
$select_query_result=mysqli_query($con,$select_query);
if(mysqli_num_rows($select_query_result)>0){
	echo "email-id already exist";
}
else{
	$insert="insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
	mysqli_query($con,$insert);
	$_SESSION['email']=$email;
	$_SESSION['id']=mysqli_insert_id($con);
	$user_id=$_SESSION['id'];
	header('location: products.php');
	
}
?>