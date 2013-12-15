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
    .box {
     height: 200px;
     width: 200px;
      }
    .bigbox {
     height: 400px;
     width: 400px;
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
    <div class="content">
      <!-- Start: slider -->
      <div class="slider">
        <div class="container-fluid">
          <div id="heroSlider" class="carousel slide">
            <div class="carousel-inner">

              <?php $out = mysqli_query($con,
      "SELECT idPlace, Place.name as PlaceName,place.idPlace as id , Area.name as Area,ShopType.ShopTypeName as Type,address,url,pic
      FROM (Place INNER JOIN Shop on Place.idPlace=Shop.idShop) INNER JOIN ShopType on Shop.type = ShopType.idShopType ,Area
      WHERE Area.idArea = Area_id and Area_id IN (SELECT Area.idArea FROM Area,Place WHERE Place.Area_id = Area.idArea) 
      and pic LIKE 'http%'
      ORDER BY Area, Type ,Placename desc
      LIMIT 7,1
    ");?>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                        <?php 
                        $result = mysqli_fetch_array($out)?>
                        <h1><?echo $result['PlaceName'];?></h1>
                      <p>
                            <?echo $result['address'];?><br>
                            <?echo '<b>เขต: </b>'.$result['Area'];?>
                            <?echo '<b>ประเภท:</b> '.$result['Type'];?>
                                                    <br><br>
                      </p>
                      <h3>
                        <a href="<?echo 'detail.php?id='.$result['id'];?>" target="_blank" class="btn btn-info">More information</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="<?echo $result['pic']?>" class="bigbox">
                      
                    </div>
                  </div>                  
                </div>
              </div>

              <?php $out = mysqli_query($con,
          "SELECT idPlace, Place.name as PlaceName,place.idPlace as id, Area.name as Area,RestaurantType.RestaurantTypeName as Type,address,url,pic
          FROM ((Place INNER JOIN Restaurant on Place.idPlace=Restaurant.idRestaurant)
                INNER JOIN Area on Place.Area_id=Area.idArea)
                INNER JOIN RestaurantType on Restaurant.type = RestaurantType.idRestaurantType
                WHERE pic LIKE 'http%'
          ORDER BY Area, Type ,Placename desc
          LIMIT 20,1
          ");?>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                        <?php 
                        $result = mysqli_fetch_array($out)?>
                        <h1><?echo $result['PlaceName'];?></h1>
                      <p>
                            <?echo $result['address'];?><br>
                            <?echo '<b>เขต: </b>'.$result['Area'];?>
                            <?echo '<b>ประเภท:</b> '.$result['Type'];?>
                                                    <br><br>
                      </p>
                      <h3>
                        <a href="<?echo 'detail.php?id='.$result['id'];?>" target="_blank" class="btn btn-info">More information</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="<?echo $result['pic']?>" class="bigbox">
                      
                    </div>
                  </div>                  
                </div>
              </div>

            <?php $out = mysqli_query($con,
              "SELECT idPlace, Place.name as PlaceName,place.idPlace as id, Area.name as Area,HotelType.HotelTypeName as Type,address,url,pic
                FROM ((Place INNER JOIN Hotel on Place.idPlace=Hotel.idHotel)
            INNER JOIN Area on Place.Area_id=Area.idArea)
            INNER JOIN HotelType on Hotel.type = HotelType.idHotelType
            WHERE pic LIKE 'http%'
                ORDER BY Area, Type ,Placename desc
                LIMIT 8,1
          ");?>
              <div class="item active">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                        <?php 
                        $result = mysqli_fetch_array($out)?>
                        <h1><?echo $result['PlaceName'];?></h1>
                      <p>
                            <?echo $result['address'];?><br>
                            <?echo '<b>เขต: </b>'.$result['Area'];?>
                            <?echo '<b>ประเภท:</b> '.$result['Type'];?>
                                                    <br><br>
                      </p>
                      <h3>
                        <a href="<?echo 'detail.php?id='.$result['id'];?>" target="_blank" class="btn btn-info">More information</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="<?echo $result['pic']?>" class="bigbox">
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
          </div>
        </div>
      </div>
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
          <div class="page-header">
            <h2>Popular Hotel</h2>
          </div>
          <div class="row-fluid">
            <?php $out = mysqli_query($con,"SELECT Place.name as PlaceName,place.idPlace as id,Place.address,Place.url,Place.pic,Area.name as Area ,HotelType.HotelTypeName as Type ,SUM(Review.rating)/count(Review.rating) as rating
                    FROM Place,Hotel,Review,Area,HotelType WHERE Place.idPlace = Hotel.idHotel and Review.idPlace = Place.idPlace and Place.Area_id = Area.idArea and Hotel.type = HotelType.idHotelType 
                    and Place.pic LIKE 'http%' group by Place.idPlace order by rating desc ,ISNULL(Place.pic), Place.pic asc LIMIT 8,3"
            );?>
            <? while($result = mysqli_fetch_array($out)){?>
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img src="<?echo $result['pic'];?>" class="box" alt="product name">
                  
                  <div class="caption">
                        <h1><?echo $result['PlaceName'];?></h1>
                      <p>
                            <?echo $result['address'];?><br>
                            <?echo '<b>เขต: </b>'.$result['Area'];?>
                            <?echo '<b>ประเภท:</b> '.$result['Type'];?><br>
                            <?echo '<br><b>เรตติ่ง: </b>'.number_format($result['rating'], 1, '.', '');?>
                                                    <br><br>
                  </p>
                  <div class="widget-footer">
                    <p>
                      <a href="<?echo 'detail.php?id='.$result['id'];?>" class="btn btn-info">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <?}?>
            </ul>
          </div>

          <div class="page-header">
            <h2>Popular Attraction</h2>
          </div>
          <div class="row-fluid">
            <?php $out = mysqli_query($con,"SELECT Place.name as PlaceName,place.idPlace as id,Place.address,Place.url,Place.pic,Area.name as Area ,AttractionType.AttractionTypeName as Type ,SUM(Review.rating)/count(Review.rating) as rating
          FROM Place,Attraction,Review,Area,AttractionType WHERE Place.idPlace = Attraction.idAttraction and Review.idPlace = Place.idPlace and Place.Area_id = Area.idArea 
          and Attraction.type = AttractionType.idAttractionType group by Place.idPlace order by rating desc ,ISNULL(Place.pic), Place.pic asc LIMIT 8,3;"

          );?>
            <? while($result = mysqli_fetch_array($out)){?>
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img src="<?echo $result['pic'];?>" class="box" alt="product name">
                  
                  <div class="caption">
                        <h1><?echo $result['PlaceName'];?></h1>
                      <p>
                            <?echo $result['address'];?><br>
                            <?echo '<b>เขต: </b>'.$result['Area'];?>
                            <?echo '<b>ประเภท:</b> '.$result['Type'];?><br>
                            <?echo '<br><b>เรตติ่ง: </b>'.number_format($result['rating'], 1, '.', '');?>
                                                    <br><br>
                  </p>
                  <div class="widget-footer">
                    <p>
                      <a href="<?echo 'detail.php?id='.$result['id'];?>" class="btn btn-info">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <?}?>
            </ul>
          </div>

          <div class="page-header">
            <h2>Popular Shopping</h2>
          </div>
          <div class="row-fluid">
         <?php $out = mysqli_query($con,"SELECT Place.name as PlaceName,place.idPlace as id,Place.address,Place.url,Place.pic,Area.name as Area ,ShopType.ShopTypeName as Type ,SUM(Review.rating)/count(Review.rating) as rating
          FROM Place,Shop,Review,Area,ShopType WHERE Place.idPlace = Shop.idShop and Review.idPlace = Place.idPlace and Place.Area_id = Area.idArea 
          and Shop.type = ShopType.idShopType group by Place.idPlace order by rating desc ,ISNULL(Place.pic), Place.pic asc LIMIT 1,3");
            while($result = mysqli_fetch_array($out)){?>
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img src="<?echo $result['pic'];?>" class="box" alt="product name">
                  
                  <div class="caption">
                        <h1><?echo $result['PlaceName'];?></h1>
                      <p>
                            <?echo $result['address'];?><br>
                            <?echo '<b>เขต: </b>'.$result['Area'];?>
                            <?echo '<b>ประเภท:</b> '.$result['Type'];?><br>
                            <?echo '<br><b>เรตติ่ง: </b>'.number_format($result['rating'], 1, '.', '');?>
                                                    <br><br>
                  </p>
                  <div class="widget-footer">
                    <p>
                      <a href="<?echo 'detail.php?id='.$result['id'];?>" class="btn btn-info">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <?}?>
            </ul>
          </div>

          <div class="page-header">
            <h2>Popular Area</h2>
          </div>
          <div class="row-fluid">
            <?php $out = mysqli_query($con,"SELECT Area.name, COUNT( Review.rating ) AS numberComment
            FROM (Place INNER JOIN Area ON Place.area_id = Area.idArea) INNER JOIN Review ON Review.idPlace = Place.idPlace 
            GROUP BY Area.idArea order by numberComment desc LIMIT 0,3;"
          );?>
            <? while($result = mysqli_fetch_array($out)){?>
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
              
                <? 
                if($result['name'] == 'ปทุมวัน') {
                  echo '<img src="img/d1.JPG" class="box" alt="product name">';
                  $url = 'http://th.wikipedia.org/wiki/%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%9B%E0%B8%97%E0%B8%B8%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%99';
                }else if($result['name'] == 'พระนคร'){
                  echo '<img src="img/d2.jpg" class="box" alt="product name">';
                  $url = 'http://th.wikipedia.org/wiki/%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%99%E0%B8%84%E0%B8%A3';
                }else {
                  echo '<img src="img/d3.jpg" class="box" alt="product name">';
                  $url = 'http://th.wikipedia.org/wiki/%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%97%E0%B8%A3';
                }
                ?>

                  
                  <div class="caption">
                  <p>
                    <h1><?echo 'เขต '.$result['name'];?></h1>
                  </p>
                  <div class="widget-footer">
                    <p>
                     <a href="<?echo $url;?>" class="btn btn-info">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <?}?>
            </ul>
          </div>
          
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span2">
            <h4><i class="icon-star icon-white"></i> Information</h4>
            <nav>
              <ul class="quick-links">
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="restuarant.php">Restuarant</a></li>            
                    
                    
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
                <li><a href="pop_food.php">Popular Restuarant & Food</a></li>
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
          <?mysqli_close($con);?>
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  

</body></html>