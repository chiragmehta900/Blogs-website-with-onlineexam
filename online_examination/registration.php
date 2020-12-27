<?php
session_start();

$link = mysqli_connect('localhost','root','','business_reg');
if($link == false)
{
die ("error, could not connect" .mysqli_connect_error());
}
else
{
	echo"";
}
$user_name = mysqli_real_escape_string ($link, $_POST['user_name']);
$user_email = mysqli_real_escape_string ($link, $_POST['user_email']);
$user_mobile = mysqli_real_escape_string ($link, $_POST['user_mobile']);
$user_city = mysqli_real_escape_string ($link, $_POST['user_city']);
$user_district = mysqli_real_escape_string ($link, $_POST['user_district']);
$user_course = mysqli_real_escape_string ($link, $_POST['user_course']);
$user_message = mysqli_real_escape_string ($link, $_POST['user_message']);

	$reg= "INSERT INTO registration(user_name, user_email, user_mobile, user_city, user_district, user_course, user_message) value ('$user_name','$user_email' ,'$user_mobile' ,'$user_city' ,'$user_district','$user_course' ,'$user_message')"; 
	if (mysqli_query($link, $reg))
	{
		echo"<h1>Registration Done <br> We will contact you soon </h1>";
	}
	else
	{
		echo"could not able to enter";
	}
	

	

?>