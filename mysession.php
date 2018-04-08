<?php
session_start();
//print_r($_SESSION); 
?>

<?php
if(isset($_SESSION["user_name"])) {
?>
 <?php echo "Welcome ". ucfirst($_SESSION["user_name"]); ?>. Click here to <a href="logout.php" title="Logout">Logout.</a>
<?php
}
else{
header("Location:login.php");
}
?>
