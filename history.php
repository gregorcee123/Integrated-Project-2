<?php
// Initialize the session
session_start();
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <title>Quiz App</title>
		<?php if ($_SESSION["currentPage"] != Basename($_SERVER['PHP_SELF'])) {
			$_SESSION["questionNo"] = 1;
			$_SESSION["Score"] = 0;
			$_SESSION["EndScore"] = 0;
		} ?>
		<?php $_SESSION["currentPage"] = Basename($_SERVER['PHP_SELF']); ?>
		<?php include 'quiz.php' ?>
        
         <?php 
        
        // check if user is logged in
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    $username =$_SESSION['username'];
    
    if(isset($_SESSION["questionNo"]) && ($_SESSION["questionNo"]) > 10){
    
          $UserFinalscore = $_SESSION["Score"];
          

            $sqlQuery2 = "SELECT id FROM users WHERE username = '".$username."'";
 
    $result3 = $conn->query($sqlQuery2);
    while($row3 = $result3->fetch_assoc()) {
       $_SESSION["userID"] = $row3["id"];
        $userID = $_SESSION["userID"]; 
    }
        
        echo $userID;
            
        $sql5 = "INSERT INTO userscore (UserID, CategoryID, Score)
VALUES (".$userID.", 4, ".$UserFinalscore. ")";
                $result = $conn->query($sql5);

    
    }
}
    
        
        ?>
        
		<script>
			function getQuestionDetails(){
				document.getElementById("innerQuestion").innerHTML = "<?php echo $_SESSION['Question'];?>";
				document.getElementById("innerA1").innerHTML = "<?php echo $_SESSION['Answer 1'];?>";
				document.getElementById("innerA2").innerHTML = "<?php echo $_SESSION['Answer 2'];?>";
				document.getElementById("innerA3").innerHTML = "<?php echo $_SESSION['Answer 3'];?>";
				document.getElementById("innerA4").innerHTML = "<?php echo $_SESSION['Answer 4'];?>";
				
			}
			window.onload = getQuestionDetails;
		</script>
    </head>
    <body bgcolor="#fff711">
        
        <header class="sport" bgcolor="#fff711">
            <h1><i class="fa fa-bolt fa-sm"></i>   Quiz Up <span id="history">History</span></h1>
            
            <div id="navigation">
                
                <ul class="otherNav">
                    <li><a href="#" class="home on"><i class="fa fa-fw fa-home fa-lg"></i></a></li>
                    <li><a href="categories.php" class="two">Categories</a></li>
                                        <li><a href="scoresheet.html" class="four">Scoresheet</a></li>
                    <?php 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ 
echo'<li><a href="login.php" class="three">Login</a></li>';
     
} else
    
{ if ($_SESSION["admin"] == 1){ echo'<li><a href="admin.php">Admin</a></li>';}  $username =$_SESSION['username']; echo'<li><span style="font-family: sans-serif;
    font-style: normal;
    font-size: 16px;
    font-weight: 100;color:black;padding-right:0px;">'.$username.' </span><a href="logout.php" class="three" style="padding-left:2px;font-size:15px;">- Log Out</a></li>';
                    
                    }
                    ?>
                    
                </ul>
        </header>
        
        <div id="quizMain">
            <div id="inner">
            
                <ul class="category">

                    <li id="general" ><a href="index.php"><i class="fa fa-circle fa-xs"></i></a></li>
                    <li id ="sports"><a  href="sport.php"><i class="fa fa-circle fa-xs"></i></a></li>
                    <li id ="music"><a href="music.php"><i class="fa fa-circle"></i></a></li>
                    <li id="history"><a class="on" href="history.php"><i class="fa fa-circle"></i></a></li>
                    <li style="padding-left:5px">History</li>
                </ul>
                
<form action="checkAnswer.php" method="post">                
                <div id="question"><p><span>Q<?php
echo $_SESSION["questionNo"] . ':' . '&nbsp;';
?></span><p id="innerQuestion"></p></p>
</div>
                
                <div id="answers">
                    <div id="a1"><p><input type="radio" name="gender" value="1"><span style="margin-left:10px;margin-right:5px;">A    </span><span style="font-weight: normal;" id="innerA1"></span></p></div>
                    <div id="a1"><p><input type="radio" name="gender" value="2"><span style="margin-left:10px;margin-right:5px;">B    </span><span style="font-weight: normal;" id="innerA2"></span></p></div>
                    <div id="a3"><p><input type="radio" name="gender" value="3"><span style="margin-left:10px;margin-right:5px;">C    </span ><span style="font-weight: normal;" id="innerA3"></span></p></div>
                    <div id="a4"><p><input type="radio" name="gender" value="4"><span style="margin-left:10px;margin-right:5px;">D    </span><span style="font-weight: normal;" id="innerA4"></span></p></div>
                </div>
                
                
                <div id="footer"><div id="questionOutOf"><p><span style="font-weight:600">Q<?php
echo $_SESSION["questionNo"];
?></span>/10</p></div><div id="footerNext"><p>Next</p><button type="submit"><i class="fa fa-arrow-right "></i>

</button>
                    </div>

</div>
</form>
            </div>
                                    <div id="innerScore">
                Congrats! you scored  <?php
echo $_SESSION["Score"];
?>

        <p><a href="restart.php" >Try again </a> or choose another category</a>


                                <ul class="category">

                    <li id="general" ><a  href="index.php"><i class="fa fa-circle fa-xs"></i></a></li>
                    <li id ="sports"><a  href="sport.php"><i class="fa fa-circle fa-xs"></i></a></li>
                    <li id ="music"><a href="music.php"><i class="fa fa-circle"></i></a></li>
                    <li id="history"><a class="on" href="history.php"><i class="fa fa-circle"></i></a></li>
                    <li style="padding-left:5px">History</li>
                </ul>
            </div>
            
        </div>
        
                                    <script>
            
            var question = <?php echo $_SESSION["questionNo"] ?>;
            if (question >10) {
                document.getElementById("inner").style.display = "none";                   document.getElementById("innerScore").style.display = "block";

            }
                </script>
    
     <?php 
        
        // check if user is logged in
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    $username =$_SESSION['username'];
    
    if(isset($_SESSION["questionNo"]) && ($_SESSION["questionNo"]) > 10){
    
          $UserFinalscore = $_SESSION["Score"];
          

            $sqlQuery2 = "SELECT id FROM users WHERE username = '".$username."'";
 
    $result3 = $conn->query($sqlQuery2);
    while($row3 = $result3->fetch_assoc()) {
       $_SESSION["userID"] = $row3["id"];
        $userID = $_SESSION["userID"]; 
    }
        
        echo $userID;
            
        $sql5 = "INSERT INTO userscore (UserID, CategoryID, Score)
VALUES (".$userID.", 4, ".$UserFinalscore. ")";
                $result = $conn->query($sql5);

        $_SESSION["questionNo"] = 1;
    
    }
}
    
        
        ?>
    </body>
</html>