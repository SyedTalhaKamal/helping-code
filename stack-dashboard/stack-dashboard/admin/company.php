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
                        <div class="card my-sm-5 mx-2">
                            <div class="card-content collapse show">
                                <div class="card-dashboard">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="mb-2 semi-bold d-grey-text">Company</h5>
                                        </div>
                                    </div>
                                    <div class="row ml-0 mr-0">
                                        <div class="col-12 text-right">
                                            <button class="site-btn px-sm-3 px-2 py-1 mb-1 p-sm" onclick="location.href='add-company.php'">Add Company</button>
                                        </div>
                                        <div class="col-12 d-xl-flex align-items-center justify-content-between">
                                            <div class="d-sm-flex align-items-center">
                                                <label  for="" class="mr-sm-1 dash-label mb-0">Sort By</label>
                                                <input class="dash-input p-1 w-172" type="date">
                                                <span class="mx-1 d-none d-sm-block">-</span>
                                                <input class="dash-input p-1 w-172" type="date">
                                            </div>
                                            <div class="search-barr w-300 mt-1 mt-xl-0">
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
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="maain-tabble table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Date Created</th>
                                                    <th>Company Name</th>
                                                    <th>Company Admin Name</th>
                                                    <th>User Email</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>mm/dd/yyyy</td>
                                                    <td>Company Name</td>
                                                    <td>Username</td>
                                                    <td>user@email</td>
                                                    <td>Active</td>
                                                    <td>
                                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                                            <button type="button" class="btn transparent-btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu text-left custom-dropdown"> 
                                                                <a href="company-profile-details.php" class="dropdown-item d-flex align-items-center justify-content-start"><i class="fas mr-1 fa-eye"></i>View Profile</a>
                                                                <a href="#_" class="dropdown-item d-flex align-items-center justify-content-start">
                                                                    <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="35" viewBox="0 0 41 35">
                                                                        <defs>
                                                                            <filter id="Ellipse_25" x="0" y="0" width="35" height="35" filterUnits="userSpaceOnUse">
                                                                            <feOffset dy="3" input="SourceAlpha"/>
                                                                            <feGaussianBlur stdDeviation="3" result="blur"/>
                                                                            <feFlood flood-opacity="0.161"/>
                                                                            <feComposite operator="in" in2="blur"/>
                                                                            <feComposite in="SourceGraphic"/>
                                                                            </filter>
                                                                        </defs>
                                                                        <g id="Group_676" data-name="Group 676" transform="translate(-1422 -580)">
                                                                            <rect id="Rectangle_203" data-name="Rectangle 203" width="31" height="14" rx="7" transform="translate(1432 588)" fill="#d5d5d5"/>
                                                                            <g transform="matrix(1, 0, 0, 1, 1422, 580)" filter="url(#Ellipse_25)">
                                                                            <circle id="Ellipse_25-2" data-name="Ellipse 25" cx="8.5" cy="8.5" r="8.5" transform="translate(9 6)" fill="#fff"/>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    Inactivate
                                                                </a>
                                                                <a href="ticket-logs.php" class="dropdown-item ml-1 d-flex align-items-center justify-content-start">
                                                                    <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="19.562" height="19.562" viewBox="0 0 19.562 19.562">
                                                                        <g id="Group_53" data-name="Group 53" transform="translate(0.25 0.25)">
                                                                            <path id="Path_82" data-name="Path 82" d="M121.591,197.581a.372.372,0,1,0-.263-.109A.375.375,0,0,0,121.591,197.581Z" transform="translate(-116.706 -189.508)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_83" data-name="Path 83" d="M258.027,200.773a.373.373,0,1,0,.109.263A.376.376,0,0,0,258.027,200.773Z" transform="translate(-247.808 -193.193)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_84" data-name="Path 84" d="M292.764,166.409a.372.372,0,1,0-.264-.109A.375.375,0,0,0,292.764,166.409Z" transform="translate(-281.505 -159.496)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_85" data-name="Path 85" d="M17.945,9.159H16.907L18.735,7.33a1.117,1.117,0,0,0,0-1.58L17.077,4.092a.372.372,0,0,0-.526,0,1.117,1.117,0,0,1-1.58-1.58.372.372,0,0,0,0-.526L13.312.327a1.117,1.117,0,0,0-1.58,0L5.583,6.476A.372.372,0,0,0,6.11,7L12.259.854a.372.372,0,0,1,.526,0l1.422,1.421a1.862,1.862,0,0,0,2.58,2.58l1.421,1.421a.373.373,0,0,1,0,.526L15.854,9.159H14.221l1.223-1.223a.372.372,0,0,0,0-.526L11.654,3.618a.372.372,0,0,0-.527,0L5.586,9.159H1.117A1.118,1.118,0,0,0,0,10.276v2.346a.372.372,0,0,0,.372.372,1.117,1.117,0,1,1,0,2.234A.372.372,0,0,0,0,15.6v2.346a1.118,1.118,0,0,0,1.117,1.117H17.945a1.118,1.118,0,0,0,1.117-1.117V15.6a.372.372,0,0,0-.372-.372,1.117,1.117,0,1,1,0-2.234.372.372,0,0,0,.372-.372V10.276A1.118,1.118,0,0,0,17.945,9.159ZM11.39,4.408l3.265,3.265L13.168,9.159H11.694l1.091-1.092a.372.372,0,0,0-.526-.526L10.641,9.159h-4Zm6.928,7.879a1.862,1.862,0,0,0,0,3.648v2.011a.373.373,0,0,1-.372.372H1.117a.373.373,0,0,1-.372-.372V15.935a1.862,1.862,0,0,0,0-3.648V10.276A.373.373,0,0,1,1.117,9.9H17.945a.373.373,0,0,1,.372.372Z" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_86" data-name="Path 86" d="M197.136,345.632a.372.372,0,1,0-.263.109A.375.375,0,0,0,197.136,345.632Z" transform="translate(-189.184 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_87" data-name="Path 87" d="M296.135,345.632a.372.372,0,1,0-.263.109A.375.375,0,0,0,296.135,345.632Z" transform="translate(-284.498 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_88" data-name="Path 88" d="M246.636,345.632a.372.372,0,1,0-.263.109A.375.375,0,0,0,246.636,345.632Z" transform="translate(-236.841 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_89" data-name="Path 89" d="M147.372,345.741a.372.372,0,1,0-.263-.109A.375.375,0,0,0,147.372,345.741Z" transform="translate(-141.527 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_90" data-name="Path 90" d="M345.635,345.632a.372.372,0,1,0-.263.109A.375.375,0,0,0,345.635,345.632Z" transform="translate(-332.155 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_91" data-name="Path 91" d="M147.372,393.741h7.372a.372.372,0,1,0,0-.745h-7.372a.372.372,0,1,0,0,.745Z" transform="translate(-141.527 -378.364)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_92" data-name="Path 92" d="M183.692,441a.372.372,0,1,0,.263.109A.375.375,0,0,0,183.692,441Z" transform="translate(-176.495 -424.577)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_93" data-name="Path 93" d="M105.691,297H94.372a.372.372,0,0,0-.372.372v5.361a.372.372,0,0,0,.372.372h1.551a.372.372,0,1,0,0-.745H94.745v-4.617h10.574v4.617H99.274a.372.372,0,0,0,0,.745h6.417a.372.372,0,0,0,.372-.372v-5.361A.372.372,0,0,0,105.691,297Z" transform="translate(-90.5 -285.938)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                        </g>
                                                                    </svg>
                                                                    Ticket Log
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>mm/dd/yyyy</td>
                                                    <td>Company Name</td>
                                                    <td>Username</td>
                                                    <td>user@email</td>
                                                    <td>Inactive</td>
                                                    <td>
                                                        <div class="btn-group custom-dropdown ml-2 mb-1">
                                                            <button type="button" class="btn transparent-btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu text-left custom-dropdown"> 
                                                                <a href="company-profile-details.php" class="dropdown-item d-flex align-items-center justify-content-start"><i class="fas mr-1 fa-eye"></i>View Profile</a>
                                                                <a href="#_" class="dropdown-item d-flex align-items-center justify-content-start">
                                                                    <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="35" viewBox="0 0 41 35">
                                                                        <defs>
                                                                            <filter id="Ellipse_25" x="0" y="0" width="35" height="35" filterUnits="userSpaceOnUse">
                                                                            <feOffset dy="3" input="SourceAlpha"/>
                                                                            <feGaussianBlur stdDeviation="3" result="blur"/>
                                                                            <feFlood flood-opacity="0.161"/>
                                                                            <feComposite operator="in" in2="blur"/>
                                                                            <feComposite in="SourceGraphic"/>
                                                                            </filter>
                                                                        </defs>
                                                                        <g id="Group_676" data-name="Group 676" transform="translate(-1422 -580)">
                                                                            <rect id="Rectangle_203" data-name="Rectangle 203" width="31" height="14" rx="7" transform="translate(1432 588)" fill="#d5d5d5"/>
                                                                            <g transform="matrix(1, 0, 0, 1, 1422, 580)" filter="url(#Ellipse_25)">
                                                                            <circle id="Ellipse_25-2" data-name="Ellipse 25" cx="8.5" cy="8.5" r="8.5" transform="translate(9 6)" fill="#fff"/>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    Activate
                                                                </a>
                                                                <a href="ticket-logs.php" class="dropdown-item ml-1 d-flex align-items-center justify-content-start">
                                                                    <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="19.562" height="19.562" viewBox="0 0 19.562 19.562">
                                                                        <g id="Group_53" data-name="Group 53" transform="translate(0.25 0.25)">
                                                                            <path id="Path_82" data-name="Path 82" d="M121.591,197.581a.372.372,0,1,0-.263-.109A.375.375,0,0,0,121.591,197.581Z" transform="translate(-116.706 -189.508)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_83" data-name="Path 83" d="M258.027,200.773a.373.373,0,1,0,.109.263A.376.376,0,0,0,258.027,200.773Z" transform="translate(-247.808 -193.193)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_84" data-name="Path 84" d="M292.764,166.409a.372.372,0,1,0-.264-.109A.375.375,0,0,0,292.764,166.409Z" transform="translate(-281.505 -159.496)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_85" data-name="Path 85" d="M17.945,9.159H16.907L18.735,7.33a1.117,1.117,0,0,0,0-1.58L17.077,4.092a.372.372,0,0,0-.526,0,1.117,1.117,0,0,1-1.58-1.58.372.372,0,0,0,0-.526L13.312.327a1.117,1.117,0,0,0-1.58,0L5.583,6.476A.372.372,0,0,0,6.11,7L12.259.854a.372.372,0,0,1,.526,0l1.422,1.421a1.862,1.862,0,0,0,2.58,2.58l1.421,1.421a.373.373,0,0,1,0,.526L15.854,9.159H14.221l1.223-1.223a.372.372,0,0,0,0-.526L11.654,3.618a.372.372,0,0,0-.527,0L5.586,9.159H1.117A1.118,1.118,0,0,0,0,10.276v2.346a.372.372,0,0,0,.372.372,1.117,1.117,0,1,1,0,2.234A.372.372,0,0,0,0,15.6v2.346a1.118,1.118,0,0,0,1.117,1.117H17.945a1.118,1.118,0,0,0,1.117-1.117V15.6a.372.372,0,0,0-.372-.372,1.117,1.117,0,1,1,0-2.234.372.372,0,0,0,.372-.372V10.276A1.118,1.118,0,0,0,17.945,9.159ZM11.39,4.408l3.265,3.265L13.168,9.159H11.694l1.091-1.092a.372.372,0,0,0-.526-.526L10.641,9.159h-4Zm6.928,7.879a1.862,1.862,0,0,0,0,3.648v2.011a.373.373,0,0,1-.372.372H1.117a.373.373,0,0,1-.372-.372V15.935a1.862,1.862,0,0,0,0-3.648V10.276A.373.373,0,0,1,1.117,9.9H17.945a.373.373,0,0,1,.372.372Z" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_86" data-name="Path 86" d="M197.136,345.632a.372.372,0,1,0-.263.109A.375.375,0,0,0,197.136,345.632Z" transform="translate(-189.184 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_87" data-name="Path 87" d="M296.135,345.632a.372.372,0,1,0-.263.109A.375.375,0,0,0,296.135,345.632Z" transform="translate(-284.498 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_88" data-name="Path 88" d="M246.636,345.632a.372.372,0,1,0-.263.109A.375.375,0,0,0,246.636,345.632Z" transform="translate(-236.841 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_89" data-name="Path 89" d="M147.372,345.741a.372.372,0,1,0-.263-.109A.375.375,0,0,0,147.372,345.741Z" transform="translate(-141.527 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_90" data-name="Path 90" d="M345.635,345.632a.372.372,0,1,0-.263.109A.375.375,0,0,0,345.635,345.632Z" transform="translate(-332.155 -332.151)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_91" data-name="Path 91" d="M147.372,393.741h7.372a.372.372,0,1,0,0-.745h-7.372a.372.372,0,1,0,0,.745Z" transform="translate(-141.527 -378.364)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_92" data-name="Path 92" d="M183.692,441a.372.372,0,1,0,.263.109A.375.375,0,0,0,183.692,441Z" transform="translate(-176.495 -424.577)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                            <path id="Path_93" data-name="Path 93" d="M105.691,297H94.372a.372.372,0,0,0-.372.372v5.361a.372.372,0,0,0,.372.372h1.551a.372.372,0,1,0,0-.745H94.745v-4.617h10.574v4.617H99.274a.372.372,0,0,0,0,.745h6.417a.372.372,0,0,0,.372-.372v-5.361A.372.372,0,0,0,105.691,297Z" transform="translate(-90.5 -285.938)" fill="#d5d5d5" stroke="#d5d5d5" stroke-width="0.5"/>
                                                                        </g>
                                                                    </svg>
                                                                    Ticket Log
                                                                </a>
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

