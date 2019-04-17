<?php
	session_start();

    
			$_SESSION["questionNo"]= 1;
		$_SESSION["EndScore"] = $_SESSION["Score"];
		$_SESSION["Score"] = 0;
header("Location: index.php");
	
?>