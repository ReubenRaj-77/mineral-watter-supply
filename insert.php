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
	<div class="span9">
    
	<h3>DELIVERY DETAILS</h3>	
	<hr class="soft"/>
	<div class="well">
	<form action="add.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
			<h3>Insert Details</h3>	
<div class="control-group">
			<label class="control-label" for="id">Id<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="id"/>
			</div>
		 </div>
		 			
			<div class="control-group">
			<label class="control-label" for="name">Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="name" placeholder="Product Name"  required >
			</div>
		 </div>
			 
	
		
<div class="control-group">
			<label class="control-label" for="size">Size<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="size"/>
			</div>
		</div>
		
		 <div class="control-group">
			<label class="control-label" for="image">Image<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="image"/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="price">price<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="price"/>
			</div>
		</div>
		  <div class="control-group">
		<div class="controls">
		 <input type="submit" name="submit" value="ADD" class="exclusive shopBtn">
		
		</div>
	</div>
		
		
	</form>
</div>
</div>
</div>



	</body>
	</html>