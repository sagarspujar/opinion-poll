<!DOCTYPE html>
<html>
<body>

  <h1><b>OPINION POLL</b></h1>
  
  <p>Who is your favourite author ?</p>
  <form action="" method="post">
<input type="radio" name="vote" value="Miguel de Cervantes" >Miguel de Cervantes<br><br>
<input type="radio" name="vote" value="Charles Dickens">Charles Dickens<br><br>
<input type="radio" name="vote" value="J.R.R Tolkien">J.R.R Tolkien<br><br>
    <input type="radio" name="vote" value="Antonie de Saint-Exuper">Antonie de Saint-Exuper<br><br>
    
<input type="submit" name="submit" value="submit" /></form>
  </body>
  
  
  
<?php


function CloseCon($conn)
 {
 $conn -> close();
 }


 function insert()
 {
  
  $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db="votingpoll";
 	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 	
 if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$aname = $_POST['vote'];

 
if($aname !=""){
//Insert Query of SQL
	$sql=" INSERT INTO author(name) VALUES ('$aname') ";
if($conn->query($sql)=== TRUE)
 echo "<br/><br/><span>Data Inserted successfully...!!</span>";
include 'voter.php';
}else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
}


/*function update()
{
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
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
  rtrurn $rowcount;

}*/
 	
 	
   
?>
