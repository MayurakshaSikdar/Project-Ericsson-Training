<!-- Header -->
 <?php require('config.php')?>
 <?php require('check_session.php')?>
 <?php require('header.php');?>
 
<!-- Header -->

		<div class="w-company-banner">
            <div class="w-company-banner-text">
               <h2>Write Review For Company</h2>
            </div>
            <!-- w-company-banner-text-->
         </div>
         <!-- w-company-banner-->
		<div class="modal fade" id="mobile-search-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h2>Search Companies Review Here !</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div><!-- modal-header-->
			  <div class="modal-body">
				<form>
				  <div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
					
				  <div class="input-group-append">
					  <button class="input-group-text" id="basic-addon2">Search</button>
					</div><!-- input-group-append-->
				  </div><!-- input-group mb-3-->
				</form>
			  </div><!-- modal-body-->
			</div><!-- modal-content-->
		  </div><!-- modal-dialog-->
		</div><!-- modal-->
		<div class="write-review-mid">
            <div class="inner-container">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="row float-center">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="write-review-company">
                        <!-- w-review-company-logo-->
                           <div class="w-review-company-inner-sec">
                             <div id="resp"></div>
                              <form id="myForm" method="post">
<!--                                 <input type="hidden" name="_token" value="05XlRipeVvraT4NEeJaI0Bhxyuu2VY91WDbkufVF">-->
                                   <div class="row">                            
									 <div class="col-xl-6">
										<div class="form-group" style="position:relative;">
											<label>Company Name *</label>
											   <input type="text" autocomplete="off" id="name" class="form-control" required>                  
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="visibility: visible;width:100%;">
</div>  
										</div>
									 </div>
									 <div class="col-xl-6">
									 <!-- form-group-->
										<div class="form-group ">
											<label>Company URL *</label>
												<input type="url" id="url" name="website_domain" class="searchdata form-control" required>
										</div>
									 </div>
									</div>
								 <!-- form-group-->
                                 <div class="form-group ">
                                    <label>Review Title *</label>
                                    <input type="text" id="title" name="review_title" class="form-control" maxlength="60" placeholder="Enter the Review Title input here.. (limited to 60 characters)" required>
                                    <span id='remainingC'></span>
                                 </div>
                                 <!-- form-group-->
                                 <div class="form-group ">
                                    <label>Advice to Management</label>
                                    <textarea id="comment" class="form-control" name="management_advice" maxlength="250"></textarea>
               		             </div>
                                 <!-- form-group-->
                                 <div class="w-review-agree-sec">
                                    <input type="checkbox" required id="check">
                                    <span>I accept the <a href="terms-condition.html">Terms & Conditions</a> and <a href="privacy-policy.html">Privacy Policy</a>.</span>
                                 </div>
                                 <!-- w-review-agree-sec-->
                                 <div>
<!--                                    <i class="fa fa-edit" aria-hidden="true"></i>-->
                                    <input type="submit" value="Submit" class="btn btn-success col-4 float-left" id="submit">
                                    <span style="cursor: default">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="reset" class="btn btn-primary" value="Reset form">
                                 </div><!-- logsign-button-sec-->
                              </form>
                           </div>
                           <!-- w-review-company-inner-sec-->
                        </div>
                        <!-- write-review-company-->
                     </div>
                     <!-- col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8-->
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="web-product-more-detail">
<!--
                          <div class="w-review-for-product-link">
                            <a href="write-product-review.html">Write Review For Product</a>
                          </div>  <!-- w-review-for-product-link -->
                          
                          <div class="recent-review-side-sec">
                            <h2>Popular Companies</h2>
                            <ul>
							<?php
								$sql = "SELECT webid, name FROM `website_table` ORDER BY rating DESC LIMIT 5";
								$rs = mysqli_query($con, $sql) or die(mysqli_error($con));
								while($rec = mysqli_fetch_assoc($rs)){
							?>
                              <li>
                                <a href="company_view.php?webid=<?php echo $rec['webid']?>" target="_blank"><?php echo $rec['name']?></a>  
                              </li>
                              <?php } ?>
<!--
                              <li>
                                <a href="company-overview/735104742-best-it-company.html">Best it company</a>  
                              </li>
                              <li>
                                <a href="company-overview/248593519-good-experience-with-aqusag-technologies-india.html">Good experience with aqusag technologies india</a>  
                              </li>
                              <li>
                                <a href="company-overview/250240973-good-company-for-fresher-%26-experienced.html">Good company for fresher & experienced</a>  
                              </li>
                              <li>
                                <a href="company-overview/1884076969-great-company---love-it-here.html">Great company - love it here</a>  
                              </li>
                              <li>
                                <a href="company-overview/889810925-mix-experience-with-velocity.html">Mix experience with velocity</a>  
                              </li>
                              <li>
                                <a href="company-overview/231148388-magic-software-company-is-best-for-fresher.html">Magic software company is best for fresher</a>  
                              </li>
                              <li>
                                <a href="company-overview/111013932-best-it-company.html">Best it company</a>  
                              </li>
                              <li>
                                <a href="company-overview/1333713090-very-good-experience-with-e2logy.html">Very good experience with e2logy</a>  
                              </li>
                              <li>
                                <a href="company-overview/244542022-amazing-environment.html">Amazing environment</a>  
                              </li>
-->
                              
                            </ul>
                          </div><!-- recent-review-side-sec-->

                        </div><!-- web-product-more-detail-->
                     </div>
                     <!-- col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4-->
                  </div>
                  <!-- row-->
               </div>
               <!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
            </div>
            <!-- inner-container-->
         </div>
         <!-- write-review-mid-->


<!-- footer -->
<?php require('footer.php'); ?>
<!-- footer -->
<!--
<script>$(document).ready(function(){
	$("#search").on('keyup',function(){
		var searchText=$(this).val();
		if(searchText!=''){
			var _html='';
			$.ajax({
				url:'write-company-review-code.php',
				method:'POST',
				dataType:'json',
				data:{'action':'get_data','searchText':searchText},
				beforeSend:function(){
					$(".ajax-data").html('Loading...');
				},
				success:function(response){
					if(response.bool==true){
						response.allData;
						$.each(response.allData,function(index,value){
							_html+='<tr><td>'+value.username+'</td>';
							_html+='<td>'+value.email+'</td></tr>';
						});
						$(".ajax-data").html(_html);
					}else{
						$(".ajax-data").html('No data found!!');
					}
				}
			});
		}else{
			$(".ajax-data").html('Please enter something!!');
		}
	});
});
</script>-->
<script>
        $(document).ready(function() {
			//var data = new FormData();
			$('#myForm').submit(function(e){
				if($('#url').val() != "" && $('#name').val() != "" && $('#title').val() != ""){
					e.preventDefault();}
			});
			$('.dropdown-menu').on('click', 'a',function(){
				$('.dropdown-menu').css("display", "none");
				var url=$(this).attr("url");
				var name=$(this).attr("name");
				var webid=$(this).attr("webid");
				$('#url').val(url);
				$('#name').val(name);
			});
			$('#name').on('keyup', function(){
				var cname = $('#name').val();
				if(cname!=''){
					
					$.ajax({
						url: 'write-company-review-code.php',
						type: 'post',
						data: {
								name: cname,
								type: 'search',
							},
						success: function(resp){
							//console.log(resp);
							var data = JSON.parse(resp);
							$('.dropdown-menu').html('');
							$('.dropdown-menu').css("display","block");
							data.forEach(function(item){
								$('.dropdown-menu').append('<a class="dropdown-item suggestionItem" webid="'+item.webid+'" url="'+item.url+'" name="'+item.name+'" href="#">'+item.name+'</a>');
							});
						}
					});
					
				}
				else{
					$('.dropdown-menu').html('');
					$('.dropdown-menu').css("display","none");
				}
			});
            $('#submit').on('click', function(){
				var url = $('#url').val();
				var name = $('#name').val();
				var title = $('#title').val();
				var comment = $('#comment').val();
				if (url != "" && name != "" && title != "" && $('#check').is(':checked')){
				$.ajax({
					url: 'write-company-review-code.php',
					type: 'post',
					data: {
							url: url,
							name: name,
							title: title,
							comment: comment
						},
					success: function(resp){
						$('#myForm').hide();
						$('#resp').html(resp);
					}
				});}
			});

        });
    </script>