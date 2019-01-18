<?php require('config.php')?>
<?php require('header.php')?>
	<div class="login-banner">
      <div class="login-banner-text">
        <h2>LogIn</h2>
      </div><!-- login-banner-text-->
    </div><!-- login-banner-->
	<div class="log-sign-mid">
      <div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="log-sign-box fade show">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login to your account</h5>
                </div><!-- modal-header-->
                <div class="modal-body">
                  <div class="row">
                    <div class="col-xl-8 col-lg-5 col-md-12 col-sm-12 col-12">
                      <div class="logsign-input-field">
                      <form action="login_code.php" method="post" name="frm" role="login" id="login">
<!--                        <input type="hidden" name="_token" value="05XlRipeVvraT4NEeJaI0Bhxyuu2VY91WDbkufVF">-->
                         <div class="form-group ">
                          <input type="email" name="email" class="form-control" placeholder="Enter Your Email *" required>
                         </div><!-- form-group-->
                        <div class="form-group ">
                          <input type="password" name="password" class="form-control" placeholder="Password *" required>
                        </div><!-- form-group-->
                        <div>
                          <button class="btn btn-primary">Login</button>
<!--                        <a data-toggle="modal" data-target="#Forgot-password-modal" data-dismiss="modal">Forgot Password?</a>-->
                        </div>
                      </form>
                      
                      <h4 class="text-danger" style="font-weight: bolder;">
						<?php
						if(isset($_GET['msg'])){
							echo '<br><div class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1000ms">'.$_GET["msg"].'</div>';
						}
						?>
					</h4>
                      </div><!-- logsign-input-field-->
                    </div><!-- col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12-->
                    
                  </div><!-- row-->
                </div><!-- modal-body-->
                <div class="modal-footer text-center">
                  <h2>New To WebRater</h2>
                  <a href="register.php">Register Now</a>
                </div><!--modal-footer-->
              </div><!-- modal-content-->
            </div><!-- modal-dialog-->  
          </div><!-- log-sign-box fade show-->
        </div><!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
      </div><!-- container--> 
    </div>
    
   <?php require('footer.php')?>