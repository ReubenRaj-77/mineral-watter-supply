<html>
<head>
<title>validation</title>
</head>
<body>
<?php
if(isset($_POST["email"]))
        $email=$_POST["email"];	
if(isset($_POST["password"])) 
	$password=$_POST["password"];
$flag=0;
echo "connect";



		$conn = mysqli_connect('localhost', 'root','','water');

			
if(isset($_POST['sign'])) 
{		  
			$sql="insert into sign values ('$email','$password')";
			mysqli_query($conn,$sql);
			
			$flag=1;
		}
		
			if($flag==1){
			
			include('login.html');
			}
			else{
				echo "error";
			include('sign.html');
			}
			
		mysqli_close($conn);




?>

</body>
</html>
