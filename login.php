<html>
<form action = "login.php" method = "post">
Username <input type="text" name="username">
Password <input type="password" name="password">
<input type="submit" value="Login">
</form>

<?php
$uname = $_POST['username'];
$pass = $_POST['password'];

if($uname == "Robbie" && $pass == "123")
	echo "Content after login has been successful.";
else
	echo "invalid";
?>