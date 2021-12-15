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
                                <li class="breadcrumb-item blue-text active" aria-current="page">Users Ticket Log</li>
                            </ol>
                        </nav>
                        <div class="card mb-sm-5 mx-2">
                            <div class="card-content collapse show">
                                <div class="card-dashboard">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="mb-0 semi-bold d-grey-text">User Profile</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 offset-xl-2 col-lg-7 text-lg-center mt-1">
                                            <img src="images/company-img.png" alt="" class="img-fluid mx-auto company-dp">
                                        </div>
                                    </div>
                                    <div class="row ml-0 mr-0">
                                        <div class="col-xl-6 col-lg-8 col-12 mx-auto">
                                            <div class="row">
                                                <div class="col-sm-6 mt-1">
                                                    <p class="mb-0 d-grey-text semi-bold">Full Name:</p>
                                                </div>
                                                <div class="col-sm-6 mt-1">
                                                    <p class="mb-0 m-grey-text">Name</p>
                                                </div>
                                                <div class="col-sm-6 mt-1">
                                                    <p class="mb-0 d-grey-text semi-bold">User Email:</p>
                                                </div>
                                                <div class="col-sm-6 mt-1">
                                                    <p class="mb-0 m-grey-text">user@email.com</p>
                                                </div>
                                                <div class="col-sm-6 mt-1">
                                                    <p class="mb-0 d-grey-text semi-bold">Company Name:</p>
                                                </div>
                                                <div class="col-sm-6 mt-1">
                                                    <p class="mb-0 m-grey-text">Company name</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1 text-right"><button class="site-btn l-blue-btn py-1 px-2">Export CSV</button></div>
                                        <div class="col-12 mt-1 d-xl-flex justify-content-between align-items-center">
                                            <div class="d-sm-flex align-items-center">
                                                <label  for="" class="mr-sm-1 d-grey-text bold mb-0">Sort By</label>
                                                <input class="dash-input p-1 w-172" type="date">
                                                <span class="mx-1 d-none d-sm-block">-</span>
                                                <input class="dash-input p-1 w-172" type="date">
                                            </div>
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link site-btn mt-xl-0 p-sm mt-1 blue-border-btn mr-sm-1 px-2 py-1" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Closed Tickets</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active site-btn mt-xl-0 p-sm mt-1 px-2 py-1" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Open Tickets</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="row">
                                                    <div class="col-12 d-md-flex align-items-center justify-content-between">
                                                        <div class="d-md-flex align-items-center">
                                                            <label  for="" class="mr-sm-1 mt-1 dash-label mb-0">Filter By</label>
                                                            <select class="dash-input p-1 mt-1 w-300">
                                                                <option value="">Recently Closed</option>
                                                            </select>
                                                        </div>
                                                        <div class="search-barr w-300 mt-1">
                                                            <input type="search" placeholder="Search" class="p-1 dash-input" name="" id="">
                                                            <button class="search-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.986" height="22.709" viewBox="0 0 18.986 22.709">
                                                                    <g id="Group_17" data-name="Group 17" transform="translate(-1501.261 -244)" opacity="0.64">
                                                                        <g id="Ellipse_12" data-name="Ellipse 12" transform="translate(1501.261 244)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2">
                                                                            <ellipse cx="8" cy="8.5" rx="8" ry="8.5" stroke="none"/>
                                                                            <ellipse cx="8" cy="8.5" rx="7" ry="7.5" fill="none"/>
                                                                        </g>
                                                                        <line id="Line_35" data-name="Line 35" x2="4.922" y2="6.152" transform="translate(1513.92 259.151)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2"/>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="maain-tabble table-responsive">
                                                            <table class="table table-striped table-bordered zero-configuration">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date Created</th>
                                                                        <th>Date Closed</th>
                                                                        <th>Total Hours</th>
                                                                        <th>Ticket#</th>
                                                                        <th>Ticket Title</th>
                                                                        <th>Company</th>
                                                                        <th>User Name</th>
                                                                        <th>Priority</th>
                                                                        <th>Category</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>30</td>
                                                                        <td>2131</td>
                                                                        <td>ABC Ticket</td>
                                                                        <td>Company Name</td>
                                                                        <td>Name</td>
                                                                        <td>Normal</td>
                                                                        <td>Support</td>
                                                                        <td>
                                                                            <div class="btn-group custom-dropdown ml-2 mb-1">
                                                                                <button type="button" class="btn transparent-btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu custom-dropdown"> 
                                                                                    <a href="#_" class="dropdown-item"><i class="fas fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>30</td>
                                                                        <td>2131</td>
                                                                        <td>ABC Ticket</td>
                                                                        <td>Company Name</td>
                                                                        <td>Name</td>
                                                                        <td>ASAP</td>
                                                                        <td>Question</td>
                                                                        <td>
                                                                            <div class="btn-group custom-dropdown ml-2 mb-1">
                                                                                <button type="button" class="btn transparent-btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu custom-dropdown"> 
                                                                                    <a href="#_" class="dropdown-item"><i class="fas fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-12 d-md-flex align-items-center justify-content-between">
                                                        <div class="d-md-flex align-items-center">
                                                            <label  for="" class="mr-sm-1 mt-1 dash-label mb-0">Filter By</label>
                                                            <select class="dash-input p-1 mt-1 w-300">
                                                                <option value="">Unresponded</option>
                                                                <option value="">Recently replied</option>
                                                            </select>
                                                        </div>
                                                        <div class="search-barr w-300 mt-1">
                                                            <input type="search" placeholder="Search" class="p-1 dash-input" name="" id="">
                                                            <button class="search-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.986" height="22.709" viewBox="0 0 18.986 22.709">
                                                                    <g id="Group_17" data-name="Group 17" transform="translate(-1501.261 -244)" opacity="0.64">
                                                                        <g id="Ellipse_12" data-name="Ellipse 12" transform="translate(1501.261 244)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2">
                                                                            <ellipse cx="8" cy="8.5" rx="8" ry="8.5" stroke="none"/>
                                                                            <ellipse cx="8" cy="8.5" rx="7" ry="7.5" fill="none"/>
                                                                        </g>
                                                                        <line id="Line_35" data-name="Line 35" x2="4.922" y2="6.152" transform="translate(1513.92 259.151)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2"/>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="maain-tabble table-responsive">
                                                            <table class="table table-striped table-bordered zero-configuration">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date Created</th>
                                                                        <th>Ticket#</th>
                                                                        <th>Ticket Title</th>
                                                                        <th>Company</th>
                                                                        <th>User Name</th>
                                                                        <th>Priority</th>
                                                                        <th>Category</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>2131</td>
                                                                        <td>ABC Ticket</td>
                                                                        <td>Company Name</td>
                                                                        <td>Name</td>
                                                                        <td>Normal</td>
                                                                        <td>Support</td>
                                                                        <td>Unassigned</td>
                                                                        <td>
                                                                            <div class="btn-group custom-dropdown ml-2 mb-1">
                                                                                <button type="button" class="btn transparent-btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu custom-dropdown"> 
                                                                                    <a href="#_" class="dropdown-item"><i class="fas fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>2131</td>
                                                                        <td>ABC Ticket</td>
                                                                        <td>Company Name</td>
                                                                        <td>Name</td>
                                                                        <td>ASAP</td>
                                                                        <td>Installation</td>
                                                                        <td>Ongoing</td>
                                                                        <td>
                                                                            <div class="btn-group custom-dropdown ml-2 mb-1">
                                                                                <button type="button" class="btn transparent-btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu custom-dropdown"> 
                                                                                    <a href="#_" class="dropdown-item"><i class="fas fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
            <div class="text-center">
                <img src="images/check.png" alt="" class="img-fluid mt-2">
                <h5 class="d-grey-text mt-1">Are you sure you want to make this user active?</h5>
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

