<html>
<head><title></title></head>

<?php


if(isset($_POST["submit"]))
	$submit=$_POST["submit"];
if(isset($_POST["email"]))
	$email=$_POST["email"];
	
if(isset($_POST["password"])) 
	$password=$_POST["password"];

$flag = 0;
//echo $id;

// Create connection
$conn = mysqli_connect('localhost', 'root','','saralwater');

// Check connection
if ($conn) 
{		
	$x = mysqli_query($conn,"select * from signup");

	while($result = mysqli_fetch_array($x))
	{
		if(($result['email'] == $email) && ($result['password'] == $password))
		{
			$flag = 1;		
		}
	}
}
if($flag == 1)
{	echo"<h3> Welcome </h3>";
	header("location:order.php");
	}
else{
	echo "<h3> Sorry....Login Failed....</h3>";
	include('phpsign.html');
}		
mysqli_close($conn);
?>
</form>
</center>
</body>
</html>
