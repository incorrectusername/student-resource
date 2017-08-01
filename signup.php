
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
    <script type="text/javascript" src="form.js"></script>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
                <h4 class="modal-title">Sign Up</h4>
            </div>
            <div class="modal-body">
				<form onsubmit = "return(validate());" method="POST" action="register.php">
				  
				  <div class="form-group">
					<label for="name" >Full Name</label>
					<input type="text" class="form-control" id="name" name="name" onblur="checkName()" required placeholder="Full Name">
					<span id="spanname"></span>
				  </div>
                  <div class="form-group">
					<label for="name" >User Name</label>
					<input type="text" class="form-control" id="uid"  name="uid" placeholder="User Name" required>
					<span id="spanname"></span>
				  </div>
                   <div class="form-group">
					<label for="email" >Email</label>
					<input type="email" class="form-control" id="email" name="email" onblur="checkEmail()" required placeholder="Email">
					<span id="spanemail"></span>
				  </div>
				  <div class="form-group">
					<label for="password1" >Password</label>
					<input type="password" class="form-control" id="password1" onblur = "checkPass()" name="pwd" required placeholder="Password">
					<span id="spanpassword1"></span>
				  </div>   
				  <div class="form-group">
					<label for="password2" >Confirm Password</label>
					<input type="password" class="form-control" id="password2" onblur="matchPass()" required placeholder=" Confirm Password">
					<span id="spanpassword2"></span>
				  </div>  
				  <button type="submit" class="btn btn-primary">Sign Up</button>
				</form>
            </div>
			<div class="modal-footer">
				<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
				
			  </div>
        </div>
    </div>
</div>
</body>
</html>                                		