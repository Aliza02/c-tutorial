<?php
$servername="localhost";
$username="root";
$password="";
$databasename="muetdoc";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());

}

if(isset($_POST['save']))
{
	$name=$_POST['U_Name'];
	$email=$_POST['email'];
	$Pass=$_POST['password'];
	$Conf_pass=$_POST['confirm_pass'];
	$gender=$_POST['gender'];
	$grade=$_POST['grade'];
	

	$sql_query="INSERT INTO registration VALUES('$name','$email','$Pass','$Conf_pass','$gender','$grade')";
	if(mysqli_query($conn,$sql_query))
	{


		echo '<a href="login.html"><input type="submit" value="click to login" style="width:500px; height:50px; font-size:20px; background-color:#dc3545;margin-left:500px; border:none; color:white"></a>';
	}
	else
	{

		echo "Error:" . $sql."" . mysqli_error($conn);

	}
	mysqli_close($conn);
}
?>