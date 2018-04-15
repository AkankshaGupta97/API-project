<?php
session_start();
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
	$user=$_POST['usrname'];
	$pass=$_POST['psw'];

	$query = mysqli_query($conn,"SELECT * FROM signup WHERE username = '$user' AND psw = '$pass'");
    $numrows=mysqli_num_rows($query);
    if($query){
    if($numrows!=0)
			{
				$row = mysqli_fetch_assoc($query);
				$_SESSION["name"]= $row["name"];


				header("location:profile.php");
					
				
}
}
}
else
{
	echo "content not found";
}



?>