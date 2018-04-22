<?php 
include("db.php");
	 $sid=$_GET['stid'];
	 $edtqury="select *from student_record where id=".$sid;

	 $rs1=mysql_query($edtqury);
	 $rec1=mysql_fetch_array($rs1);
print_r($rec1);
?>
<html>        
<head>

<title>Student Record</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<script>

function valid(x)
            {
				
			//alert(x);
                if(x.name.value=="")
                {
                    
                  alert("Enter Name");
                  return false;
                    
                }
 
    
                if(!isNaN(x.name.value))
                {
                    
            alert("Enter Characters only");
            x.name.focus();
            x.name.value="";        
                    
            return false;
                }
        if(x.name.value.length<4) //check value of name must be 4 and above
         {
	   alert("Must Enter 4 chracter");
	     x.name.focus();                    //set focus
	     return false;
        }
		
		
		if(x.fname.value=="")
                {
                    
                  alert("Enter fName");
                  return false;
                    
                }
                
		if(x.password.value=="")
			{
			alert("Enter Password");
			x.password.focus();
			
			return false;
			}
			
			
			if(x.cpassword.value=="")
			{
			alert("Enter Confirm Password");
			x.cpassword.focus();
			
			return false;
			}
			
			if(x.age.value=="")
			{
				alert("Enter Age");
				return false;
				
			}
			if(x.age.value>=100)
			{
				alert("Enter correct age details");
				return false;
			}
			
			if(x.email.value=="")
			{
				alert("Enter email");
				return false;
			}
			
			if(x.password.value!=x.cpassword.value)
			{
			alert("Passwor should be same");
			
			x.cpassword.focus();
			return false;
			}
			
			
			if(x.gen[0].checked==false && x.gen[1].checked==false)
               {
                   alert("Choose Gender");
                   return false;
                   
               }
			    
			
			
			if(x.chk[0].checked==false  && x.chk[1].checked==false)	
			{
				alert("select atlest one course");
				return false;
			}
			
			
			 
                
                if(x.country.value=="0")
                {
                    
                    alert("Choose a country");
                    return false;
                }
				
		if(x.Add.value=="") 
               {
                   
                   alert("Enter Address");
                   return false;
               }

}
</script>
<body>
<form  class="form-horiziontal" action="update.php" method="post" enctype="multipart/form-data"onsubmit="return valid(this)">
<table class="tbl-form" border="2">
<tr>
<td>Student Record</td>
</tr>
<input type="hidden" name="stdid" value="<?php echo $rec1['id']; ?>">


<tr class="srn">
<td>Image</td>
<?php if ($rec1['image']!=''){ ?>

<td><img src="images/<?php echo $rec1['image']; ?>" height="100px" width="100px">
			 <a href="remove.php?id=<?php echo $sid; ?>&myfile=<?php echo $rec1["image"]?>">Remove Photo</a>
</td>
<?php }else{ ?>
	<td><input type="file" name="image" id="image"></td>

<?php } ?>
</tr>


<tr class="srn">
<td>Name</td>
<td><input type="text" name="name" id="name" value="<?php echo $rec1['name']; ?>"></td>

</tr>


<tr class="srn">
<td>Fname</td>
<td><input type="text" name="fname" id="fname"value="<?php echo $rec1['fname']; ?>"></td>
</tr>

<tr>
<td>Age</td>
<td><input type="number" name="age" id="age"value="<?php echo $rec1['age']; ?>"></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email" id="email"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" id="password"value="<?php echo $rec1['password']; ?>>"</td>
</tr>


<tr>
<td>Gender</td>
<td><input type="radio" name="gender" id="gender" value="male" <?php if($rec1['gender']=='male'){ echo "checked"; }?>>Male
<input type="radio" name="gen" id="gender" value="Female" <?php if($rec1['gender']=='Female'){ echo "checked"; }?>>Female
</td>
</tr>





<tr>
<td>Course</td>
<?php $courses = explode(",",$rec1['course']);

print_r($courses);
 ?>
<td><input type="checkbox" name="chk[]" id="chk" value="PHP"<?php if(in_array("PHP",$courses)){echo "checked";}?>>PHP
<input type="checkbox" name="chk[]" id="chk" value="JAVA" <?php if(in_array("JAVA",$courses)){echo "checked";}?>>JAVA

</td>
</tr>





<tr>
<td>City</td>
<td>
<select name="city">
<option value="<?php echo $rec1['city']; ?>"><?php echo $rec1['city']; ?></option>
<option value="India">India</option>
<option value="Australia">Australia</option>
<option value="Japan">Japan</option>
<option value="America">America</option>
</select>
</td>
</tr>

<tr>
<td>Address</td>
<td><textarea name="address"><?php echo $rec1['address']; ?></textarea></td>
</tr>

<tr>
<td><input type="submit" value="submit"></td>
</tr>


</table>
</form>
</body>
</html>