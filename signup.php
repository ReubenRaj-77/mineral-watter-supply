<html>
<head>
<title>validation</title>
</head>
<body>
<?php

if(isset($_POST["username"]))
        $username=$_POST["username"];	
if(isset($_POST["password"])) 
	$password=$_POST["password"];
if(isset($_POST["address"])) 
	$address=$_POST["address"];
if(isset($_POST["email"]))
        $email=$_POST["email"];	
if(isset($_POST["phone"])) 
	$phone=$_POST["phone"];
$flag=0;

		$conn = mysqli_connect('localhost', 'root','','saralwater');
if(isset($_POST['submit'])) 
{		  
			$sql="insert into signup values ('$username','$password','$address','$email','$phone')";
			mysqli_query($conn,$sql);
			
			$flag=1;	
			if($flag==1)
			{
			echo "SIGNUP SUCCESSSFULLY";
			include('phpsign.html');
			}
	}
			else{
				echo "error";
			include('booknow.html');
			}
			
		mysqli_close($conn);
?>

</body>
</html>
