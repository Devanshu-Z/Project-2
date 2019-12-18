<?php

$con = mysqli_connect('localhost','root');

if ($con) 
{
	echo "CONNECTION SUCCESSFULL";
}
else{
	echo "NO CONNECTION";
}

mysqli_select_db($con, 'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = " insert into userinfo (user, email, mobile)
values ('$user','$email','$mobile') ";

mysqli_query($con, $query);
header('location:index.php');

?>