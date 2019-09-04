<?php   
 session_start();  
 
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
            <li class="scroll"><a href="index.html">Home</a></li>
            <li class="scroll"><a href="book.php">Order</a></li>
			<li class="scroll active"><a href="checkout.php">Check Out</a></li>
            <li class="scroll"><a href="about.php">About Us</a></li> 
            <li class="scroll"><a href="contact.php">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <body>
  
  <div class="span9">
 
	<h3> CHECK OUT YOUR PURCHASE</h3>	
	<hr class="soft"/>
	<div class="well">
	<div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th> 
								<th width="20%">Size</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><strong><font color="blue"><?php echo $values["item_name"]; ?></strong></font></td>
								<td><?php echo " ".$values["item_size"]."LITER"; ?></td>
                               <td><?php echo " ".$values["item_quantity"].""; ?></td>  
                               <td>Rs <?php echo $values["item_price"]; ?></td>  
                               <td>Rs <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="book.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="defaultBtn">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Net Amount</td>  
                               <td align="left">Rs <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
						  <tr>  
                               <td colspan="3" align="right">Service charge</td>  
                               <td align="left">Rs <?php



								if($total<500)
										$charge= number_format($total/10, 2); 
								elseif($total>500 && $total<1000)
										$charge=number_format($total/15, 2);
								elseif($total>1000 && $total<2000)
										$charge=number_format($total/20, 2);
								else
										$charge=number_format($total/30,2);
									echo $charge;
							   ?></td>  
                               <td></td>  
                          </tr>
						  <tr>  <td colspan="1" align="left"><font color="red"><a href="book.php"><span class="defaultBtn">Purchase More</span></a><br>
						  
						  
						  
							   <a href="order.php?action=delete"><span class="defaultBtn">Clear Cart</span></a>
							
						  
						  </td>
                               <td colspan="2" align="right">Total</td>  
							   
                               <td align="left"><font color="red"><strong>Rs <?php $totalamount=$total+$charge; $_SESSION["tamount"]=$totalamount; echo number_format($totalamount, 2); ?></strong></font></td>  
                               <form method="post" action="phpsign.html">
							   <td colspan="1" align="left"><input type="submit" name="buynow"  style="margin-top:5px;"  class="btn btn-success" value="Buy Now" /></span></td>
								</form>
						 </tr>
                          <?php  
                          }  
                          ?>  
						  
						  
						  <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;
								$item="";
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          
                            
                                $item.=$values["item_name"]." "; 
								$item.=$values["item_size"]."LITER "; 
                              $item.=$values["item_quantity"]." ";  
                                $item.=number_format($values["item_quantity"] * $values["item_price"], 2)."Rs";
								$_SESSION['purchased']=$item;	
								}
								$item="";
						  }
						   
						   
						  ?>

						  
						  
						  
						  
                     </table>  
					
                </div>
				</div>
				</div>
				</div>
				</body>
				</html>