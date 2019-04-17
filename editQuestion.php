<?php
session_start();
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <title>Quiz App</title>
        
        <?php $_SESSION["currentPage"] = 'admin.php'; ?>
		<?php if ($_SESSION["currentPage"] != Basename($_SERVER['PHP_SELF'])) {
			$_SESSION["questionNo"] = 1;
			$_SESSION["Score"] = 0;
			$_SESSION["EndScore"] = 0;
		} ?>
		<?php $_SESSION["currentPage"] = Basename($_SERVER['PHP_SELF']); ?>
		<?php include 'quiz.php';
       // stops users acessing admin when they arent an admin 
    if($_SESSION["admin"] != 1){
    
        header("location: index.php");
    
    }

        // gets the inputs from the form for the new/edited question

if(isset($_POST['update'])) {

            $questionID = $_POST['id'];
            $question = $_POST['question'];
            $answer1 = $_POST['answer1'];
            $answer2 = $_POST['answer2'];
            $answer3 = $_POST['answer3'];
            $answer4 = $_POST['answer4'];
            $correctAnswer = $_POST['correctAnswer'];

          $sql = "Update questions Set Question='" . $question . "', `Answer 1`= '" . $answer1 . "', `Answer 2` = '" . $answer2 . "', `Answer 3` = '" . $answer3 . "', `Answer 4` ='" . $answer4 . "', `Correct Answer` = " . $correctAnswer . " where QuestionID= " . $questionID . "";
                $result = $conn->query($sql);
    
    header('Location: index.php');
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
    <body bgcolor="#f2f4f7">
		
		
        <header bgcolor="#f2f4f7">
            <h1><i class="fa fa-bolt fa-sm"></i>   Quiz Up</h1>
            
            <div id="navigation">
                
                <ul class="nav">
                    <li><a href="restart.php" class="home on"><i class="fa fa-fw fa-home fa-lg"></i></a></li>
                    <li><a href="categories.php" class="two">Categories</a></li>
                                        <li><a href="scoresheet.php" class="four">Scoresheet</a></li>
                    <?php 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ 
echo'<li><a href="login.php" class="three">Login</a></li>';
     
} else
    
{ if ($_SESSION["admin"] == 1){ echo'<li><a href="admin.php">Admin</a></li>';} $username =$_SESSION['username']; echo'<li><span style="font-family: sans-serif;
    font-style: normal;
    font-size: 16px;
    font-weight: 100;color:black;padding-right:0px;padding-left:10px;">'.$username.' </span><a href="logout.php" class="three" style="padding-left:2px;font-size:15px;">- Log Out</a></li>';
                    
                    }
                    ?>

                    
                </ul>
        </header>
		
        <div id="quizMain">
 
            <div id="innerAdmin">

                           <form method = "post" action = "<?php $_PHP_SELF ?>">

                  
                    <br />
                       Question ID(1-40):
                               <input name = "id" type = "text" 
                           id = "editQID"><br /><br />

Question: 
                      <input name = "question" type = "text" 
                           id = "editQ" size="50"><br /><br />
                 
                      
                    
                               Answer 1: 
                        <input name = "answer1" type = "text" 
                           id = "editAnswer"><br /><br />

                        Answer 2: 
                        <input name = "answer2" type = "text" 
                           id = "editAnswer"><br /><br />

                        Answer 3: 
                        <input name = "answer3" type = "text" 
                           id = "editAnswer"><br /><br />

                        Answer 4 
                        <input name = "answer4" type = "text" 
                           id = "editAnswer"><br/><br />

                        Correct Answer (number): 
                        <input name = "correctAnswer" type = "text" 
                           id = "editAnswer">
<br /><br />
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                  
                  </table>
               </form>
            </div>
            
        </div>
        
                <script>
            
            var question = <?php echo $_SESSION["questionNo"] ?>;
            if (question >10) {
                document.getElementById("inner").style.display = "none";                   document.getElementById("innerScore").style.display = "block";

            }
                </script>
    </body>
</html>