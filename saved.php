<?php
include("db.php");

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


$querying = "insert into student_record (name,lname,age,email,password,gender,course,city,address,username) values('$name','$lname','$age','$email','$password','$gender','$cou','$city','$address',)"; 
  if(mysql_query($querying))
{


header("location:view.php");	
}
else
{

 echo "error occured"; 

}


?>
