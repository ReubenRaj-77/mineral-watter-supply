<?php   
 session_start();  
 $conn = mysqli_connect('localhost', 'root','','saralwater');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Online Mineral Water Booking </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
  
  <!--delivery details>-->
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saral Water</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/mainstyle.css">
  
</head><!--/head-->

<body>


    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/sideBanner0.png" alt=""> </h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            
			 
			 <li class="scroll active"><a href="order.php">Details</a></li>
            <li class="scroll"><a href="logout.php">Log out</a></li> 
                   
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header>
  
  
  <div class="row">
<div id="sidebar" class="span3">

</div>	  
	</div>
	 

	 <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/coming.jpg" alt="">
					
                    <div class="signup-img-content">
					<h2>Delivery Details</h2>
                    </div>
                </div>
                <div class="signup-form">
				
				
                    <form action="order.php" method="POST" class="register-form" id="register-form">
					
					<h2>Delivery Details</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Name</label>
                                    <input type="text" name="name" id="first_name" />
                                </div>
								<div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone" id="phone_number" />
                                </div>
                                <div class="form-input">
                                    <label for="date" class="required">Delivery Date</label>
                                    <input type="date" name="date" id="date" />
                                </div>
                                 </div>										
                            
                            <div class="form-group">
                               
						<div class="form-input">
                                    <label for="houseno" class="required">House no</label>
                                    <input type="text" name="houseno" id="houseno" />
                                </div>
								<div class="form-input">
                                    <label for="street" class="required">Street</label>
                                    <input type="text" name="street" id="street" />
                                </div>
								<div class="form-input">
                                    <label for="landmark" class="required">Landmark</label>
                                    <input type="text" name="landmark" id="landmark" />
                                </div>
								<div class="form-input">
                                    <label for="city" class="required">City</label>
                                    <input type="text" name="city" id="city" />
                                </div>
								<div class="form-input">
                                    <label for="pincode" class="required">Pincode</label>
                                    <input type="text" name="pincode" id="pincode" />
                                </div>
								
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                          <!--  <input type="submit" value="Reset" class="submit" id="reset" name="reset" />-->
                        </div>
						</div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
            
             
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Your Cart Cleared")</script>';  
                     echo '<script>window.location="book.php"</script>';  
              
           }  
      }  
 }			
	?>

	
	

	
	
<?php

if(isset($_POST["submit"]))
{
	
if(isset($_POST["name"]))
        $name=$_POST["name"];		
if(isset($_POST["phone"])) 
	$phone=$_POST["phone"];		
if(isset($_POST["date"])) 
	$date=$_POST["date"];
if(isset($_POST["houseno"])) 
	$houseno=$_POST["houseno"];			
if(isset($_POST["street"])) 
	$street=$_POST["street"];
if(isset($_POST["landmark"])) 
	$landmark=$_POST["landmark"];	
if(isset($_POST["city"])) 
	$city=$_POST["city"];	
if(isset($_POST["pincode"])) 
	$pincode=$_POST["pincode"];
//if(isset($_POST["paymentway"])) 
	//$paymentway=$_POST["paymentway"];
	//list($m,$d,$y)=split ( ' / ' ,$date);
	echo $name;
	echo $phone;
	echo $date;
	echo $houseno;
	echo $street;
	echo $landmark;
	echo $city;
	echo $pincode;
	
	
	foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
            
             
                     unset($_SESSION["shopping_cart"][$keys]);  
                    
              
           }

	
$conn = mysqli_connect('localhost', 'root','','saralwater');

	 $staus="not paid";
			
		//if($paymentway=="bank account"){
		
		//$sql="INSERT INTO `deliverydetails` (`accname`,`receiver`,`mobile`,`item`,`houseno`,`apartment`,`street`,`landmark`,`city`,`pincode`,`totalamount`,`paymentway`,`paidstatus`) VALUES ('".$_SESSION['uname']."', '".$name."', ".$mobile.",'".$_SESSION['purchased']."', ".$houseno.",'".$apartment."','".$street."','".$landmark."' ,'".$city."',".$pincode.",".$_SESSION['tamount'].",'".$paymentway."','".$status."');";
			
		//$check=mysqli_query($conn,$sql);
		//if($check){
			// echo '<script>alert("fill the following details")</script>';  
              //       echo '<script>window.location="payment.php"</script>';  
			//}
			//else{
				//echo "not saved";
			//}
			//}
		
		
	//if($paymentway=="cash on delivery"){
		
		$sql="INSERT INTO deliverydetails (`name`,`phone`,`date`, `houseno`,`street`,`landmark`,`city`,`pincode`) VALUES ( '$name', '$phone','$date' ,'$houseno','$street','$landmark','$city','$pincode')";
			
		$check=mysqli_query($conn,$sql);
		if($check){
			 echo '<script>alert("Thank you for your order....")</script>';  
                     echo '<script>window.location="index.html"</script>';  
			}
			else{
				echo "not saved";
			}
			}
//}
	



?>
	 <script src="js/mainscript.js"></script>
	
	</body>
	</html>