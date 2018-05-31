<?php
session_start();
if(!isset($_SESSION["admin1"]))
{
	die("access denied");
}else
{

$servername = "localhost:3306";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "iq2");

// Check connection
if (mysqli_connect_errno()) {
    die("error".mysqli_connect_error() . PHP_EOL);
}



 $result = mysqli_query($conn,"SELECT * FROM user ORDER BY marks DESC");


 if (mysqli_num_rows($result) > 0) {


    // output data of each row

    
    echo "<table> 
<tr>
<th> USER </th>
<th> MARKS </th>
<th> LEVEL </th>
<th> STATUS </th> </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr> <td> " . $row["name"]. "</td> <td> " . $row["marks"]."</td><td> ".$row["level"]."</td>";
        if(time()-$row["status"]>30)
        {
        	echo "<td style = 'color : red;'>offline </td> </tr>";
        }else
        {
        	echo "<td style = 'color : green;'>online</td> </tr>";
        }
    }
    echo "</table> ";
} else {
    echo "0 results";
}
}
?>