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
                    <li><a href="pop_travel.php">Popular Travel</a></li>
                    <li><a href="pop_hotel.php">Popular Hotel</a></li>
                    <li><a href="pop_food.php">Popular Restaurant & Food</a></li>
                  </ul>
                </li>
                
                <li><a href="contact_us.php">Contact us</a></li>
                <li class="active"><a href="#">Search<i class="icon-search"></i></a></li>
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
      <div class="container">
        <article class="article">
          <div class="page-header">
            <h1>Search <i class="icon-search"></i><small></small></h1>
            <div class="offset3">
              <form action="search.php" method="get">
                <table>
                <tr>
                  <td><h3>Type</h3></td>
                  <td><h3>Distinct</h3></td>
                </tr>
                <tr>
                  <?php if(!empty($_GET)){ ?>
                  <td>
                  <select id="type" name="type">
                    <option value="TransitPlace" <?php if($_GET["type"] == "TransitPlace"){
                      echo " selected='selected'";} ?>
                    >Transportation</option>
                    <option value="Hotel" <?php if($_GET["type"] == "Hotel"){
                      echo " selected='selected'";} ?>>Hotel</option>
                    <option value="Attraction" <?php if($_GET["type"] == "Attraction"){
                      echo " selected='selected'";} ?>>Travel Place</option>
                    <option value="Shop" <?php if($_GET["type"] == "Shop"){
                      echo " selected='selected'";} ?>>Shopping</option>
                    <option value="Restaurant" <?php if($_GET["type"] == "Restaurant"){
                      echo " selected='selected'";} ?>>Restaurant</option>
                </select>
              </td>
                <td>
                <select id="distinct" name="distinct">
                    <option value="1"<?php if($_GET["distinct"] == "1"){
                      echo " selected='selected'";} ?>>พญาไท</option>
                    <option value="2"<?php if($_GET["distinct"] == "2"){
                      echo " selected='selected'";} ?>>สาทร</option>
                    <option value="3"<?php if($_GET["distinct"] == "3"){
                      echo " selected='selected'";} ?>>ดุสิต</option>
                    <option value="4"<?php if($_GET["distinct"] == "4"){
                      echo " selected='selected'";} ?>>พระนคร</option>
                    <option value="5"<?php if($_GET["distinct"] == "5"){
                      echo " selected='selected'";} ?>>ปทุมวัน</option>
                </select>
              </td>
              <?php }else{ ?>
                <td>
                  <select name="type">
                    <option value="TransitPlace">Transportation</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Attraction">Travel Place</option>
                    <option value="Shop">Shopping</option>
                    <option value="Restaurant">Restaurant</option>
                </select>
              </td>
                <td>
                <select name="distinct">
                    <option value="1">พญาไท</option>
                    <option value="2">สาทร</option>
                    <option value="3">ดุสิต</option>
                    <option value="4">พระนคร</option>
                    <option value="5">ปทุมวัน</option>
                </select>
              </td>
              <?php } ?>
              </tr>
              
              <tr>
              <td>
                <button type="submit" class="btn btn-large btn-info">Search</button>
              </td>
            </tr>
            </tr>
                </table>

              </form>
            </td>
          </div>

          </div>
          <?php if(!empty($_GET)){ ?>
          <?php $type = $_GET["type"];
                $area = $_GET["distinct"];
           ?>
          <?php 
          $out = mysqli_query($con,"SELECT place.name as PlaceName, place.address,place.url,place.pic,area.name as Area 
          ,".$type."Type.".$type."TypeName as Type 
          FROM place,".$type.",area,".$type."Type WHERE place.idPlace = ".$type.".id".$type." and
          place.Area_id = area.idArea and ".$type.".type = ".$type."Type.id".$type."Type and area.idArea = ".$area." group by place.name order by ISNULL(place.pic), place.pic asc;"
          );
          ?>
            <div class="row">
            <div class="span10 offset1">            
              <div class="row bottom-space">
                <div class="span7">
                   <?php include 'print_list.php'; ?>
                </div>
              </div>                          
            </div>


            <?php } ?>
          </div>
        <article>
      </article></article></div>
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