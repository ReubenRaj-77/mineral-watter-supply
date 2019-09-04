
<?php
//session_start();
// Create connection
$conn = mysqli_connect('localhost', 'root','','saralwater');

// Check connection
if ($conn) 
{		
	session_unset(); 
	//session_destroy();
$_SESSION['email']="";
	mysqli_close($conn);
	
	
	
}		


	include('index.html');

	
	

?>

</body>
