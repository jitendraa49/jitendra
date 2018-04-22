<?php
include("db.php");

session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
$username = $_SESSION['username'];
$querying = "insert into student_record (name,lname,age,email,password,gender,course,city,address,username) values('$name','$lname','$age','$email','$password','$gender','$cou','$city','$address','$username')";
//print_r($_POST); die;

$name= $_POST['name'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender= $_POST['gender'];
$course= $_POST['chk'];
$cou= implode(",",$course);
$city= $_POST['city'];
$address= $_POST['address'];


$querying = "insert into student_record (name,lname,age,email,password,gender,course,city,address) values('$name','$lname','$age','$email','$password','$gender','$cou','$city','$address')"; 
  if(mysql_query($querying,$con))
{

include ("image.php");
header("location:view.php");	
}
else
{

 echo "error occured";
echo "Error creating database: " . mysql_error();
}


?>
