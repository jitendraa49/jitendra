<?php
include("db.php");

//print_r($_POST); die;
$username= $_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$mobile=$_POST['mobile'];



$querying = "insert into users (username,email,password,cpassword,mobile) values('$username','$email','$password','$cpassword','$mobile')"; 
  if(mysql_query($querying))
{
echo "Registration successfully";
header("location:login.php");	
}
else
{

 echo "error occured"; 

}

?>
