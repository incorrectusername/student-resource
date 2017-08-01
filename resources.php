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
  <link rel="stylesheet" type="text/css" href="resources.css" media="screen">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<script>
		(function ($) {
  $(document).ready(function(){

     $(function () {
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
		
    });
      
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
			<li><a href="#x-ssc">x-ssc</a></li>
			<li><a href="#xi-science">xi-science</a></li>
			<li><a href="#xii-science">xii-science</a></li>
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
					<div class="col-lg-12">
						<img class="img-responsive" src="http://www.calibrantclasses.in/images/blog/small-batch-size.png" alt="">
						<div class="intro-text">
							<span class="name">Student Resources </span>
							<hr>
							<span class="skills">For students , By professionals</span>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
    
    <!-- Button trigger modal -->
    
    
	<section id="x-ssc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">X<sup>th</sup>-SSC</h2>
                    <h3 class="section-subheading text-muted">For all the students aiming for great marks in S.S.C.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
					<span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-list-alt  fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-x.php#section-1">
						<h4 class="service-heading">Syllabus</h4>
					</a>
                    <p class="text-muted">Don't know what you are gonna study ? Click here to know more.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-question-circle fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-x.php#section-2">
					<h4 class="service-heading">Important Topics</h4>
                    </a>
                    <p class="text-muted">Stuff that helps in last minute revision.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-x.php#section-3">
					<h4 class="service-heading">Quiz</h4>
                    </a>
                    <p class="text-muted">Want to know how much you have studied ? Take our quiz.</p>
                </div>
            </div>
			<div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-pie-chart fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-x.php#section-4">
					<h4 class="service-heading">Statistics</h4>
                    </a>
                    <p class="text-muted">Get real time data and in-depth analysis about your progress.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-x.php#section-5">
					<h4 class="service-heading">Past Papers with solutions</h4>
                    </a>
                    <p class="text-muted">Get past papers and its solutions.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-x.php#section-6">
					<h4 class="service-heading">FAQs</h4>
                    </a>
                    <p class="text-muted">Have some queries . Click here to know more.</p>
                </div>
            </div>
			<div class="row text-center button-class">
				<div class="col-xs-8 col-md-8 col-lg-8 col-lg-offset-2 col-xs-offset-2 col-ms-offset-2 text-center">
					<a type="button" href="resources-x.php" class="btn btn-lg btn-primary learnmorebutton">Learn More</a>
				</div>
			</div>
        
		</div>
    </section>
	
	<section id="xi-science">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-center">XI<sup>th</sup>-science</h2>
                    <h3 class="section-subheading text-muted">For the students, who want to strengthen basics for XII <sup>th</sup> </h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-list-alt  fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xi.php#section-1">
					<h4 class="service-heading">Syllabus</h4>
					</a>
                    <p class="text-muted">Don't know what you are gonna study ? Click here to know more.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-question-circle fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xi.php#section-2">
					<h4 class="service-heading">Important Topics</h4>
                    </a>
                    <p class="text-muted">Stuff that helps in last minute revision.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xi.php#section-3">
					<h4 class="service-heading"> Quiz</h4>
                    </a>
                    <p class="text-muted">Want to know how much you have studied ? Take our quiz.</p>
                </div>
            </div>
			<div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-pie-chart fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xi.php#section-4">
					<h4 class="service-heading">Statistics</h4>
                    </a>
                    <p class="text-muted">Get real time data and in-depth analysis about your progress.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xi.php#section-5">
					<h4 class="service-heading">Past Papers with solutions</h4>
                    </a>
                    <p class="text-muted">Get past papers and its solutions.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xi.php#section-6">
					<h4 class="service-heading">FAQs</h4>
                    </a>
                    <p class="text-muted">Have some queries . Click here to know more.</p>
                </div>
            </div>
			<div class="row text-center button-class">
				<div class="col-xs-8 col-md-8 col-lg-8 col-lg-offset-2 col-xs-offset-2 col-ms-offset-2 text-center">
					<a type="button" href="resources-xi.php" class="btn btn-lg btn-primary learnmorebutton">Learn More</a>
				</div>
			</div>
        
		</div>
    </section>
	
	<section id="xii-science">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-center">XII<sup>th</sup>-Science</h2>
                    <h3 class="section-subheading text-muted">For all the students aiming for great marks in H. S. C.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-list-alt  fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xii.php#section-1">
					<h4 class="service-heading">Syllabus</h4>
					</a>
                    <p class="text-muted">Don't know what you are gonna study ? Click here to know more.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-question-circle fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xii.php#section-2">
					<h4 class="service-heading">Important Topics</h4>
                    </a>
                    <p class="text-muted">Stuff that helps in last minute revision.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xii.php#section-3">
					<h4 class="service-heading"> Quiz</h4>
                    </a>
                    <p class="text-muted">Want to know how much you have studied ? Take our quiz.</p>
                </div>
            </div>
			<div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-pie-chart fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xii.php#section-4">
					<h4 class="service-heading">Statistics</h4>
                    </a>
                    <p class="text-muted">Get real time data and in-depth analysis about your progress.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xii.php#section-5">
					<h4 class="service-heading">Past Papers with solutions</h4>
                    </a>
                    <p class="text-muted">Get past papers and its solutions.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <a href="resources-xii.php#section-6">
					<h4 class="service-heading">FAQs</h4>
                    </a>
                    <p class="text-muted">Have some queries . Click here to know more.</p>
                </div>
            </div>
			<div class="row text-center button-class">
				<div class="col-xs-8 col-md-8 col-lg-8 col-lg-offset-2 col-xs-offset-2 col-ms-offset-2 text-center">
				<a type="button" href="resources-xii.php" class="btn btn-lg btn-primary learnmorebutton">Learn More</a>
				</div>
			</div>
        
		</div>
    </section>
	<a href="#" class="goto-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></a>
	<div  style="background:rgb(102,102,102);padding:30px;color:white;">
<footer class="text-center">&copy2016</footer>
</div>	
</body>
</html>