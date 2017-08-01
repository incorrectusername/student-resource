<?php
	require 'connect.inc.php';
	require 'core.inc.php';

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
<body>
	 
	 <table class="table table-hover">
		<thead>
		  <tr>
			<th>standard</th>
			<th>Download</th>
		  </tr>
		</thead>
		<tbody>
		<?php
			
			$sql = "select * from `syllabus`  where standard='eleven'";
			$result = $connection->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
						echo '<tr><td>'. $row["standard"].'</td><td><a class="btn btn-default" href="'.$row["path"].'" download>Download    </a></td></tr>';
						
					}
				}
		?>
		</tbody> 
		</table>
</body>

</html>