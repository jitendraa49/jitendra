<?php
include("db.php");

//print_r($_POST); die;
$username= $_POST['username'];

$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$mobile=$_POST['mobile'];



$querying = "insert into users (username,email,password,cpassword,mobile) values('$username','$email','$pass','$cpass','$mobile')"; 
  if(mysql_query($querying))
{


header("location:login.php");	
}
else
{

 echo "error occured"; 

}

?>
