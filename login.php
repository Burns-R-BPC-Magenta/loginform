<?php
$uname = $_POST['username'];
$pass = $_POST['password'];

if($uname == "Robbie" && $pass == "123")
	echo "Content after login has been successful.";
else
	echo "invalid";
?>