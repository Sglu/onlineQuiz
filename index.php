<?php
include "base.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

  if(!empty($_POST["uname"])&&!empty($_POST["psw"]))
  {
    $username1 = $_POST['uname'];
    $password1 = $_POST["psw"];


echo'<script></script>';
    $result = mysqli_query($conn,"SELECT * FROM user WHERE name ='".$_POST["uname"]."';");
                

     //echo'<script>alert("hhssh")</script>';
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    if($row['name']==$username1&&$row['password']==$password1)
      {
        
        $_SESSION["user"]=$username1;
        $_SESSION["level"]=$row['level'];
        $_SESSION["time"] = $row['time'];
        

        echo"<script>
    document.onmouseup = false;
    window.open('start.php', '_blank', 'fullscreen=yes,toolbar=no,menubar=0,scrollbars=yes,resizable=no');
    </script>";
      }else
      {
        echo '<script>alert("NOT A REGISTERED USER")</script>';
      }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>I-QUIZ</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		<style>
		.top-content{
			padding:10px;
		}
		.rulestodisplay
		{
			position:fixed;
			z-index: 10000;
			width:50%;
			height: 90%;
			top:10%;
			left: 25%;
			background-image: url("img/rul.png");
			background-repeat: repeat;
			//background-attachment: scroll;
            //background-color:rgba(255, 175, 128,1);
			overflow: auto;
            padding: 0;
            margin: 0;
            display: none;
            box-shadow: 5% 10% 10% 5%;
            transition: width 25s;
            border-radius: 25% 0% 25% 0;

		}
		.rulestodisplay>h1
		{
			position: relative;
			top:10%;
			color: black;
			font-weight: bold;
			font-style: italic;
			text-decoration: underline;
			left:3%;

		}
       .rulestodisplay>ul
        {
            list-style-type: square;
            color:black;
            position: relative;
            top:15%;
            left:-5%;
            font-size: 160%;
            list-style: none;
            font-family: "rulei"

        }
        em{
            color: red;
        }
        @fontface{
            font-family: "rulei";
            src:url("font/pp.ttf");
        }
        #rule
        {
            position: absolute;
            top:80%;
            left:10%;
            padding: 1% 1% 1% 1%;
            border-radius: 10% 10% 10% 10%;
            background-color: #399599;
            color:white;

        }
        #serv
        {
            position: absolute;
            top:80%;
            left:80%;
            padding: 1% 1% 1% 1%;
            border-radius: 10% 10% 10% 10%;
            background-color: #399599;
            color:white;
            width:10%;
            overflow: hidden;

        }
        @font-face
        {
            font-family: "hj";
            src:url("font/tt.ttf");
        }
		</style>

    </head>

    <body >

        <!-- Content -->
        <div class="top-content">
		<img src="img/mmmut logo.png" style="height:100px;width:100px" align="left" >
       <!img src="img/icell1.png" style="height:150px;width:250px" align="right" >
	    <img src="img/innowizion1.png" style="height:100px;width:160px" align="right" >  
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                                                                 
						  
							
                            <div class="description">
                            	<p>
	                               <h1 style="position: fixed;
                                   top:1%;left:40%;font-family: 'hj';
                                   font-size: 400%;
                                    text-shadow: 3px 3px #000000;"
                                         ><strong>I-QUIZ<br><br><br>Round 2</strong></h1>
                            	</p>
                            </div>
                            <br>
                            <div style="background-color: rgba(0,0,0,0);
                                           
                                           height:20%;
                                           border-radius: 25% 25%;">
                                       </div>
                            <div class="top-big-link">
                            	<a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-login">Login</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
        
        <!-- MODAL -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-login-label">Login to Quiz</h3>
        				<p>Enter your username and password to log on:</p>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="login-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-username">Username</label>
	                        	<input type="text" name="uname" placeholder="Username..." class="form-username form-control" id="form-username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-password">Password</label>
	                        	<input type="password" name="psw" placeholder="Password..." class="form-password form-control" id="form-password">
	                        </div>
	                        <button type="submit" class="btn">Sign in!</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>
        

      <div id="rulebook" class="rulestodisplay">
           <h1>
           	Rules</h1>
           	<ul>
           		<li>This quiz consists of 25 questions of logical, reasoning and puzzles.</li>
           		<li> Questions from <i>1 to 5</i> are of <b>3 marks</b> and carry no negative marking.</li>
                <li>Questions from <i>6 to 20</i> are of <b>4 marks</b>  <em> and 1 mark will be deducted for wrong answer. </em></li>
                <li>Questions from <i>21 to 25</i> are of<b> 8 marks</b> and<em> 2 marks will be deducted for wrong answer.</em></li>
                <li><em style="color:blue;"><i>Hints</i></em> are provided from  question 21 to 25 with <em>
                 no extra marks deduction.</em></li></ul>
                 <br>
                 <br>
                 <br>
                 <h2 onclick="document.getElementById('rulebook').style.display='none'">Click here to close </h2>
                 


      </div>
      <div id="sever" class="rulestodisplay">
        <h1><center>Server Restrictions</center></h1>
            <ul >  <li> Please enable your browser pop up window.</li> 
                <li>Please close the browser and reopen it if the page is hanging.</li>
                <li>The quiz pages will <em> close automatically </em> if it gets disconnected/offline with the <i>server.</i></li>
                    <li> <em>Do not refresh the page </em> as it makes you to move to next question automatically.</li>
                    <li>User can <em>close</em> the page <em>along with the browser,</em> if he/she encounters any problem. Then try to login again.</li>
                    
                    <li> Please contact the coordinators if you have any issue.</li></ul>
                    <br>
                    <br>
                    <br>

                    <h2 onclick="document.getElementById('sever').style.display='none'">Click to close</h2>

      </div>
      <button id="rule" onclick="document.getElementById('rulebook').style.display='block'">Game Rules </button>
      <button id="serv" onclick="document.getElementById('sever').style.display='block'">Guidelines </button>
     <script>
// Get the modal
var modal = document.getElementById('rulebook');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>