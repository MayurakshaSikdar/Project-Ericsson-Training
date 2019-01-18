<?php require('config.php')?>
<?php require('header.php')?>

	<div class="business-signup-banner">
		  <div class="business-signup-banner-text">
			<span><h2>Business Signup</h2>
			<h4 class="text-danger text-left" style="font-weight: bolder;">
									
							</h4>
							</span>
		  </div><!-- business-signup-banner-text-->
	</div><!-- business-signup-banner-->

	<div class="business-signup-mid">
     	 <div class="container">
     	   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<form method="post" enctype="multipart/form-data" action="business-signup_code.php" role="form" name="form" id="frm">
			
<!--			<input type="hidden" name="_token" value="05XlRipeVvraT4NEeJaI0Bhxyuu2VY91WDbkufVF">-->
			  <div class="business-signup-sec">
				<h2>Your Business</h2>
				
				<div class="form-group ">
				  <div class="row">
					<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">Website URL *</label>
					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					  <input type="url" name="url" value="" class="form-control" required id="url">
					</div><!-- col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12-->
				  </div><!-- row-->
				</div><!-- form-group-->

				<div class="form-group ">
				  <div class="row">
					<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">Company Name *</label>
					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					  <input type="text" name="company_name" value="" class="form-control" required id="cpyName">
					</div><!-- col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12-->
				  </div><!-- row-->
				</div><!-- form-group-->
				<div class="form-group">
				  <div class="row">
					<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">Email *</label>
					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					  <input type="email" name="email" value="" class="form-control" required id="email">
					</div><!-- col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12-->
				  </div><!-- row-->
				</div><!-- form-group-->
				<div class="form-group ">
				  <div class="row">
					<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">Mobile Number *</label>
					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					  <input type="text" name="mobile" value="" class="form-control" required id="mobile">
					</div><!-- col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12-->
				  </div><!-- row-->
				</div><!-- form-group-->
				<div class="form-group ">
				  <div class="row">
					<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">Company Address</label>
					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					  <textarea class="form-control" name="address" id="address"></textarea>
					</div><!-- col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12-->
				  </div><!-- row-->
				</div><!-- form-group-->
				<div class="form-group ">
				  <div class="row">
					<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">Description</label>
					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					  <textarea class="form-control" name="description" id="desc"></textarea>
					</div><!-- col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12-->
				  </div><!-- row-->
				</div><!-- form-group-->
				<div class="form-group ">
				  <div class="row">
					<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">Company Logo *</label>
					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					  <input type="file" name="logo" value="" accept="image/jpeg, image/jpg, image/x-png" required>
					</div><!-- col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12-->
				  </div><!-- row-->
				</div><!-- form-group-->
				<div class="business-signup-agree-sec">
				  <input type="checkbox" required>
				  <span>I agree to the aaareview <a href="#">Terms of Use</a>.</span>
				</div><!-- business-signup-agree-sec-->
				<div class="text-right">
					<input type="submit" value="Register Now" class="btn btn-primary business-register" name="submit" id="submit">
				</div><!-- text-right-->
		  		</div><!-- business-signup-sec-->
			</form>
			<?php
					if(isset($_GET['msg'])){
						?>
							<script type="text/javascript">$('#frm').hide()</script>
						<?php
							echo '<br><div class="animated wow fadeInUp display-4 text-center text-warning" data-wow-duration="1000ms" data-wow-delay=".5s">&nbsp;'.$_GET["msg"].'</div>';
					}	 ?>
			</div><!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
		</div><!-- container-->
	</div><!-- business-signup-mid-->

<?php require('footer.php')?>
<!--
<script type="text/javascript">

		$("#frm").submit(function(e){
        	e.preventDefault();
		});
	
		$("#submit").on('click', function(){
			let url = $("#url").val();
			let cpyName = $("#cpyName").val();
			let email = $("#email").val();
			let mobile = $("#mobile").val();
			let address = $("#address").val();
			let desc = $("#desc").val();
//			var form_data = new FormData($("#form"));
//			alert(form_data);
//			var form = document.querySelector('#form');
			$.ajax({
				url: "business-submit_code.php",
				type: "post",
				data: {url: url, 
					   cpyName: cpyName, 
					   email: email,
					   mobile: mobile,
					   address: address,
					   desc: desc
					  },
				success: function(resp){
					alert(resp);
					$("#frm").hide();
					$("#demo").html(resp);
				}
				
//				cache: false,
//				contentType: false,
//				processData: false
		});
	
</script>-->
