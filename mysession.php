<?php
session_start();
//print_r($_SESSION); die;
?>

<?php
if(isset($_SESSION["username"])) {
?>
 <?php echo "Welcome ". ucfirst($_SESSION["username"]); ?>. Click here to <a href="logout.php" title="Logout">Logout.</a>
<?php
}
else{
header("Location:login.php");
}
?>
