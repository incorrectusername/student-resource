<?php
require 'connect.inc.php';
require 'core.inc.php';
//Include the code
require_once 'phplot.php';

//Define the object
$plot = new PHPlot();
$uid = $_SESSION['uid'];
$sql = "Select totalCorrect from questions where `uid`='$uid'";
$result = $connection->query($sql);
			$example_data = array();
			$i =1;
				if($result->num_rows>=1){
					while($row = $result->fetch_assoc()){
						array_push($example_data, array('test '.$i++ , $row['totalCorrect']));
					}
				}else{
					echo 'You have not taken any Quiz';
				}
//Define some data
/*$example_data = array(
     array('test 1',3),
     array('test 2',5),
     array('test 3',2),
     array('test 4',3),
     array('test 5',3),
     array('test 6',2)
);*/
$plot->SetDataValues($example_data);

//Turn off X axis ticks and labels because they get in the way:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

//Draw it
$plot->DrawGraph();

?>

<!doctype>
<html>
<body>
<a href="<?php echo $http_referer ?>" class="btn btn-default">Return</a>
</body>
</html>