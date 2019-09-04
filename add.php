<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      
</head>
<?php

	session_start();
	if(isset($_POST["id"])) 
	$id=$_POST["id"];
	if(isset($_POST["name"])) 
	$name=$_POST["name"];	
	if(isset($_POST["size"])) 
	$size=$_POST["size"];
	if(isset($_POST["image"])) 
	$image=$_POST["image"];
	if(isset($_POST["price"])) 
	$price=$_POST["price"];
	
	
	

		$conn = mysqli_connect('localhost', 'root','','saralwater');


		

		
	
		if($conn)
			{
			$sql="INSERT INTO `productlist`( `id`, `name`, `size`, `image`, `price`) VALUES (".$id.",'".$name."','".$size."',".$image.",".$price.");";
			//echo($sql);
	//		$sql = "INSERT INTO farmerupload (name,fieldid,producttype,productname,weight,expectprice) VALUES ('$_SESSION['name']',$_SESSION['fieldid'],'$producttypes','$pnames',$weight,$price)";
			//$sql="insert into farmerupload values ('$date','$time'.strtotime(),'$_SESSION['name']',$_SESSION['mobile'],$_SESSION['fieldid'],'$producttypes','$pnames',$weight,$price)";
		mysqli_query($conn,$sql);
		echo '<script>alert("Uploaded Successfully")</script>';  
                     echo '<script>window.location="adminhome.php"</script>';  
                
		
		}
		else{
			echo "Upload failed";
			
			
			}
		mysqli_close($conn);
		session_write_close();


?>


