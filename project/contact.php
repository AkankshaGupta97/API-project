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
  $user=$_POST['condition'];
  $name =$_POST['message'];
 
  $query = "INSERT INTO contact (doctor,condition,message) VALUES ('Achara','$user','$name')";
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
