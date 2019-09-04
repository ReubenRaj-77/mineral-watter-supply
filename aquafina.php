<?php   
 session_start(); 
 $conn = mysqli_connect("localhost", "root", "", "saralwater");   
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],
					'item_size'               =>     $_POST["hidden_size"],
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="book.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],
				 'item_size'          =>     $_POST["hidden_size"],
                'item_price'          =>     $_POST["hidden_price"],    
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="checkout.php"</script>';  
                }  
           }  
      }  
 }
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
            <li class="scroll"><a href="index.html">Home</a></li>
            <li class="scroll active"><a href="book.php">Order</a></li>
			 <li class="scroll"><a href="checkout.php">Check Out</a></li>
            <li class="scroll"><a href="about.php">About Us</a></li> 
            <li class="scroll"><a href="contact.php">Contact</a></li> 
			<li class="scroll"><a href="adminsign.html">Admin</a></li> 
			
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  
  
  <section id="order">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Our PRODUCT</h2>
          <p>PURE & HYGIENIC DRINKING WATER DELIVERED TO YOUR DOORSTEP.</p>
        </div>
      </div> 
    </div>
	
 
 <a href="book.php">Normal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="hightolow.php">Price-High to Low</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="lowtohigh.php">Price-Low to High</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="aquafina.php">Aquafina only</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="bisleri.php">Bisleri only</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="20only.php">Size 20ltr only</a>


 <!--<select id="sorting" onchange="selectionChange()">
      <option value="Sort By">Sort Products</option>
      <option value="Sort By Price" id="price">Sort By Price</option>
      <option value="Sort By A-Z" id="az">Sort By A-Z</option>
      <option value="Sort By Z-A" id="az">Sort By Z-A</option>
</select>
<div class="products">
      <div class="product-wrapper">
            <div class="single-product">
                 <a href="item-url"><img src="path"/></a>
                 <a href="">text link</a>
                 <p>$item price</p>
            </div>
      </div>
      <div class="product-wrapper">
            <div class="single-product">
                 <a href="item-url"><img src="path"/></a>
                 <a href="">text link</a>
                 <p>$item price</p>
            </div>
      </div>
  </div>-->
 
 
	
	
    <div class="container-fluid">
      <div class="row">
        	
<?php  
                $query = "SELECT * FROM productlist where name="AQUAFINA ";  
                $result = mysqli_query($conn, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     { 
				
				  
                ?>  

<form method="post" action="book.php?action=add&id=<?php echo $row["id"]; ?>">	
		<div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="100ms">
            <div class="folio-image">
			
              <img class="img-responsive" src="<?php echo $row['image']; ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
				  
				  
				  
                    <h3><?php    echo $row['name'];   ?></h3>
                            <?php echo $row['size'];  ?> LITER
					<p> Rs. <?php    echo $row['price'];   ?> </p>
                  </div>
				  
				  
				  
				  
				  
                   
				  
		 <div class="caption">
              <h3><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" name="quantity" value="1"> Quantity<br></h3>
					<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
					<input type="hidden" name="hidden_size" value="<?php echo $row["size"]; ?>" />  
                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
					<input type="submit" name="add_to_cart" data-scroll class="btn btn-start animated fadeInUpBig" style="margin-top:5px;" onclick="JavaScript:Auto(1000)"  class="exclusive shopBtn" class="btn btn-success"  value="Add to Cart" />
				   
            <!--<a data-scroll class="btn btn-start animated fadeInUpBig" href="book.php">Add to cart</a>-->
          </div>
				 </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php 
	}
	}
	?>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  
  
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