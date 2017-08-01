<?php
	require 'core.inc.php';
	require 'connect.inc.php';
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
  <link rel="stylesheet" type="text/css" href="resource-content.css" media="screen">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
	
	<script>
		(function ($) {
			$(document).ready(function(){

				$('.navbar').css('background-color','#666666');
						
						$('.goto-top').fadeIn(400);
			  
			  $("#myScrollspy ul li a[href^='#']").on('click', function(e) {

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
	<style>
		body{
			padding-top : 100px;
		}
	</style>
</head>
<body  data-spy="scroll" data-target="#myScrollspy" data-offset="120">
	<nav class="navbar navbar-default navbar-fixed-top" >
	  <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
			<li ><a href="resources-x.php">x-ssc</a></li>
			<li class="active"><a href="resources-xi.php">xi-science</a></li>
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
	
	<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy" data-offset="0">
      <ul class="nav nav-pills nav-stacked" data-spy="affix">
		<div class="page-header text-center">
		xi-science
		</div><li><a href="#section-1">Syllabus</a></li>
        <li><a href="#section-2">Questions</a></li>
        <li><a href="#section-3">Quiz</a></li>
		<li><a href="#section-4"> Statistics</a></li>
		<li><a href="#section-5"> Past Papers with solutions</a></li>
		<li><a href="#section-6"> FAQs</a></li>
        
      </ul>
    </nav>
    <div class="col-sm-9">
      <section id="section-1">
			<div class="container">
				<h1 class="section-heading page-header">Syllabus</h1>
				<?php require_once('syllabus-xi.php'); ?>
			</div>
			
	  </section>
    <section id="section-2">
			<div class="container">
				<h1 class="section-heading page-header">Important Topics</h1>
				<?php
					if(isset($_SESSION['uid'])){
						if(!empty($_SESSION['uid'])){
							require 'faq.php';
						}else{
							echo 'Want this content ?<a type="button" class="btn btn-default" href="modal.php">Sign In</a>';
						}
					}else{
						echo 'Want this content ?<a type="button" class="btn btn-default" href="modal.php">Sign In</a>';
					}
				?>
			</div>
			
	  </section>
    <section id="section-3">
			<div class="container">
				<h1 class="section-heading page-header"> Quiz</h1>
				<?php
					if(isset($_SESSION['uid'])){
						if(!empty($_SESSION['uid'])){
							echo 'Do YOU want to take this quiz?<a href="index.php" class="btn btn-default" >Take Quiz</a>'; 
						}else{
							echo 'Want this content ?<a type="button" class="btn btn-default" href="modal.php">Sign In</a>';
						}
					}else{
						echo 'Want this content ?<a type="button" class="btn btn-default" href="modal.php">Sign In</a>';
					}
				?>
			</div>
			
	  </section>
    <section id="section-4">
			<div class="container">
				<h1 class="section-heading page-header">Statistics</h1>
				<?php
					if(isset($_SESSION['uid'])){
						if(!empty($_SESSION['uid'])){
							echo '<a href="vaibhav.php" class="btn-default btn" >Know your Statistics</a>';
						}else{
							echo 'Want this content ?<a type="button" class="btn btn-default" href="modal.php">Sign In</a>';
						}
					}else{
						echo 'Want this content ?<a type="button" class="btn btn-default" href="modal.php">Sign In</a>';
					}
				?>
			</div>
			
	  </section>
    <section id="section-5">
			<div class="container col-md-12">
				<h1 class="section-heading page-header">Past Papers with solutions</h1>
				<?php
					if(isset($_SESSION['uid'])){
						if(!empty($_SESSION['uid'])){
							require 'pastpaper.php';
						}else{
							echo 'Want this content ?<a type="button" class="btn btn-default" href="modal.php">Sign In</a>';
						}
					}else{
						echo 'Want this content ?<a type="button" class="btn btn-default" href="modal.php">Sign In</a>';
					}
				?>
			</div>
			
	  </section>
	  <section id="section-6">
			<div class="container col-md-12">
				<h1 class="section-heading page-header">FAQs</h1>
				<?php
					require 'faq.php';
				?>
			</div>
			
	  </section>
    </div>
  </div>
</div>
<a href="#" class="goto-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></a>
<div  style="background:rgb(102,102,102);padding:30px;color:white;">
<footer class="text-center">&copy2016</footer>
</div>
</body>
</html>