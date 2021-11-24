<?php
$title = "Login";
include('header.php');
?>


<section class="loginSection">
    <div class="container-fluid h-100">
        <div class="row align-items-center h-100">
            <div class="col-10 mx-auto multi-color-bg">
                <div class="row align-items-center">
                    <div class="col-md-6 d-none d-md-block">
                        <div class="login-car-img">
                            <img src="assets/images/login-left-img.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-detail py-5">
                            <div class="logo-box text-center mb-5">
                                <img src="assets/images/main-logo.png" class="img-fluid" alt="">
                            </div>
                            <form action="dashboard.php">
                                <div class="form-field mb-4">
                                    <div class="label-field">
                                        <label for="" class="custom-label">Email <span class="red">*</span></label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" class="custom-input pl-3" placeholder="Enter ID">
                                    </div>
                                </div>
                                <div class="form-field mb-2">
                                    <div class="label-field">
                                        <label for="" class="custom-label">Password <span class="red">*</span></label>
                                    </div>
                                    <div class="pass-field">
                                        <input type="text" class="custom-input password1 pl-3" placeholder="Enter Password">
                                        <i class="fas fa-eye show-hide-icon1"></i>
                                    </div>
                                </div>
                                <div class="form-field text-right mb-5">
                                    <div class="forget-password-text">
                                        <a href="password-recovery1.php">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="form-field mb-5">
                                    <div class="form-button">
                                        <button type="submit">
                                            Login
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9.425" height="16.026" viewBox="0 0 9.425 16.026">
                                                <g id="Icon_ionic-ios-arrow-dropdown" data-name="Icon ionic-ios-arrow-dropdown" transform="translate(-4.935 26.009) rotate(-90)">
                                                    <path id="Path_8" data-name="Path 8" d="M10.378,14.815a1.362,1.362,0,0,0,0,1.92l6.729,6.708a1.356,1.356,0,0,0,1.87.042l6.63-6.609a1.355,1.355,0,1,0-1.912-1.92L18,20.566l-5.7-5.759A1.356,1.356,0,0,0,10.378,14.815Z" transform="translate(0 -9.478)" />
                                                    <path id="Path_9" data-name="Path 9" d="M18,5.625Z" />
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-field">
                                    <div class="back-login">
                                        <button type="button">
                                            Back to Website
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include('footer.php'); ?>