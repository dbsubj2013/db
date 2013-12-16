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
    <style type="text/css">
    .bigbox {

     height: 360px;
     width: 480px;
      }
    .big{
      font-size: 20px;
      padding: 5px;
    }
    
    </style> 

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
                    <li><a href="pop_hotel.php">Popular Hotel</a></li>
                    <li><a href="pop_food.php">Popular Restaurant & Food</a></li>
                  </ul>
                </li>
                
                <li class="active"><a href="#">Contact us</a></li>
                <li><a href="search.php">Search<i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End: HEADER -->
    <!-- Start: Main content -->
    <div class="content">     
      <div class="container">
        <!-- Start: Service description -->
        <article class="article"> 
          <div class="row bottom-space">
            <div class="span12">
              <div class="page-header">
                <h1>Contact Us</h1>
              </div>
            </div>

             <div class="row">
                
                <ul class="features">
                  
                  <li>
                      <ul>
                          <li class="span6"><img src="img/member.jpg" class="bigbox"></li>
                          <h1>Developers</h1>
                          <ol>
                              <li class="big">Tanachot Techajarupan 5410547624</li>
                              <li class="big">Kunat Pipatanakul 5410545982</li>
                              <li class="big">Suphanut Savethaphanu 5410547128</li>
                          </ol>
                      </ul>
                  </li>
                  <hr>   
                </ul>
              </div>                                    
        </div>
         
                
           
        </article>
        <!-- End: Service description -->
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
                <li><a href="pop_travel.php">Popular Travel</a></li>
                <li><a href="pop_hotel.php">Popular Hotel</a></li>
                <li><a href="pop_food.php">Popular Restaurant & Food</a></li>
              <ul>
            </ul></ul></nav>          
          </div>
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">Contact us</a></li>            
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