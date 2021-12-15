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
                                <li class="breadcrumb-item blue-text"><a href="company.php">Company</a></li>
                                <li class="breadcrumb-item blue-text active" aria-current="page">Add Company</li>
                            </ol>
                        </nav>
                        <div class="card mb-sm-5 mx-2">
                            <div class="card-content collapse show">
                                <div class="card-dashboard">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="mb-2 semi-bold d-grey-text">Add Company</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="company-img">
                                                <img src="images/company-img.png" alt="" class="img-fluid">
                                                <label for="upload-company" class="mb-0 camera-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                                        <g id="Group_751" data-name="Group 751" transform="translate(-967 -415)">
                                                            <circle id="Ellipse_33" data-name="Ellipse 33" cx="20" cy="20" r="20" transform="translate(967 415)" fill="#0070d4"/>
                                                            <g id="Group_90" data-name="Group 90" transform="translate(978.818 428.533)">
                                                            <path id="Path_140" data-name="Path 140" d="M14.124,42.854h-3.1l-.3-.9A1.389,1.389,0,0,0,9.407,41H6.417a1.389,1.389,0,0,0-1.319.951l-.3.9H4.049v-.773A1.083,1.083,0,0,0,2.967,41H2.349a1.083,1.083,0,0,0-1.082,1.082v.829A1.7,1.7,0,0,0,0,44.554v8.035a1.7,1.7,0,0,0,1.7,1.7H14.124a1.7,1.7,0,0,0,1.7-1.7V44.554A1.7,1.7,0,0,0,14.124,42.854ZM2.194,42.082a.155.155,0,0,1,.155-.155h.618a.155.155,0,0,1,.155.155v.773H2.194ZM14.9,52.589a.774.774,0,0,1-.773.773H1.7a.774.774,0,0,1-.773-.773V44.554a.774.774,0,0,1,.773-.773H5.13a.464.464,0,0,0,.44-.317l.407-1.22a.463.463,0,0,1,.44-.317h2.99a.463.463,0,0,1,.44.317l.407,1.22a.464.464,0,0,0,.44.317h3.43a.774.774,0,0,1,.773.773Z" transform="translate(0 -41)" fill="#fff"/>
                                                            <path id="Path_141" data-name="Path 141" d="M62.391,161h-.927a.464.464,0,1,0,0,.927h.927a.464.464,0,1,0,0-.927Z" transform="translate(-59.115 -157.291)" fill="#fff"/>
                                                            <g id="Group_88" data-name="Group 88" transform="translate(3.74 3.091)">
                                                                <path id="Path_142" data-name="Path 142" d="M125.172,149.344a4.172,4.172,0,1,1,4.172-4.172A4.177,4.177,0,0,1,125.172,149.344Zm0-7.417a3.245,3.245,0,1,0,3.245,3.245A3.249,3.249,0,0,0,125.172,141.927Z" transform="translate(-121 -141)" fill="#fff"/>
                                                            </g>
                                                            <g id="Group_89" data-name="Group 89" transform="translate(5.594 4.945)">
                                                                <path id="Path_143" data-name="Path 143" d="M183.318,205.636a2.318,2.318,0,1,1,2.318-2.318A2.321,2.321,0,0,1,183.318,205.636Zm0-3.709a1.391,1.391,0,1,0,1.391,1.391A1.392,1.392,0,0,0,183.318,201.927Z" transform="translate(-181 -201)" fill="#fff"/>
                                                            </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="d-none"><input type="file" name="" id="upload-company"></div>
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Admin Full Name</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Company Name</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Short Name</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Main Phone Number</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Office Number</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Cell Phone Number</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Email</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Password</label>
                                            <div class="form-field site-field mb-0">
                                                <input type="password" class="dash-input p-1 pr-3 right-icon confirm-input" name="" id="">
                                                <i class="fa fa-eye-slash confirm-icon right-icon" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Re-Type Password</label>
                                            <div class="form-field site-field mb-0">
                                                <input type="password" class="dash-input p-1 pr-3 right-icon enter-input" name="" id="">
                                                <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3 mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="p-lg mb-0 w-223 d-blue-text semi-bold">Main Office Address</p>
                                                <hr class="w-75 d-none d-sm-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Address Line 1</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Address Line 2</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">State</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">City</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">ZIP Code</label>
                                            <input type="number" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Comments</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-12 mt-3 mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="p-lg mb-0 w-223 d-blue-text semi-bold">Product Shipping Address</p>
                                                <hr class="w-75 d-none d-sm-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Address Line 1</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Address Line 2</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">State</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">City</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">ZIP Code</label>
                                            <input type="number" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Comments</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-12 mt-3 mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="p-lg mb-0 w-223 d-blue-text semi-bold">Billing Address</p>
                                                <hr class="w-100 d-none d-sm-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Address Line 1</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Address Line 2</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">State</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">City</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">ZIP Code</label>
                                            <input type="number" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Comments</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-12 mt-3 mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="p-lg mb-0 w-223 d-blue-text semi-bold">Hyperlinks</p>
                                                <hr class="w-100 d-none d-sm-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Name</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Link</label>
                                            <input type="text" class="dash-input p-1">
                                        </div>
                                        <div class="col-12 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Comments</label>
                                            <textarea name="" id="" cols="30" rows="4" class="dash-input p-1"></textarea>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <button class="site-btn px-2 py-1">Add another hyperlink</button>
                                        </div>
                                        <div class="col-12 mt-3 mb-2">
                                            <div class="d-flex align-items-center">
                                                <p class="p-lg mb-0 w-223 d-blue-text semi-bold">Company Rate</p>
                                                <hr class="w-100 d-none d-sm-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Rate Type</label>
                                            <select class="dash-input p-1">
                                                <option value="">Custom</option>
                                                <option value="">Default</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mt-1">
                                            <label for="" class="semi-bold d-grey-text">Discount on rate</label>
                                            <div class="d-flex align-items-center">
                                                <input type="number" value="10" class="dash-input p-1">
                                                <p class="mb-0 semi-bold d-grey-text ml-1">%</p>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-5 text-center">
                                            <button class="site-btn px-4 py-1">Register</button>
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

