<?php
	
	require 'core.inc.php';
   
   if(session_destroy()) {
      header("Location:" .$http_referer);
   }
?>