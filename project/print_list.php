<?php 
while($result = mysqli_fetch_array($out)){?>

			  <?php  
			  if($result['pic']!='') 
                $picture = $result['pic'];
              else 
                $picture = 'http://placehold.it/200x200';
              ?>

		<div class="row">

            <div class="span10 offset1">            
              <div class="row bottom-space">
                <div class="span3 center-align">
                  <!-- <img src="http://placehold.it/200x200" class="thumbnail"> -->
                  <img src="<?php echo $picture;?>" class="img-polaroid" width="200" height="200">
                </div>
                <div class="span7">
                  <p class="team-member-description">
                    <h4><?php echo $result['PlaceName'];?></h4>
						        <?php echo $result['address'];?><br>
                    <?php echo '<b>เขต: </b>'.$result['Area'];?>
                    <?php echo '<b>ประเภท: </b> '.$result['Type'];?>
						<br><br>
						<a href="<?php echo 'detail.php?id='.$result['id'];?>" class="btn btn-info">More information</a>

                  </p>
                </div>
              </div>
       
            </div>
          </div>
          <hr>
<?php } ?>