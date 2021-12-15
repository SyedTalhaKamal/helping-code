<?php 
  $pg='user';
  $title = "User Management";
  include('header.php');
  include('sidebar.php');
?>

<div class="app-content content dashboard">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12 px-xl-4 pt-xl-2">
                        <nav aria-label="breadcrumb" class="mt-sm-5 mx-2">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item blue-text"><a href="users.php">Users</a></li>
                                <li class="breadcrumb-item blue-text active" aria-current="page">User Profile</li>
                            </ol>
                        </nav>
                        <div class="card mb-sm-5 mx-2">
                            <div class="card-content collapse show">
                                <div class="card-dashboard">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="mb-2 semi-bold d-grey-text">User Profile</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <div class="company-img">
                                                <img src="images/company-img.png" alt="" class="img-fluid">
                                            </div>
                                            <a href="#_" class="blue-text d-inline-block">View</a>
                                        </div>
                                        <div class="col-xl-8 mx-auto">
                                            <div class="row">
                                                <div class="col-lg-6 mt-1">
                                                    <label for="" class="semi-bold">Company Name</label>
                                                    <p class="mb-0 m-grey-text">Name</p>
                                                </div>
                                                <div class="col-lg-6 mt-1 pl-lg-5">
                                                    <label for="" class="semi-bold">Full Name</label>
                                                    <p class="mb-0 m-grey-text">Name</p>
                                                </div>
                                                <div class="col-lg-6 mt-1 mt-lg-2">
                                                    <label for="" class="semi-bold">Title</label>
                                                    <p class="mb-0 m-grey-text">Engineer</p>
                                                </div>
                                                <div class="col-lg-6 mt-1 mt-lg-2 pl-lg-5">
                                                    <label for="" class="semi-bold">User Email</label>
                                                    <p class="mb-0 m-grey-text">user@email.com</p>
                                                </div>
                                                <div class="col-lg-6 mt-1 mt-lg-2">
                                                    <label for="" class="semi-bold ">Office Phone Number</label>
                                                    <p class="mb-0 m-grey-text">1231231</p>
                                                </div>
                                                <div class="col-lg-6 mt-1 mt-lg-2 pl-lg-5">
                                                    <label for="" class="semi-bold">Cell Phone Number</label>
                                                    <p class="mb-0 m-grey-text">1231231</p>
                                                </div>
                                                <div class="col-12 mt-1 mt-lg-2">
                                                    <p>
                                                        <input type="checkbox" checked id="c1" name="cb">
                                                        <label for="c1">Can view tickets made by other users</label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-5">
                                            <button class="site-btn px-3 py-1" onclick="location.href='edit-user.php'">Edit Details</button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="modal fade userRegistered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content success-modal admin-modal">
            <div class="text-center mt-5">
                <h5 class="d-grey-text mt-2">User Registered</h5>
                <button class="site-btn mt-2 mb-2 red-btn px-3 py-1" data-dismiss="modal" aria-label="Close">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Inactive Agent Modal -->
<div class="modal fade inactiveUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <!-- <img src="images/question.png" alt="" class="img-fluid"> -->
                <h5 class="d-grey-text mt-1">Are you sure you want to Inactivate the user?</h5>
                <div class="modal-btn-div mt-3">
                    <a class="login-btn black-border-btn" data-dismiss="modal" aria-label="Close">No</a>
                    <a class="login-btn site-btn" id="yesinactive" data-toggle="modal" data-target=".confirmInactive" data-dismiss="modal" aria-label="Close">Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade confirmInactive" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <h5 class="d-grey-text mt-1">Inactivate User</h5>
                <!-- <img src="images/check.png" alt="" class="img-fluid mt-2"> -->
                <h5 class="black-text mt-1">User In-Activated</h5>
            </div>
        </div>
    </div>
</div>

<div class="modal fade activeUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <!-- <img src="images/question.png" alt="" class="img-fluid"> -->
                <h5 class="d-grey-text mt-1">Activate User</h5>
                <h5 class="black-text mt-1">Are you sure you want to Activate the user?</h5>
                <div class="modal-btn-div mt-3">
                    <a class="login-btn black-border-btn" data-dismiss="modal" aria-label="Close">No</a>
                    <a class="login-btn site-btn" id="yesinactive" data-toggle="modal" data-target=".confirmActive" data-dismiss="modal" aria-label="Close">Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade confirmActive" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <h5 class="d-grey-text mt-1">Activate User</h5>
                <!-- <img src="images/check.png" alt="" class="img-fluid mt-2"> -->
                <h5 class="black-text mt-1">User Activated</h5>
            </div>
        </div>
    </div>
</div>

<div class="modal fade inactiveProfessional" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <!-- <img src="images/question.png" alt="" class="img-fluid"> -->
                <h5 class="d-grey-text mt-1">Are you sure you want to Inactivate the Professional?</h5>
                <div class="modal-btn-div mt-3">
                    <a class="login-btn black-border-btn" data-dismiss="modal" aria-label="Close">No</a>
                    <a class="login-btn site-btn" id="yesinactive" data-toggle="modal" data-target=".professionalInactive" data-dismiss="modal" aria-label="Close">Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade professionalInactive" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <h5 class="d-grey-text mt-1">Inactivate Professional</h5>
                <!-- <img src="images/check.png" alt="" class="img-fluid mt-2"> -->
                <h5 class="black-text mt-1">Professional In-Activated</h5>
            </div>
        </div>
    </div>
</div>

<div class="modal fade activeProfessional" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <!-- <img src="images/question.png" alt="" class="img-fluid"> -->
                <h5 class="d-grey-text mt-1">Activate Professional</h5>
                <h5 class="black-text mt-1">Are you sure you want to Activate the Professional?</h5>
                <div class="modal-btn-div mt-3">
                    <a class="login-btn black-border-btn" data-dismiss="modal" aria-label="Close">No</a>
                    <a class="login-btn site-btn" id="yesinactive" data-toggle="modal" data-target=".professionalActive" data-dismiss="modal" aria-label="Close">Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade professionalActive" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <h5 class="d-grey-text mt-1">Activate Professional</h5>
                <!-- <img src="images/check.png" alt="" class="img-fluid mt-2"> -->
                <h5 class="black-text mt-1">Professional Activated</h5>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>

