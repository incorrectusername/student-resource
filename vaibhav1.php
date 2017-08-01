<?php
//Include the code
require_once 'phplot.php';

//Define the object
$plot = new PHPlot();

//Define some data
$example_data = array(
     array('test 1',1),
     array('test 2',0),
     array('test 3',3),
     array('test 4',5),
     array('test 5',4),
     array('test 6',5)
);
$plot->SetDataValues($example_data);

//Turn off X axis ticks and labels because they get in the way:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

//Draw it
$plot->DrawGraph();
?>