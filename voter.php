<!DOCTYPE html>
<html>
<body>

  <h1><b>RESULTS OF OPINION POLL</b></h1>


    
  
  
  <?php
  //include 'sqlcon.php';
  $cnt=3;
   

   $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db="votingpoll";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    $sql = "SELECT * FROM author ";
if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  
  // Free result set
  mysqli_free_result($result);
  }
  echo "<h4><b>TOTAL VOTES VOTED ARE  ".$rowcount."</b></h4>";

  $sql2="SELECT name, count(name) FROM `author` group by name";
  
  
$result=mysqli_query($conn,$sql2);
if ($result->num_rows > 0) {
    // output data of each row
    
     $min=0;
     while($row = $result->fetch_assoc())
        {
            
            if($row["count(name)"]>=$min)
                $min=$row["count(name)"];
        }
        mysqli_data_seek($result,0);
       
    while($row = $result->fetch_assoc()) {

        if($row["name"]!='')
        {
            if($row["count(name)"]==$min)
            {
           echo"<b>  <tr>"  . $row["name"]. "  </tr><tr>     " . $row["count(name)"].      "</b></tr> <br>";
       }
       else
        echo" <tr>"  . $row["name"]. "  </tr><tr>     " . $row["count(name)"].      "</tr> <br>";
        
      echo "</table>";
  }
    }

} else {
    echo "0 results";
}
  


?>
</body>