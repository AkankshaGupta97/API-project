<?php
$server = "localhost";
$username="root";
$password = "elena";
$database = "signup";
$conn = mysqli_connect($server,$username,$password,$database);
if(mysqli_connect_errno())
{
	echo "error" .mysqli_connect_errno();
}
else
{
	echo "success";
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$user=$_POST['username'];
	$name =$_POST['name'];
	$pass=$_POST['psw'];
	$select=$_POST['selectt'];
	$query = "INSERT INTO signup (name,username,psw,selectt) VALUES ('$name','$user','$pass','$select')";
	if(mysqli_query($conn,$query)) 
	{
       header("location:home1.php");
	}
	else
	{
		echo "error" .mysqli_query($conn,$query);
	}
}

?>
