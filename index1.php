<?php
include 'sqlcon.php';


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);

echo "Connected Successfully";
 
  
/* $db="votingpoll";
 	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 	
 if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$aname = $_POST['vote'];
echo $aname;
 
if($aname !=" "){
//Insert Query of SQL
	$sql=" INSERT INTO author(name) VALUES ('$aname') ";
if($conn->Query($sql)=== TRUE)
 echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}*/
insert();






CloseCon($conn);

?>