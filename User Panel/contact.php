<?php require('config.php')?>
<?php require('check_session.php')?>
<?php
	$uid = intval($_SESSION['user']['uid']);
	$sql = mysqli_query($con, "SELECT name, email FROM `user_table` WHERE uid='$uid'") or die(mysqli_error($con));
	$rec = mysqli_fetch_assoc($sql);
?>
<?php require('header.php')?>
	<div class="contact-banner">
      <div class="contact-banner-text">
        <h2>Contact Us</h2>
      </div><!-- contact-banner-text-->
    </div><!-- contact-banner-->
	<div class="contact-mid-sec">
      <div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="contact-info-sec">
            <h2>Contact Information</h2>
            <span class="contact-bar"></span><!-- contact-bar-->
            <p>Any user or non-user can reach us at info@webrater.com for all your issues and problems related to the website. We will try to get back to you within 48 hours of the listed complain. We try to, maintain a cordial relation between the company and our users for a creating the perfect review website that you can trust and rely on.</p>
          </div><!-- contact-info-sec-->
          <div class="contact-form-sec">
            <div class="contact-form-text">
              <h2>Contact us</h2>
              <span class="contact-3-module-bar"></span>
            </div><!-- contact-form-text-->
            <div class="contact-form" id="contact">
            
             <form method="post" id="form">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Name *" value="<?php echo $rec['name']?>" required disabled>
                  </div><!-- form-group -->
                </div><!-- col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12-->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Email *" value="<?php echo $rec['email']?>" required disabled>
                  </div><!-- form-group -->
                </div><!-- col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12-->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <input type="tel" pattern="[0-9]{10}" id="mobile" class="form-control" placeholder="Phone *" required>
                  </div><!-- form-group -->
                </div><!-- col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12-->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="title" placeholder="Subject *" required>
                  </div><!-- form-group -->
                </div><!-- col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12-->
              </div><!-- row -->
              <div class="form-group">
                <textarea class="form-control" id="comment" placeholder="Your Message *" required></textarea>
              </div><!-- form-group-->
              <input type="button" class="btn btn-primary" id="submit" value="Send Message >"></input>
              </form>
              
            </div><!-- contact-form-sec --> 
          </div><!-- contact-form-sec-->
        </div><!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
      </div><!-- container -->
    </div><!--contact-mid-sec-->
    
<?php require('footer.php')?>
<script type="text/javascript">
		$("#form").submit(function(e){
        	e.preventDefault()
    	});
		$("#submit").on('click', function(){
			var mobile = $('#mobile').val()
        	var title = $('#title').val()
        	var comment = $('#comment').val()
			if(mobile != "" && title != "" && comment != ""){
			$.ajax({
				url: "contact_submit.php",
				type: "post",
				success: function(resp){
					$("#form").hide();
					$("#contact").html(resp);
				}
			})}
		})
</script>