<?php
	require 'connect.inc.php';
	require 'core.inc.php';
	//require 'setsession.php';
	
	$name = $_POST['name'];
	$uid = $_POST['uid'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$password_hash = md5($pwd);
	$sql = "INSERT INTO members(uid , name , email ,password) values('$uid' ,'$name' , '$email', '$password_hash')";
	
	$result = $connection->query($sql);
	if ($result === TRUE) {
		$_SESSION['uid'] = $uid;
		$_SESSION['name'] = $name;
		$_SESSION['email'] = $email;
		
		header('Location:resources.php');
	} else {
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	
?>