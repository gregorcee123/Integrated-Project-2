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

            <div id="scoreSheet">
                
                <h3>- Category General</h3><br />
               <?php
                    $sql6 = "SELECT U.username, C.CategoryName, US.score FROM users U INNER JOIN userscore US ON U.id = US.UserID INNER JOIN categories C ON US.CategoryID = C.CategoryID WHERE US.CategoryID = 1 GROUP BY US.scoreID";

  $result = $conn->query($sql6);
    echo "<table border='1'><tr><th>Username</th><th>Category</th><th>Score</th></tr>";

while($row    = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['CategoryName'] . "</td>";
  echo "<td>" . $row['score'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
?>
                <br /><br />
                 <h3>- Category Sport</h3><br />
               <?php
                    $sql7 = "SELECT U.username, C.CategoryName, US.score FROM users U INNER JOIN userscore US ON U.id = US.UserID INNER JOIN categories C ON US.CategoryID = C.CategoryID WHERE US.CategoryID = 2 GROUP BY US.scoreID";

  $result = $conn->query($sql7);
    echo "<table border='1'><tr><th>Username</th><th>Category</th><th>Score</th></tr>";

while($row    = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['CategoryName'] . "</td>";
  echo "<td>" . $row['score'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
?>
                <br /><br />
                 <h3>- Category Music</h3><br />
               <?php
                    $sql8 = "SELECT U.username, C.CategoryName, US.score FROM users U INNER JOIN userscore US ON U.id = US.UserID INNER JOIN categories C ON US.CategoryID = C.CategoryID WHERE US.CategoryID = 3 GROUP BY US.scoreID";

  $result = $conn->query($sql8);
    echo "<table border='1'><tr><th>Username</th><th>Category</th><th>Score</th></tr>";

while($row    = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['CategoryName'] . "</td>";
  echo "<td>" . $row['score'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
?>
                <br /><br />
                 <h3>- Category History</h3><br />
               <?php
                    $sql9 = "SELECT U.username, C.CategoryName, US.score FROM users U INNER JOIN userscore US ON U.id = US.UserID INNER JOIN categories C ON US.CategoryID = C.CategoryID WHERE US.CategoryID = 4 GROUP BY US.scoreID";

  $result = $conn->query($sql9);
    echo "<table border='1'><tr><th>Username</th><th>Category</th><th>Score</th></tr>";

while($row    = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['CategoryName'] . "</td>";
  echo "<td>" . $row['score'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
?>
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