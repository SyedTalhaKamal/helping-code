<?php 
  $title = "Login";
  include('header.php');
?>
  <section class="login-bg">
    <div class="container position-relative">
        <div class="login-card">
            <div class="row ml-0 mr-0">
                <div class="col-md-6 col-xl-5 col-12 pl-0 pr-0 login-right-col">
                    <div class="login-right-content">
                        <img src="images/logo.png" alt="" class="img-fluid d-block">
                        <h3 class="mt-xl-3 mt-2 blue-text">Welcome!</h3>
                        <p class="medium">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                        <form action="dashboard.php">
                            <input type="email" class="site-input px-0 mt-1" placeholder="Enter Email" name="" id="">
                            <div class="form-field mt-1">
                                <input type="password" class="site-input pl-0 right-icon confirm-input" placeholder="Enter Password" name="" id="">
                                <i class="fa fa-eye-slash confirm-icon right-icon" aria-hidden="true"></i>
                            </div>
                            <div class="text-right">
                                <a href="forget-password.php" class="forgot-link">Forgot Password ?</a>
                            </div>
                            <div class="text-center mt-3">
                                <button class="site-btn" type="submit">Login</button>
                            </div>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="#_" class="blue-text"><i class="fas fa-arrow-left"></i> Back to Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-7 col-12 pl-0 pr-0 login-left-col py-5 text-center"></div>
            </div>
        </div>
    </div>
</section>


        <!-- Password Recovery Modal 1 -->
        <div class="modal fade" id="pwdrecovery1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered site-modal" role="document">
                <div class="modal-content">
                    <h2 class="site-modalheading">Forgot Password</h2>
                    <label for="" class="d-grey-text mt-3">Email</label>
                    <div class="form-field">
                        <i class="fa fa-envelope left-icon" aria-hidden="true"></i>
                        <input type="email" class="site-input left-icon" placeholder="Enter Email" name="" id="">
                    </div>
                    <a class="login-btn site-btn mt-1" id="pwd1-btn" data-toggle="modal" data-target="#pwdrecovery2" data-dismiss="modal" aria-label="Close">Next</a>
                    <div class="text-center">
                        <a href="#" class="back-link d-inline-block mt-3 black-text" data-dismiss="modal" aria-label="Close"><i class="fa fa-arrow-left mr-1" aria-hidden="true"></i>Back to Login</a>
                    </div>
                </div>
            </div>
        </div>

      <!-- Password Recovery Modal 2 -->
      <div class="modal fade" id="pwdrecovery2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered site-modal" role="document">
              <div class="modal-content">
                  <h2 class="site-modalheading">Forget Password</h2>
                  <label for="" class="d-grey-text mt-3">Verification</label>
                  <div class="form-field mb-1">
                      <i class="fa fa-pen left-icon" aria-hidden="true"></i>
                      <input type="email" class="site-input left-icon" placeholder="Enter Verification Code" name="" id="">
                  </div>
                  <a href="#" class="forgot-link cyan-text d-block text-right mb-1">Resend Code</a>
                  <a href="#" class="login-btn site-btn mt-2" id="pwd2-btn" data-toggle="modal" data-target="#pwdrecovery3" data-dismiss="modal" aria-label="Close">Continue</a>
                  <div class="text-center">
                      <a href="#" class="back-link d-inline-block mt-3" data-dismiss="modal" aria-label="Close"><i class="fa fa-arrow-left mr-1" aria-hidden="true"></i>Back to Login</a>
                  </div>
              </div>
          </div>
      </div>

        <!-- Password Recovery Modal 3 -->
        <div class="modal fade" id="pwdrecovery3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered site-modal" role="document">
              <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <h2 class="site-modalheading">Forget Password</h2>
                  <label for="" class="d-grey-text mt-1">Password</label>
                  <div class="form-field">
                    <i class="fa fa-lock left-icon" aria-hidden="true"></i>
                    <input type="password" class="site-input both-icon confirm-input" placeholder="Enter Password" name="" id="">
                    <i class="fa fa-eye-slash confirm-icon right-icon" aria-hidden="true"></i>
                  </div>
                  <label for="" class="d-grey-text">Confirm Password</label>
                  <div class="form-field">
                      <i class="fa fa-lock left-icon" aria-hidden="true"></i>
                      <input type="password" class="site-input both-icon enter-input" placeholder="Confirm Password" name="" id="">
                      <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="login-btn site-btn"  data-dismiss="modal" aria-label="Close">Confirm</a>
                  <div class="text-center">
                      <a href="#" class="back-link d-inline-block mt-3" data-dismiss="modal" aria-label="Close"><i class="fa fa-arrow-left mr-1" aria-hidden="true"></i>Back to Login</a>
                  </div>
              </div>
            </div>
        </div>

<?php include('footer.php') ?>