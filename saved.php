<?php
include("db.php");

//print_r($_POST); die;
$name= $_POST['name'];
$fname=$_POST['fname'];
$age=$_POST['age'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$gender= $_POST['gen'];
$course= $_POST['chk'];
$cou= implode(",",$course);
$city= $_POST['city'];
$add= $_POST['address'];
$username= $_POST['username'];

$querying = "insert into student_record (name,fname,age,email,password,cpassword,gender,course,city,address,username) values('$name','$fname','$age','$email','$pass','$cpass','$gender','$cou','$city','$add','username')"; 
  if(mysql_query($querying))
{


include ("image.php");
header("location:view.php");
	
}
else
{

 echo "error occured"; 

}

?>
