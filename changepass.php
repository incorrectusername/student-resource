<?php
	require 'connect.inc.php';
	require 'core.inc.php';
	//require 'setsession.php';
	
	$name = $_POST['name'];
    $uid = $_SESSION['uid'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$password_hash = md5($pwd);
	$sql = "select password from members where uid='$uid'";
	
	if ($result = $connection->query($sql)) {
        $row = $result->fetch_assoc();
        $oldpwd = $row['password'];
		if($password_hash === $oldpwd){
            $newpwd = $_POST['pwdchange'];
            $newpwd_hash = md5($newpwd);
            $sql = "update members set password='$newpwd_hash' where uid='$uid'";
            $result = $connection->query($sql);
            if($result===true){
                echo "Successfully changed";
            }
        }else{
            echo "Passwords do not match";
            
        }
	} else {
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	header("Location:".$http_referer);
?>