<?php
	session_start();
	
	$page = $_SESSION["currentPage"];
	$answer = $_POST["gender"];
	
	
	if (!isset($answer) || trim($answer) == '')
	{
		header('Location: ' . $page . '');
	}
	else
	{
		
	if ($answer == $_SESSION["Correct Answer"]) {
		$_SESSION["Score"]++;
	}
	header('Location: ' . $page . '');
	$_SESSION["questionNo"]++;
	
	if ($_SESSION["questionNo"] >13) {
		$_SESSION["questionNo"]= 1;
		$_SESSION["EndScore"] = $_SESSION["Score"];
		$_SESSION["Score"] = 0;
	}
	}
?>