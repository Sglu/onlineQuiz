<?php 
include "base.php";

?>

<?php

if($_SESSION['level']>25)
	{	$t = 100;}
else
{
$t = $_SESSION['time'];
}

if(!isset($_SESSION['user']))
{
	die("ACCESS DENIED");
}
else
{
	
	

      if($_SERVER["REQUEST_METHOD"]=="POST")
      {

      	if(!empty($_POST['ans']))
      	{

      		   $result = mysqli_query($conn,"SELECT * FROM que WHERE questionno ='".$_SESSION["level"]."';");
      		   if($result and mysqli_num_rows($result)>=1)
	{
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
		
		   $newmarks=0;
			$mins = 0;
			$_SESSION['level']= $_SESSION['level']+1;
			$result2=mysqli_query($conn,"SELECT * from user where name='".$_SESSION['user']."';");
			$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC); 			
			
			if((int)$row['ans']==(int)$_POST['ans'])
			{
			$newmarks=(int)($row2["marks"])+(int)$row['marks'];
			
			}
			else if((int)$_POST['ans']==7)
			{

                    $newmarks = (int)$row2["marks"];
			}else
			{
				$newmarks=(int)$row2["marks"]-(int)$row['minus'];
				$mins = (int)$row2["wans"]+1; 
				
               
				
							}
                              


		if(mysqli_query($conn,"UPDATE user set level=".$_SESSION['level']." , marks=".$newmarks." , time=".$row['time']." , wans=".$mins."  where name='".$_SESSION['user']."';"))
			{
				echo"<script>alert('aaaa');</script>";
			}
			else
			{
				echo "UPDATE user set level=".$_SESSION['level']." , marks=".$newmarks." , time=".$row['time']." where name='".$_SESSION['user']."';";
				echo mysqli_error($conn);
			}
			$result=mysqli_query($conn,"SELECT * from que where questionno='".$_SESSION['level']."';"); 
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
			
			
			$qno=$_SESSION['level'];
			$t = $row['time'];

                  
			

      	}
      }


}}


echo "<html>";
echo "<head>
          <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=' '>
    <meta name='author' content=''>
	
	<title>I-QUIZ</title>

   
    <link href='css/bootstrap.min.css' rel='stylesheet'>
     <link rel='stylesheet' type='text/css' href='start.css'> </head> ";
              echo "<body onload = 'times(".$t.")' id='page-top' data-spy='scroll' data-target='.navbar-fixed-top' oncontextmenu='return false'>";

 

 
 ?>
 
 
 <div class="container-fluid" style="background-color: rgba(40,41,43,.6); opacity: 1;">
 	<center><p id = "qno" class="navbar-brand"> </p></center></div>
 	<div class="container-fluid text-center"> 
 	 <div class="row content">
    <div class="col-sm-2 sidenav">
   <div id = "timer">
   <p id = 'ra'></p>
<p id  = 'rb' style="color:red;"></p></div>
<div id = "h" style="display: none;"><p id="hint"  style="padding: 10% 20% 10% 20%; color:red;">
<button id ="bh" onclick = "fhint()" style="background-color: blue; color: white; margin:10% 10% 10% 10%; padding: 10% 10% 10% 10%; border-radius: 10% ;"> HINT </button> </p></div>
</div>

 	

 	<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id = "myform">
      <div class="col-sm-8 text-left"> 
      <div id ="questionimg">
 		<img id = "imgq" src = "img/4.png " alt = "Question " style = "width :100% ; height : 130%;">
</div></div>
 		<br>
 		<br>
 		<div class="col-sm-2 sidenav">
 		<div id = "bar">
 			
 		<div class = "well"><input type = "radio" name = "ans" value = 7 checked>Skip</div>
 		<div class = "well"><input type = "radio" name = "ans"  value = 1>OPTION A</div>
 		<div class = "well"><input type = "radio" name = "ans"  value = 2>OPTION B</div>
 		<div class = "well"><input type = "radio" name = "ans"  value = 3>OPTION C</div>
 		<div class = "well"><input type = "radio" name = "ans"  value = 4>OPTION D</div></div>
 		<div class = "well"><input type = "submit" value = "Submit1"></div></div>
 	</form>
 	<br>
 	

         
 	<?php

 	$result=mysqli_query($conn,"SELECT * from que where questionno ='".$_SESSION['level']."';"); 
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 

			if($_SESSION['level']>25)
			{
				
				echo "<script>document.getElementById('qno').innerHTML = 'TEST IS OVER ' ;</script>";
			echo"<script> document.getElementById('imgq').src='img/home.png'</script>";
			echo "<script> document.getElementById('bar').style.display = 'none' </script>";


			}
			else if($_SESSION['level']>20 )
			{
				
				echo "<script>document.getElementById('qno').innerHTML = 'Question No ".$_SESSION['level']."' ;</script>";
			echo"<script> document.getElementById('imgq').src='img/".$row["name"]."'</script>";
			echo "<script> document.getElementById('h').style.display = 'block' </script>";


			}

     else{
 	echo "<script>document.getElementById('qno').innerHTML = 'Question No ".$_SESSION['level']."' ;</script>";
			echo"<script> document.getElementById('imgq').src='img/".$row["name"]."'</script>";}

			?>

			<script type="text/javascript">  function times(s)
			{
				var y = document.getElementById('ra');
                h = document.getElementById('h');
                h.style.display = 'none';
				

				if(s<1)
				{
					clearTimeout(t);
					document.forms['myform'].submit();


				}
				else
				{
					var l = '<?php echo $_SESSION["level"]; ?>';
					if(s<85 && l>20)
						{h.style.display = 'block';}
                 
                   //-------------------------
                 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        	  
        	  if(this.readyState == 4 && this.status < 200)
        	  {document.getElementById("rb").innerHTML = this.status+" "+this.statusText;


             
             window.close(this);
             
                  }

            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("rb").innerHTML = this.responseText;
            }
            
            
            
            
           
        };
        xmlhttp.open("GET", "ti.php?q="+s, true);
        xmlhttp.send();

        //---------------------------
                
                 y.innerHTML = s;
                 s--;
                
				var t = setTimeout('times('+s+')',1000);
			}
}

   function fhint()
   {
  document.getElementById('bh').style.display = "none";
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        	  
        	 
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("hint").innerHTML = this.responseText;
            }
            
            
            
            
           
        };
        xmlhttp.open("GET", "hint.php", true);
        xmlhttp.send();

   }
				</script>

</div>
</form>
</div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer></body>
 </html>








