<?php
	require 'connect.inc.php';
	require 'core.inc.php';
	  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz </h1>
		
        <?php
          
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5=="D") { $totalCorrect++; }
            $name= $_SESSION['name'];
			$uid=$_SESSION['uid'];
			$date=date('l jS \of F Y h:i:s A');
			
    
       
			
				
			if($connection->connect_error){		
			die("Unable to connect".$connection->connect_error);}
				$sql = "INSERT INTO questions(uid,name,date,totalCorrect)VALUES ('$uid','$name','$date','$totalCorrect')";
					
	if ($connection->query($sql) === TRUE) {
				echo "New record created successfully";
				
				} 
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
}

		?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>