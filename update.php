
<?php
include("db.php");
 $stid=$_POST['stdid'];

$name= $_POST['name'];
$fname=$_POST['fname'];
$age=$_POST['age'];
$email=$_POST['email'];
$pass=$_POST['password'];

$gender= $_POST['gen'];
$course= $_POST['chk'];
$cou= implode(",",$course);
$city= $_POST['city'];
$add= $_POST['address'];



  $photo=$_FILES['image']['name'];
$pext = pathinfo($photo,PATHINFO_EXTENSION);
		  $dest = "images/"; 
		  
		  if($photo!=""){
			
			$imagename="stform".$stid.".".$pext;
				   $newfile=$dest.$imagename;
			//print_r($newfile); die;
			  if(copy($_FILES['image']['tmp_name'] , $newfile))
				  { 
	$delqury="update student_record set name='$name',fname='$fname',age='$age',email='$email',password='$password',gender='$gender',course='$cou',city='$city',address='$address',image='$imagename' where id=" .$stid; 		  
			  mysql_query($delqury);

				  }
			  
			  
		  }else{
			  
			
$delqury="update student_record set name='$name',fname='$fname',age='$age',email='$email',password='$password',gender='$gender',course='$cou',city='$city',address='$address' where id=" .$stid; 
			  
		  }









	

 
if(mysql_query($delqury))
{
header("location:view.php");
}
else{
echo "error occured";
}

?>