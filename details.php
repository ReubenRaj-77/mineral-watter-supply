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
            <h1><img class="img-responsive" src="images/sideBanner0.png" alt=""> <font color="orange">SARAL WATER</h1></font color>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll "><a href="index.html">Home</a></li>
 			<li class="scroll"><a href="insert.php">ADD PRODUCT</a></li>
				<li class="scroll active"><a href="details">View order</a></li>
			
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  
  
  
  <body>
  <div class="span9">
 
	<h3> </h3>	
	<hr class="soft"/>
	<div class="well">
	<div style="clear:both"></div>  
                <br />  
                <h3>Delivery Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="20%">Name</th> 
								<th width="15%">Phone Number</th>  
                               <th width="10%">Delivery Date</th>  
                               <th width="10%">House No</th>  
                               <th width="15%">Street</th>  
                               <th width="15%">Landmark</th>  
							   <th width="20%">City</th>
							   <th width="20%">Pincode</th>
                          </tr>  
						  
						   <?php   
                           $x = mysqli_query($conn,"SELECT * FROM deliverydetails");

					while($result = mysqli_fetch_array($x))
						{
							 
							
							
							
							
		
		?>

                         
                          <tr>  
								 
                               <td><strong><font color="#f33940"><?php echo $result['name']; ?></strong></font></td>
                                <td><?php echo $result['phone'];  ?></td> 
								<td><?php echo $result['date'];  ?></td>
									<td><?php echo $result['houseno'];  ?></td>
										<td><?php echo $result['street'];  ?></td>
											<td><?php echo $result['landmark'];  ?></td>
												<td><?php echo $result['city'];  ?></td>
													<td><?php echo $result['pincode'];  ?></td> 
							   <!-- <td><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" name="stock" value="100"></td>
								<td><a href="today_order.php?action=delivered&recv=<?php echo $result["totalamount"];?>"><span class="defaultBtn">Update</span></a></td>
							   <td>Rs <?php echo $result['price'];  ?></td>
							   <td>Rs <input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" name="price" value="25"></td>
							   <td><a href="today_order.php?action=delivered&recv=<?php echo $result["totalamount"];?>"><span class="defaultBtn">Update</span></a></td>-->
							     
							     
                          <?php  
                                    
                               }  
                          ?>  
                          
						 
						  	  
                     </table> 

  
  


<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
