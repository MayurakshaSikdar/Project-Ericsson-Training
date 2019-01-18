<?php require('config.php')?>
<?php require('header.php')?>
     <?php
		$webid = $_GET['webid'];
		$sql =  mysqli_query($con, "SELECT w.webid, w.name, w.url, w.logo, count(c.cid) AS count, AVG(c.rating) AS review FROM `comments_table` AS c, `website_table` AS w WHERE c.webid=w.webid AND c.webid='$webid'") or die(mysqli_error($con));
		$rs = mysqli_fetch_assoc($sql);
?><script>alert(<?php echo $rs['review	']?>)</script>
      <div class="webproduct-banner">
         <div class="webproduct-banner-text">
			<h2 style="color: black"><?php echo $rs['name']?></h2>
			<h2 style="color: black"><?php echo $rs['name']?></h2>
			<h2 style="color: black"><?php echo $rs['name']?></h2>
		 </div><!-- webproduct-banner-text-->
      </div><!-- webproduct-banner-->
      <div class="web-product-mid">
         <div class="inner-container">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="web-product-detail">
                  <div class="row">
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="web-product-info">
                           <h2><?php echo $rs['name']?></h2>
								<p>Review(s) <?php echo $rs['count']?></p>
                           <div class="ratingsec" style="cursor: pointer" title="<?php echo intval(ceil($rs['review']))?>">
                             
                              <?php if($rs['review'] == 0)
										$rs['review'] = 1;
							   ?>
                    <?php 
						switch(ceil($rs['review'])){
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
                        <!-- web-product-info-->
                     </div><!-- col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12-->
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="webproduct-star-num-sec text-right">
                           <p><?php echo intval(ceil($rs['review']))?>/5</p>
                           <?php
								if(intval(ceil($rs['review'])) == 5){
							?>		<strong>Excellent</strong>
                       		<?php
								}elseif(intval(ceil($rs['review'])) == 4){
							?>		<strong>Moderate</strong>
                       		<?php
							   }elseif(intval(ceil($rs['review'])) == 3){
							?>		<strong>Improving</strong>
                       		<?php
								}elseif(intval(ceil($rs['review'])) == 2){
							?>		<strong>Below Par</strong>
                       		<?php
								}elseif(intval(ceil($rs['review'])) == 1){
							?>		<strong>Bad Reputation</strong>
                       		<?php
								}else;
							?>
                        </div><!-- webproduct-star-num-sec-->
                      </div><!-- col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12-->
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="web-product-image text-right">
							  <a href="<?php echo $rs['url']?>" target="_blank"><img src="../<?php echo $rs['logo']?>" alt="Company Logo"></a>
                        </div>
                        <!-- web-product-image-->
                     </div><!-- col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12-->
                  </div><!-- row-->
               </div><!-- web-product-detail-->
            </div><!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
         </div><!-- container-->
      </div><!-- web-product-mid--> 
      <?php
			$q =  mysqli_query($con, "SELECT w.webid, w.name as wName, w.url, w.logo, u.uid, u.name AS uName, c.cid, c.title, c.comment, c.rating FROM `comments_table` AS c, `website_table` AS w, `user_table` AS u WHERE c.webid=w.webid AND u.uid=c.uid AND c.webid='$webid' LIMIT 5") or die(mysqli_error($con));
		?>
      <div class="web-product-reviews-sec clearfix">
         <div class="inner-container">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="row">
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="write-review-btn-filter-sec">
                      <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="write-review-btn">
							<a href="write-company-review.php">Write  Reviews about this company !...</a>
                          </div><!-- write-review-btn-->
                        </div><!-- col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12-->
                      </div><!-- row-->
                    </div><!-- write-review-btn-filter-sec-->
				  <div class="web-product-reviews-module" id="soft_skill_list">
					 <div id="myOverlay"></div>
                     <div id="loadingGIF">Loding...</div>
                       <?php
					  		while($rec = mysqli_fetch_assoc($q)){
					  	?>
                        <div class="profile-review-item">
                           <div class="review-item-detail">
                              <div class="row">
                                 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
									<div class="review-item-user-sec text-center">
                                       <a href="profile.php?uid=<?php echo $rec['uid']?>">
                                       		<p><?php echo $rec['uName']?></p>
                                       </a>
<!--                                       <strong>1 Reviews</strong>-->
                                    </div>
								 </div>
                                 <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                                    <a class="review-headlines" href="comment.php?cid=<?php echo $rec['cid']?>"><?php echo $rec['title']?></a>
                                    <?php if(strlen($rec['uName']) > 99){?>
                                    		<p><?php echo $rec['comment']?><a class="review-item-read-more" href="#"></a></p>
                                    <?php }else{?>
                                    		<p><?php echo substr($rec['comment'], 0, 99)?><a class="review-item-read-more" href="#"></a></p>
                                    <?php }?>
                                 </div>
                                 <!-- col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12-->
                              </div>
                              <!-- row-->
                           </div>
                           <!-- review-item-title-->
                           <div class="review-socialstarsec open-popover">
                              <div class="row">
                                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                 </div>
                                 <!-- col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12-->
                                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="popover-box">
                                       <div class="review-ratingsec text-right">
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
										   </div>
                                       </div>
                                       <!-- review-ratingsec-->
                                       <div class="push popover-content">
                                          <div class="row">
                                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="star-cate-name">
                                                   <h2>Rating</h2>
                                                </div>
                                                <!-- star-cate-name-->
                                             </div>
                                             <!-- col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6-->
                                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 popover-padding">
                                                <div class="popover-star-sec">
                                                   <ul>
                                                     <li class="fifth-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                      <li class="fifth-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                      <li class="fifth-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                      <li class="fifth-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                   </ul>
                                                </div>
                                                <!-- popover-star-sec-->
                                             </div>
                                             <!-- col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 popover-padding-->
                                             <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 popover-padding">
                                                <div class="popover-rating-number-sec"></div>
                                                <!-- popover-rating-number-sec-->
                                             </div>
                                             <!-- col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 popover-padding-->
                                          </div>
                                          <!-- row-->
                                       </div>
                                       <!-- push popover-content-->
                                    </div>
                                    <!-- col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12-->
                                 </div>
                                 <!-- row-->
                              </div>
                              <!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 -->
                           </div>
                           <!-- popover-box-->
                        </div>
                        <!-- profile-review-item-->
                        <?php }?>
				  </div>
                  <!-- web-product-reviews-module-->
               </div>
               <!-- col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12-->
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="web-product-more-detail">
                     <div class="company-block-2">
						<div class="company-information">
                           <h2><?php echo $rs['name']?></h2><br>
                           <p style="color: #666161"><?php echo $rs['url']?></p><br>
                           <a target="_blank" href="<?php echo $rs['url']?>">Visit <?php echo $rs['name']?></a>
                        </div>
                        <!-- company-name-->
					 </div>
                  </div>
                  <!-- web-product-more-detail-->
               </div>
               <!-- col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12-->
            </div>
            <!-- row-->
         </div>
         <!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
      </div>
      <!-- container-->
      </div><!-- web-products-reviews-sec-->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php require('footer.php')?>
<!--
      <script src="./companyView_files/jquery-3.3.1.slim.min.js.download"></script>
      <script src="./companyView_files/popper.min.js.download"></script>
      <script src="./companyView_files/bootstrap.min.js.download"></script>
      <script src="./companyView_files/jquery.min.js.download"></script>
      <script src="./companyView_files/jquery-1.10.2.js.download"></script>
      <script src="./companyView_files/jquery-ui.js.download"></script>
      <script src="./companyView_files/custom.js.download"></script>
-->
      <script>
         // $(document).ready(function(){
             
         //     $('#coursesSelect').change(function(){
         //       $('#myOverlay').show();
         //       $('#loadingGIF').show();
         //       setTimeout(function(){
         //          $('#myOverlay').hide();
         //          $('#loadingGIF').hide();
         //       },3000);
         //         var selectedOption = $('#coursesSelect').find(":selected").val();
         //         var selectedOption1 = $('#coursesSelect1').find(":selected").val();
         //         $.ajax({
         //             url: 'https://www.aaareview.com/dataget',
         //             data: {'courses': selectedOption, 'domain_name': selectedOption1},
         //             type: 'GET',
         //             success: function (data) {
         //                 $('#soft_skill_list').html(data);
         //             }
         //         });
         //     });
         // });
      </script>
      <script>
       function yourFunction(intValue){
            $('#myOverlay').show();
            $('#loadingGIF').show();
            setTimeout(function(){
                $('#myOverlay').hide();
                $('#loadingGIF').hide();
            },3000);
          var selectedOption1 = $('#coursesSelect1').find(":selected").val();
          $.ajax({
             url: 'https://www.aaareview.com/dataget',
             data: {'courses': intValue, 'domain_name': selectedOption1},
             type: 'GET',
             success: function (data) {
                 $('#soft_skill_list').html(data);
             }
         });

      }
</script>
      <script>
         $(document).ready(function() {
          src = "https://www.aaareview.com/searchajax";
           $("#search_text").autocomplete({
              source: function(request, response) {
                  $.ajax({
                      url: src,
                      dataType: "json",
                      data: {
                          term : request.term
                      },
                      success: function(data) {
                          response(data);
                      }
                  });
              },
              minLength: 1,
          });
         });
        $(document).ready(function(){
          $("#star-flip").click(function(){
          $("#star-panel").slideToggle("slow");
          });
        });
      </script>
      <style type="text/css">
      #myOverlay{position:absolute;height:100%;width:100%;}
      #myOverlay{background:black;opacity:.7;z-index:2;display:none;}
      #loadingGIF{position:absolute;top:40%;left:45%;z-index:3;display:none;}</style>