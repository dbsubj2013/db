<html lang="en"><head>
    <meta charset="utf-8">
    
    <?php include 'database_connect.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Hi! Bangkok | สวัสดีกรุงเทพฯ เว็บไซต์รวบรวมข้อมูลเชิงท่องเที่ยวสำหรับกรุงเทพมหานคร</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="index.php" class="brand brand-bootbus"><i class="icon-globe"></i> Hi! Bangkok</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">Facilities</li>
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="restaurant.php">Restaurant</a></li>            
                    <li class="divider"></li>
                    <li class="nav-header">Place & Shopping</li>
                    <li><a href="travel.php">Travel Place</a></li>
                    <li><a href="public.php">Government Office</a></li>
                    <li><a href="shopping.php">Shopping</a></li>
                    <li><a href="product.php">Interesting Product</a></li>
                  </ul>                  
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top Review<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="pop_travel.php">Popular Travel</a></li>
                    <li class="active"><a href="#">Popular Hotel</a></li>
                    <li><a href="pop_food.php">Popular Restaurant & Food</a></li>
                  </ul>
                </li>
                
                <li><a href="contact_us.php">Contact us</a></li>
                <li><a href="search.php">Search<i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
    <!-- Start: Main content -->

    <div class="content">    
     
      <div class="container">
        <!-- Start: Product description -->
        <?php if(!empty($_GET)){ ?>
        <?php $out = mysqli_query($con,"SELECT Place.name as PlaceName,Place.pic,Place.url, Area.name as Area , Place.address FROM Place inner join Area on Place.area_id = Area.idArea
        WHERE Place.idPlace = ".$_GET["id"]);
        while($result = mysqli_fetch_array($out)){
        ?>
        <?php 
        if($result['pic']!='') 
                $picture = $result['pic'];
              else 
                $picture = 'http://placehold.it/200x200';
        ?>
        <airticle class="article">
          <div class="row bottom-space">
            <div class="span12">
              <div class="page-header">
                <!-- <h1>Product <small>Caption for the product</small></h1> -->
              </div>
            </div>
            <div class="span12 center-align">
              <img src="<?php echo $picture;?>" class="thumbnail product-snap">            
            </div>
          </div>
          <div class="row">

            <div class="span10 offset1">
              <p>
                <h4><?php echo $result['PlaceName'];?></h4>
                    <?php echo $result['address'];?><br>
                    <?php echo '<b>เขต: </b>'.$result['Area'];?>
            <br><br>
            <a href="<?php echo $result['url'];?>" target="_blank" class="btn btn-success">More detail</a>
              </p>
                     
              <div class="row">
             <?php }?> 
                
                <?php $out = mysqli_query($con,"SELECT Review.rating,Review.comment FROM Place inner join Review on Place.idPlace = Review.idPlace where Place.idPlace =".$_GET["id"]); ?>
                <?php if ( mysqli_num_rows($out) != 0 ) { ?>
                <h3>Comments</h3>
                <?php } ?>
                </ul>
                <ul class="features">
                  <?php 
                  while($result = mysqli_fetch_array($out)){ ?>
                  <li class="well">
                    <ul>
                    <li class="span3"><h3><i class="icon-star"></i> Rating : <?php echo $result["rating"]?></h3></li>
                    <i class="icon-hand-right "></i>
                    <?php if($result['comment'] == ""){ 
                      echo ' No Comment.';
                    }
                    else{
                      echo ' '.$result['comment'];
                    }?>
                  </ul>
                  </li>
                  <hr>   
                  <?php }?>
                </ul>
              </div>                                              
            </div> 
            </div>     
          </div>
          
        </airticle>
        <!-- End: Product description -->
        <?php } ?>
      </div>
      
    </div>
    
    <!-- End: Main content -->
    <!-- Start: FOOTER -->
   <footer>
      <div class="container">
        <div class="row">
          <div class="span2">
            <h4><i class="icon-star icon-white"></i> Information</h4>
            <nav>
              <ul class="quick-links">
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="restaurant.php">Restaurant</a></li>            
                    
                    
              </ul>
            </nav>
            <h4><i class="icon-cogs icon-white"></i> Place and Shopping</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="travel.php">Travel Place</a></li>
                <li><a href="public.php">Government Office</a></li>
                <li><a href="shopping.php">Shopping</a></li>
                <li><a href="product.php">Interesting Product</a></li>           
              </ul>
            </nav>
          </div>
          <div class="span2">
            <h4><i class="icon-beaker icon-white"></i> Top Review</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="pop_travel.php">Popular Travel</a></li>
                <li><a href="#">Popular Hotel</a></li>
                <li><a href="pop_food.php">Popular Restaurant & Food</a></li>
              <ul>
            </ul></ul></nav>          
          </div>
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="contact_us.php">Contact us</a></li>            
              </ul>
            </nav>
            </nav>            
          </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          © 2013 Hi! Bangkok All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  
</body>
<?php mysqli_close($con); ?>
</html>