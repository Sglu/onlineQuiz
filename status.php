<html>
<head>
	<style type="text/css"> table {
    border-collapse: collapse;
    width : 70%;
    margin-left : 20%;
}

 th, td {
    border-bottom : 2px solid #ddd ; 
    padding: 8px;
    text-align: left;
    font-weight : bold;
}
</style></head>
	<body onload="ti()">
		<div id = "rank">
		</div>
		<script type="text/javascript">
			
			function ti()
			{

				 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        	  
        	  

            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("rank").innerHTML = this.responseText;
            }
            
            
            
            
           
        };
        xmlhttp.open("GET", "ranker.php",true)
        xmlhttp.send();

        var t = setTimeout("ti()",3000);
			}
		</script>