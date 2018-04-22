<?php 
include("db.php");
session_start();
if(count($_POST)>0) {
		$qry="SELECT * FROM users WHERE username='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'";
		$result = mysql_query($qry);
		$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row['username'];
}else {	
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["username"])) {
header("Location:studentrecord.php");
}
?>


<html>
<head>
<title>User Login</title>	
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php
if(isset($_GET["registration"])){

	echo "Registration successfully";
}

?>
<form name="frmUser" method="post" action="">


<div id="message"><?php if(!empty($message)) { echo $message; } ?></div>

<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="user_name"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2">
<input type="submit" name="submit" value="Submit"></td>
</tr>
</table>



</form>
</body>
</html>