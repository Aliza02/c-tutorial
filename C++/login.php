<?php
session_start();


$servername="localhost";
$username="root";
$password="";
$databasename="muetdoc";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());

}


$email=$_POST['Email'];
$pass=$_POST['Password'];
$q="select * from registration where Email='$email' && Password='$pass'";

$res=mysqli_query($conn,$q);

$num=mysqli_num_rows($res);

if($num==1)
{
	$_SESSION['login']="1";
	$_SESSION['email']="$email";

	header('location:exercise.html');
	
}
else
{
	header('location:reg-form.html');
}
?>