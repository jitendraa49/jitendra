<?php 
include("db.php");

session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
$username = $_SESSION['username']);
$qry="select *from student_record where username = '$username' order by id asc ";
//print_r($_POST); die;

$rs= mysql_query($qry);
?>

       			 		  
<table border="2">
<tr>
<td>image</td>
<td>Name</td>
<td>Fname</td>
<td>age</td>
<td>Email</td>
<td>Password</td>

<td>Gender</td>
<td>Course</td>
<td>city</td>
<td>Address</td>
<td>Action</td>

</tr>

<?php while($rep = mysql_fetch_array($rs)) { //print_r($rep);?>
<tr>
<td><img src="images/<?php echo $rep['image']; ?>" height="100px" width="100px"></td>
<td><?php echo $rep['name']; ?></td>
<td><?php echo $rep['fname']; ?></td>
<td><?php echo $rep['age']; ?></td>
<td><?php echo $rep['email']; ?></td>
<td><?php echo $rep['password']; ?></td>
<td><?php echo $rep['cpassword']; ?></td>
<td><?php echo $rep['gender']; ?></td>
<td><?php echo $rep['course']; ?></td>
<td><?php echo $rep['city']; ?></td>
<td><?php echo $rep['address']; ?></td>


<a href="edit.php?stid=<?php echo $rep['id']; ?>">Edit</a></td>
</tr>

</tr>

<?php  } ?>
</table>







