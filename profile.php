<?php
    require 'core.inc.php';
    require 'connect.inc.php';
    
    if(isset($_SESSION['uid'])){
        if(!empty($_SESSION['uid'])){
            $src = null;
            $uid = $_SESSION['uid'];
            $sql = "select avatar from members where uid='$uid'";
            $result = $connection->query($sql);
            if($result->num_rows==1){
                while($row = $result->fetch_assoc()){
                    $src = $row['avatar'];
                }
            }

        }else{
             echo 'PLease Login to get access';
            header("Location:modal.php");
            die();  
        }
        
    }else{
        echo 'PLease Login to get access';
        header("Location:modal.php");
        die();
    }
     
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Student Resources</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="resources.css" media="screen">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="profile.css" rel="stylesheet" type="text/css">
    <scrip src="form.js"></scrip>
	<script>
		(function ($) {
  $(document).ready(function(){

    /* $(function () {
        $(window).scroll(function () {
			
                 if ($(this).scrollTop() > 180) {
                $('.navbar').css('background-color','#666666');
				$('nav').addClass('shrink');
                $('.goto-top').fadeIn(400);
			} else {
                $('.navbar').css('background-color','transparent');
            $('nav').removeClass('shrink');
                $('.goto-top').fadeOut(400);
			}
        });
		
    });*/
      $('.navbar').css('background-color','#666666');
				$('nav').addClass('shrink');
                $('.goto-top').fadeIn(400);
      
      $("#myNavbar ul li a[href^='#']").on('click', function(e) {

           // prevent default anchor click behavior
           e.preventDefault();

           // store hash
           var hash = this.hash;

           // animate
           $('html, body').animate({
               scrollTop: $(hash).offset().top
             }, 900, function(){

               // when done, add hash to url
               // (default click behaviour)
               window.location.hash = hash;
             });

      });
      
      $('.goto-top').click(function(e){
          e.preventDefault();
          $('html,body').animate({scrollTop:0},1500);
      });
      

});
  }(jQuery));

	</script>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
   
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		  <a class="navbar-brand" href="resources.php">
              <span>शिक्षण</span>
              <!--span class="cali">Cali</span><span class="brant">brant</span-->
            </a>
			
		</div>
		<div>
		  <div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
			<li><a href="resources-x.php">x-ssc</a></li>
			<li><a href="resources-xi.php">xi-science</a></li>
			<li><a href="resources-xii.php">xii-science</a></li>
			<li><?php
				if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
					echo '<span class="" style="color:white">Signed in as <a href="profile.php">'.$_SESSION["uid"].'</a></span><a id="logout" href="logout.php" type="button">Log Out</a>';
					
				}else{
					
					echo '<a type="button" href="modal.php" class="" id="signin">Sign in</a>';
					
				}
			?></li>
		  </ul>
		  </div>

		</div>
		
	  </div>
	</nav>
	<div class="row">
		 <!-- Header -->
		<header>
			<div class="container">
				<div class="row">
                    
                    <div class="col-md-3 col-sm-12">
                         <?php
                            if($src!==null){
                                echo '<img id="avatar" src="'.$src.'"  />';
                            }else{
                                echo '<img id="avatar" src="https://s-media-cache-ak0.pinimg.com/736x/5c/c6/d9/5cc6d9872253e554e2c56fb80581753c.jpg"  />';
                            }
                        ?>
                        <form method="POST" action="uploadavatar.php" id="fileuploadform" enctype="multipart/form-data">
                         <div class="form-group">
                             <input type="file" name="fileToUpload" id="fileToUpload">
                         </div>
                        <button id="upload" type="submit" class="btn btn-default" name="submit">Upload</button>
                        </form>
                    </div> 
                    <div class="col-md-offset-1 col-md-6 col-sm-12">
                        <form onsubmit = "return(validate());" method="POST" action="changepass.php">
                          <div class="form-group">
                            <label for="name" >Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" onblur="checkName()" value="<?php echo $_SESSION['name'] ?>" required placeholder="Full Name">
                            <span id="spanname"></span>
                          </div>
                          <div class="form-group">
                            <label for="email" >Email</label>
                            <input type="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" id="email" name="email" onblur="checkEmail()" required placeholder="Email">
                            <span id="spanemail"></span>
                          </div>
                            <div class="form-group">
                            <label for="password1" >Previous Password</label>
                            <input type="password" class="form-control" id="password" name="pwd" required placeholder="Password">
                            <span id="spanpassword1"></span>
                          </div>
                          <div class="form-group">
                            <label for="password1" >Change Password</label>
                            <input type="password" class="form-control" id="password1" onblur="checkPass()" name="pwdchange" required placeholder="Password">
                            <span id="spanpassword1"></span>
                          </div>   
                          <div class="form-group">
                            <label for="password2" >Confirm Password</label>
                            <input type="password" class="form-control" id="password2" onblur="matchPass()" required placeholder=" Confirm Password">
                            <span id="spanpassword2"></span>
                          </div>  
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
				</div>
			</div>
		</header>
	</div>
    
    <!-- Button trigger modal -->
    
	<a href="#" class="goto-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></a>
</body>
</html>