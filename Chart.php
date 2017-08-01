<html>
<head>
<title>Add New Record in MySQL Database</title>
</head>
<body>
<?php
if(isset($_POST['add']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $student_id = addslashes ($_POST['student_id']);
   $student_name = addslashes ($_POST['student_name']);
}
else
{
   $student_id = $_POST['student_id'];
   $tutorial_author = $_POST['student_name'];
}
$submission_date = $_POST['submission_date'];

$sql = "INSERT INTO tutorial_tb2 ".
       "(student_id,student_name, submission_date) ".
       "VALUES ".
       "('$student_id','$student_name','$submission_date')";
mysql_select_db('project');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

mysql_close($conn);
?>
<form method="post" action="vaibhav.php">
<input name="add" type="submit" id="add" value="Know your stats">
</form>
<?php
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="600" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="250">Student id</td>
<td>
<input name="student_id" type="text" id="student_id">
</td>
</tr>
<tr>
<td width="250">Student name</td>
<td>
<input name="student_name" type="text" id="student_name">
</td>
</tr>
<tr>
<td width="250">Submission Date [ yyyy-mm-dd ]</td>
<td>
<input name="submission_date" type="text" id="submission_date">
</td>
</tr>
<tr>
<td width="250"> </td>
<td> </td>
</tr>
<tr>
<td width="250"> </td>
<td>
<input name="add" type="submit" id="add" value="Submit">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>