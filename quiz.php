<?php

	//Connection Details
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fdmquiz";
	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	
	if (!isset($_SESSION["questionNo"])) {
		$_SESSION["questionNo"]= 1;
	}
	
	if (!isset($_SESSION["Score"])) {
		$_SESSION["Score"]= 0;
	}

    $category = 0;
	
	$page = $_SESSION["currentPage"];
	if ($page === 'index.php') {
		$category = 1;
	}
	if ($page === 'sport.php') {
		$category = 2;
	}
	if ($page === 'music.php') {
		$category = 3;
	}
	if ($page === 'history.php') {
		$category = 4;
	}

    $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
	
	$currentQ = $_SESSION["questionNo"] + 10 * ($category - 1);
	$sql = "SELECT `categoryID`, `categoryName`, questions.`QuestionID`, `Question`, `Answer 1`, `Answer 2`, `Answer 3`, `Answer 4`, `Correct Answer` FROM questions INNER JOIN categories ON questions.QuestionID WHERE questions.QuestionID = categories.QuestionID AND categories.CategoryID = '" . $category . "' AND `questions`.`QuestionID` = '".$currentQ."'";
	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$_SESSION["Question"] = $row["Question"];
			$_SESSION["Answer 1"] = $row["Answer 1"];
			$_SESSION["Answer 2"] = $row["Answer 2"];
			$_SESSION["Answer 3"] = $row["Answer 3"];
			$_SESSION["Answer 4"] = $row["Answer 4"];
			$_SESSION["Correct Answer"]= $row["Correct Answer"];
		} 
		};
// checks if the user is an admin and sets session admin to the result

    $sqlQuery1 = "SELECT admin FROM users WHERE username = '".$username."'";
 
    $result2 = $conn->query($sqlQuery1);
    while($row2 = $result2->fetch_assoc()) {
       $_SESSION["admin"] = $row2["admin"];
    }

	
?>