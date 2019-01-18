<?php require('config.php')?>
<?php require('header.php')?>


<div class="signup-banner">
	 <div class="signup-banner-text">
		<h2>SignUp</h2>
	 </div><!-- signup-banner-text-->
</div><!-- signup-banner-->
      
<div class="log-sign-mid">
         <div class="container">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="log-sign-box fade show">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Signup to your account</h5>
                        </div>
                        <!-- modal-header-->
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-xl-10 col-lg-5 col-md-12 col-sm-12 col-12">
                                 <div class="logsign-input-field">
                                 <form id="contact-form" method="POST" action="register_code.php">
<!--                                    <input type="hidden" name="_token" value="05XlRipeVvraT4NEeJaI0Bhxyuu2VY91WDbkufVF">   -->
									   <div class="form-group ">
                                       	<input type="text" name="name" value="" class="form-control" placeholder="Enter your Full Name *" required>
                                       </div>
                                    <!-- form-group-->
                                    <div class="form-group ">
                                       <input type="text" name="mobile" value="" class="form-control" placeholder="Enter your Mobile Number *" required>
                                    </div>
                                    <!-- form-group-->
                                    <div class="form-group ">
                                       <input type="email" name="email" value="" class="form-control" placeholder="Enter your Email *" required>
                                    </div>
                                    <!-- form-group-->
                                    <div class="form-group ">
                                       <input type="password" name="password" value="" class="form-control" placeholder="Password *" required>
                                    </div>
                                    <!-- form-group-->
                                    <div>
                                       <button class="btn btn-primary">Register Now</button>
                                    </div>
                                    </form>
                                    
                                    <br>
									<h4 class="text-danger text-left" style="font-weight: bolder;">
									<?php
									if(isset($_GET['msg']) && strcmp($_GET['msg'], "User Already Exists !")==0 or isset($_GET['msg']) && strcmp($_GET['msg'], "Password Doesn't Match !")==0){
											echo '<br><div class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay=".5s">&nbsp;'.$_GET["msg"].'</div>';
										?>
<!--
											<br><br>
											<label class="hvr-rectangle-out">
												<a href="login.php" class="btn btn-warning btn-lg wow animated fadeInLeft" data-wow-delay="1s" data-wow-duration="750ms" style="font-weight: bolder">Log In</button></a>
											</label>
-->
									<?php }	 ?>
									</h4>
                                    
                                 </div>
                                 <!-- logsign-input-field-->
                              </div>
                              
                           </div>
                           <!-- row-->
                        </div>
                        <!-- modal-body-->
                        <div class="modal-footer text-center">
                           <h2>Already have an account?</h2><br>
                           <a href="login.php">Login</a>
                        </div>
                        <!--modal-footer-->
                     </div>
                     <!-- modal-content-->
                  </div>
                  <!-- modal-dialog-->  
               </div>
            </div>
            <!-- col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12-->
         </div>
         <!-- container--> 
      </div>
      <!-- log-sign-mid-->

<?php require('footer.php')?>