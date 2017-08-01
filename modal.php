<?php
	require 'connect.inc.php';
	require 'core.inc.php';
	if(isset($_POST['uid'])&& isset($_POST['password'])){
		$username = $_POST['uid'];
		$password = $_POST['password'];
		
		$password_hash = md5($password);
		if(!empty($username) && !empty($password)){
			$sql = "select * from members where `uid`='$username' and `password`='$password_hash'";
			
			$result = $connection->query($sql);
				if($result->num_rows==1){
					while($row = $result->fetch_assoc()){
						$_SESSION['uid'] = $username;
						$_SESSION['name'] = $row['name'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['gender'] = $row['gender'];
						
						/*if(!empty($_SERVER['HTTP_REFERER'])){
							header("Location:".$_SERVER['HTTP_REFERER']);
						}else */
							header("Location:resources.php");
						
					}
				}else{
				echo '<script>alert("Incorrect username/password Combination")</script>';
				}
			
		}
	}
	
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="form.js"></script>
		<link rel="stylesheet" type="text/css" href="signup.css">
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
		<div>
		
		<form action="<?php echo $current_file ?>" method="POST">
		  <div class="form-group">
			<label for="uid">User Name</label>
			<input type="text" class="form-control" name="uid" placeholder="UserName">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
			  <a href="signup.php" class="col-md-offset-8 noaccount">Don't have an account?</a>
		  </div>
			<button type="submit" class="btn btn-default">Sign in</button>
		</form>
		</div>
	<!--div class="modal fade" id="myLogInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Login Details</h4>
		  </div>
		  <div class="modal-body">
				<form action="" method="POST">
				  <div class="form-group">
					<label for="exampleInputEmail1">User Name</label>
					<input type="email" class="form-control" name="usernmae" placeholder="UserName">
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
					  <a href="signup.php" class="col-md-offset-8 noaccount">Don't have an account?</a>
				  </div>
				</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit"  class="btn btn-default">Log In</button>
		  </div>
		</div>
	  </div>
	</div-->
</body></html>