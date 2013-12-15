<?php 
while($result = mysqli_fetch_array($out)){?>

			  <? 
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
                  <img src="<?echo $picture;?>" class="img-polaroid" width="200" height="200">
                </div>
                <div class="span7">
                  <p class="team-member-description">
                    <h4><?echo $result['PlaceName'];?></h4>
						        <?echo $result['address'];?><br>
                    <?echo '<b>เขต: </b>'.$result['Area'];?>
                    <?echo '<b>ประเภท: </b> '.$result['Type'];?>
                    <?echo '<br><b>เรตติ่ง: </b>'.number_format($result['rating'], 1, '.', '');?>
						<br><br>
						<a href="<?echo 'detail.php?id='.$result['id'];?>" target="_blank">More detail</a>

                  </p>
                </div>
              </div>
       
            </div>
          </div>
          <hr>
<? } ?>