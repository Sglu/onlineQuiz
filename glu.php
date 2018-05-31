<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{

  if(!empty($_POST["uname"])&&!empty($_POST["psw"]))
  {
    $username1 = $_POST['uname'];
    $password1 = $_POST['psw'];

    if($username1 == "glu" && $password1 == "glu")
    {
          echo "hjlkl";
    	$_SESSION['admin1'] = "glu";
    	header("Location: status.php");
    	
    }else
    {
    	echo"<script> alert('cgcg') </script>";
    }
}}
?>

<html>
<head>
<style>
body
{
	
	background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
div{position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
    form
    {
    	margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
    }
    input
    {
    	font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
    }
</style>

</head>
<body>
	<div>
		<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
			<label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br>
        
      <button type="submit">Login</button>
  </form>
</div>
</body>
</html>