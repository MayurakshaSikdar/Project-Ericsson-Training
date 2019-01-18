<?php require('config.php')?>
<?php require('header.php')?><!-- header-->
    <div class="review-banner">
      <div class="review-banner-text">
        <h2>Review</h2>
      </div><!-- review-banner-text-->
    </div><!-- review-banner-->
    <?php
		$cid = $_GET['cid'];
		$sql = mysqli_query($con, "SELECT w.webid, w.name AS wName, u.uid, u.name AS uName, c.cid, c.title, c.comment, c.rating FROM `comments_table` AS c, `website_table` AS w, `user_table` AS u WHERE w.webid = c.webid AND u.uid = c.uid AND c.cid = '$cid'") or die(mysqli_error($con));
		$rec = mysqli_fetch_assoc($sql);
	?>
    <div class="main-review-mid">
      <div class="inner-container">       
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="main-review-title">
            <h2><a href="company_view.php?webid=<?php echo $rec['webid']?>"><?php echo $rec['wName']?></a> reviewed by <a href="profile.php?uid=<?php echo $rec['uid']?>"><?php echo $rec['uName']?></a></h2>
          </div><!-- main-review-title-->
          <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
              <div class="main-review-side-image-sec">
				<!-- main-review-star-sec-->
              </div><!-- main-review-side-image-sec-->
            </div><!-- col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12-->
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
              <div class="review-block-box">
                <div class="review-user-info text-center">
                  <a href="profile.php?uid=<?php echo $rec['uid']?>" class="user-profile-image">
					<img src="images/empty-avatar.jpg" alt="profile">
				  </a>
                  <a href="profile.php?uid=<?php echo $rec['uid']?>" class="user-name">&nbsp;&nbsp;<?php echo $rec['uName']?></a>
                  <br><br>
                </div><!-- review-user-info-->
                <div class="review-info">
                   <h2><?php echo $rec['title']?></h2><br>
                  <p><?php echo $rec['comment']?></p><br>
                </div><!-- review-info-->
                <div class="social-rating-sec">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"></div><!-- col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12-->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <?php if($rec['rating'] == 0)
							$rec['rating'] = 1;?>
                    <div class="review-ratingsec text-right" style="cursor: pointer" title="<?php echo intval(ceil($rec['rating']))?>">
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
                      </div><!-- review-ratingsec-->
                    </div><!-- col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12-->
                  </div><!-- row-->
                </div><!-- social-rating-sec-->
              </div><!-- review-block-box-->
            </div><!-- col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12-->
           </div><!-- row-->
         </div><!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
       </div><!-- inner-container-->
     </div><!-- main-review-mid-->

<?php require('footer.php')?>