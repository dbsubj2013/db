<html lang="en">
<?php include 'database_connect.php'; ?>
<head>
    <meta charset="utf-8">
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
                    <li><a href="transportation.php">Transportation</a></li>
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="Restaurant.php">Restaurant</a></li>            
                    <li class="divider"></li>
                    <li class="nav-header">Place & Shopping</li>
                    <li><a href="travel.php">Travel Place</a></li>
                    <li><a href="public.php">Government Office</a></li>
                    <li><a href="shopping.php">Shopping</a></li>
                   
                  </ul>                  
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top Review<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="active"><a href="#">Popular Travel</a></li>
                    <li><a href="pop_hotel.php">Popular Hotel</a></li>
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
    <!-- Start: MAIN CONTENT -->
    <?php $out = mysqli_query($con,"SELECT * FROM Place,Attraction WHERE place.idPlace = Attraction.idAttraction ");?>
    <div class="content">
      <div class="container">
        
          <article class="article">
          <div class="page-header">
            <h1>Popular Travel Place <i class="icon-star"></i>    <small>Highlight of travelling in the Bangkok</small></h1>
          </div>
          <div class="row">
            <div class="span10 offset1">            
              <div class="row bottom-space">
                <div class="span3 center-align">
                  <img src="http://placehold.it/200x200" class="thumbnail">
                </div>
                <div class="span7">
                  <?php include 'print_list.php'; ?>
                </div>
              </div>                           
            </div>
          </div>
        <article>
      </article></article></div>
    </div>
    <?php mysqli_close($con); ?>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span2">
            <h4><i class="icon-star icon-white"></i> Information</h4>
            <nav>
              <ul class="quick-links">
                    <li><a href="transportation.php">Transportation</a></li>
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="Restaurant.php">Restaurant</a></li>            
                    
                    
              </ul>
            </nav>
            <h4><i class="icon-cogs icon-white"></i> Place and Shopping</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="travel.php">Travel Place</a></li>
                <li><a href="public.php">Government Office</a></li>
                <li><a href="shopping.php">Shopping</a></li>
                        
              </ul>
            </nav>
          </div>
          <div class="span2">
            <h4><i class="icon-beaker icon-white"></i> Top Review</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">Popular Travel</a></li>
                <li><a href="pop_hotel.php">Popular Hotel</a></li>
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
  
</body></html>