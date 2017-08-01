<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    
    $mysql_db = "education";
    //create connection
    $connection = new mysqli($servername , $username , $password );

    //check connection
     if(!$connection || !mysqli_select_db($connection,$mysql_db)){
         die("Conection Failed :".$connection->connect_error);
     }
?>