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
	$name=$_POST['User_Name'];
	$email=$_POST['Email'];
	

	$sql_query="INSERT INTO learn VALUES('$name','$email')";
	if(mysqli_query($conn,$sql_query))
	{
		echo "added";
	}
	else
	{

		echo "Error:" . $sql."" . mysqli_error($conn);

	}
	mysqli_close($conn);
}
?>