<?php  
include("db.php");


			$myid=$_GET["id"];
			$myfile=$_GET['myfile'];
			$sql="update student_record set image='' where id=$myid";
			mysql_query($sql);
		
		unlink("images/".$myfile);
		header("location:edit.php?stid=$myid");
		

?>