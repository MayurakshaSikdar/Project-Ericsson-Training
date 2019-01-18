<?php require('config.php')?>
<?php require('header.php')?>
	<div class="website-banner">
    </div><!-- website-banner-->
    <div class="tringle clearfix"></div><!-- tringle-->
	<div class="reviews-banner-text">
      <div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="reviews-banner-module text-center">
            <h1>Review and Discover Great Companies!</h1>
          </div><!-- reviews-banner-module-->
        </div><!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
      </div><!-- container-->
    </div>
    <?php
		$sql = "SELECT w.webid, w.name AS wName, u.uid, u.name AS uName, c.cid, c.title, c.comment, c.rating FROM `comments_table` AS c, `website_table` AS w, `user_table` AS u WHERE c.webid=w.webid AND c.uid=u.uid ORDER BY c.cid DESC LIMIT 10";
		$rs = mysqli_query($con, $sql) or die(mysqli_error($con));
	?>
    <div classs="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="recentpost-title clearfix">
        <h2>Recent Reviews</h2>
      </div><!-- recentpost-title-->
    </div>
    	<div class="recentreviewsec clearfix">
		  <div class="inner-container">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			  <div class="row" id="links">
				<?php
					while($rec = mysqli_fetch_assoc($rs)){
				?>
 			  	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
	 			  <div class="review-item">
					  <div class="review-item-top" style="background-image:url('images/banner.html');">
					 <div class="back"></div>
				 <!-- back-->
					 <div class="popover-box">
					<div class="ratingsec open-popover">
						<?php if($rec['rating'] == 0)
							$rec['rating'] = 1;?>
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
            			<!-- push popover-content-->
        			 </div>
        			 <div class="blogger-profile clearfix">
                      <a href="profile.php?uid=<?php echo $rec['uid']?>"><img src="images/empty-avatar.jpg" alt="profile"/></a>
					 </div>
         <!-- blogger-profile-->
         <div class="review-information clearfix">
            <p class="">
			 <a href="profile.php?uid=<?php echo $rec['uid']?>"><?php echo $rec['uName']?></a> reviewed 
			  <a href="company_view.php?webid=<?php echo $rec['webid']?>"><?php echo $rec['wName']?></a>
		   	</p>
         </div>
         <!-- review-information-->
      </div>
      <!-- review-item-top-->
				  <div class="review-item-bottom">
					 <div class="review">
						<p><?php if (strlen($rec['comment']) > 100)
   									echo substr($rec['comment'], 0, 50). '...';
								else
									echo $rec['comment']?><a >&nbsp;<a href="comment.php?cid=<?php echo $rec['cid']?>">Read more</a></p>
					 </div>
					 <!-- review-information-->
				  </div>
				  <!-- review-item-bottom-->
			   </div>
			   <!-- review-item-->
			</div><?php }?>
          </div><!-- row-->
        </div><!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
      </div><!-- inner-container-->  
    </div>
<?php require('footer.php')?>