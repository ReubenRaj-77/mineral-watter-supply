<?php


if(isset($_POST["submit"]))
{

	$username=$_POST["username"];

	$password=$_POST["password"];
				
				
				if($username=="sudhakar" && $password=="ksk")
				{ 
				
					include("adminhome.php");
				}
				else
				{
					echo "loose";
					include("adminsign.html");
				}
}
?>
				