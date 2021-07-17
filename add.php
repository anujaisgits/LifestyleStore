<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db1');

$x=$_GET["username"];
$q="insert into person (username) values ('$x')";
$q2="select * from person";
mysqli_query($con,$q);
$output=mysqli_query($con,$q2);
$num=mysqli_num_rows($output);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($output);
	echo $row['username'];
}
mysqli_close($con);
echo "$x wishes you happy diwali";

?>
<html>
<head>
</head>
<body>
<h1><?php echo "$x wishes you happy diwali"?></h1>
</body>
</html>