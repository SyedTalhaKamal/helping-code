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
                            <div class="login-main-title mb-5 text-center">
                                <h2>
                                PASSWORD RECOVERY
                                </h2>
                            </div>
                            <form action="">
                                <div class="form-field mb-4">
                                    <div class="label-field">
                                        <label for="" class="custom-label">New Password <span class="red">*</span></label>
                                    </div>
                                    <div class="pass-field">
                                        <input type="text" class="custom-input password1 pl-3" placeholder="Enter Password">
                                        <i class="fas fa-eye show-hide-icon1"></i>
                                    </div>
                                </div>
                                <div class="form-field mb-5">
                                    <div class="label-field">
                                        <label for="" class="custom-label">Confirm Password <span class="red">*</span></label>
                                    </div>
                                    <div class="pass-field">
                                        <input type="text" class="custom-input password2 pl-3" placeholder="Retype Password">
                                        <i class="fas fa-eye show-hide-icon2"></i>
                                    </div>
                                </div>
                                <div class="form-field mb-5">
                                    <div class="form-button">
                                        <button type="button" class="justify-content-center">
                                            Update
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