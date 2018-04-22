<?php 
include("db.php");

$id=mysql_insert_id();

//print_r($id); die;
	//print_r($_FILES); 
				$photo = $_FILES['image']['name'];
				//print_r($photo);
				$pext = pathinfo($photo,PATHINFO_EXTENSION);
				
				//print_r($pext); die;
		$dest = "images/"; 
		if($photo !="")  
		   {
			   
				$imagename="stform" .$id.".".$pext;
				   $newfile=$dest.$imagename;
				  if(copy($_FILES['image']['tmp_name'] , $newfile))
					 
				  {
				  $sql="update student_record set image='$imagename' where id=$id";
					mysql_query($sql);

				  } 
			}
			
			?>