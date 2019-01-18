   <?php require('config.php')?>
   <?php require('header.php')?>
   <?php
		if(!empty($_SESSION['user'])){$uid = intval($_SESSION['user']['uid']);}
		else{$uid = $_GET['uid'];}
		$sql = mysqli_query($con, "SELECT u.uid, u.name AS uName, w.webid, w.name AS wName, c.title, c.comment, c.rating, c.cid, count(c.cid) AS reviews FROM `comments_table` AS c, `website_table` AS w, `user_table` AS u WHERE c.webid=w.webid AND (c.uid='$uid' AND c.uid=u.uid)") or die(mysqli_error($con));

		$rs = mysqli_fetch_assoc($sql);
	?>
   <div class="profile-banner">
      <div class="profile-banner-text">
        <h2>Profile</h2>
	   </div><!-- profile-banner-text-->
   </div><!-- profile-banner-->
    <div class="profile-mid">
      <div class="inner-container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="profileinfo">
                <div class="row">
                	<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="p-profile-image">
					  <img src="images/empty-avatar.jpg" alt="profile">
				   </div><!-- p-profile-image-->
                  </div><!-- col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12-->
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="p-profile-name">
                      <h2><?php echo $rs['uName']?></h2>
                      <p><?php echo $rs['reviews']?>&nbsp;review(s)</p>
                    </div><!-- p-profile-name-->        
                  </div><!-- col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12-->
				</div><!-- row-->
              </div><!-- profileinfo-->
            </div><!-- col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12-->
            <?php
				$q = mysqli_query($con, "SELECT u.uid, u.name AS uName, w.webid, w.name AS wName, c.title, c.comment, c.rating, c.cid FROM `comments_table` AS c, `website_table` AS w, `user_table` AS u WHERE c.webid=w.webid AND c.uid=u.uid AND u.uid='$uid' LIMIT 5") or die(mysqli_error($con));
			  if(mysqli_num_rows($q)>0){
				while($rec=mysqli_fetch_assoc($q)){
			 ?>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
			  <div class="profile-review-item">
                <div class="review-item-detail">
                  <label class="h4"><a href="comment.php?cid=<?php echo $rec['cid']?>" style="color: #424242"><?php echo $rec['title']?></a></label>
                  <a href="company_view.php?webid=<?php echo $rec['webid']?>" class="review-headlines"><?php echo $rec['wName']?></a>
                  <p><?php if (strlen($rec['comment']) > 100){
								echo substr($rec['comment'], 0, 99). '...';?>
								<a href="comment.php?cid=<?php echo $rec['cid']?>" style="color: red">Read more</a></p>
   							<?php
							}
							else{
								echo $rec['comment']?>&nbsp;<a href="comment.php?cid=<?php echo $rec['cid']?>" style="color: red"></a></p>
							<?php } ?>
                </div><!-- review-item-title-->
                <div class="review-socialstarsec">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    </div><!-- col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12-->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="popover-box">
                    <div class="review-ratingsec text-right">
                    <?php if($rec['rating'] == 0)
							$rec['rating'] = 1;?>
                    <div class="ratingsec open-popover" title="<?php echo intval(ceil($rec['rating']))?>">
                    <?php 
						switch(ceil($rec['rating'])){
							case 1: {?>
								<ul>
								   <li class="fifthcolor"><img src="images/star.png"></li>
								</ul>
								<?php break;
									}?>
							<?php case 2: {?>
								<ul>
								   <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
								</ul>
								<?php break;
									}?>
							<?php case 3: {?>
								<ul>
								   <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
								</ul>
								<?php break;
									}?>
							<?php case 4: {?>
								<ul>
								   <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
								</ul>
								<?php break;
									}?>
							<?php case 5: {?>
								<ul>
								   <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
									 <li class="fifthcolor"><img src="images/star.png"></li>
								</ul>
								<?php break;
									}?>
					<?php }?>
				  </div>
				</div>
			  </div>
			</div><!-- col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12-->
		  </div><!-- row-->
		</div><!-- review-socialstarsec-->
	  </div><!-- profile-review-item-->
	</div><!-- col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12-->
           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
              
            </div><!-- col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12-->
            <?php }
			  }
			else{
				echo 'No reviews.';
			}?>
            
          </div><!-- row-->
        </div><!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
      </div><!-- inner-container-->
    </div><!-- profile-mid-->
    <!-- footer-->
    <?php require('footer.php')?>