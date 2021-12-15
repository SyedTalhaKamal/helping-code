<?php 
  $pg='user';
  $title = "User Details";
  include('header.php');
  include('sidebar.php');
?>

<div class="app-content content dashboard">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="mt-sm-5 mx-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item blue-text"><a href="closed-tickets.php">Closed tickets</a></li>
                                <li class="breadcrumb-item blue-text active" aria-current="page">view details</li>
                            </ol>
                        </nav>
                        <div class="card d-block mt-2 mt-sm-0 mx-2">
                            <div class="card-content collapse show">
                                <div class="card-dashboard">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="mb-2 d-grey-text">Closed Tickets</h5>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <img src="images/img-placeholder.png" alt="" class="img-fluid">
                                                    <div class="media-body ml-1">
                                                        <p class="p-md mb-0 d-blue-text bold">User Name</p>
                                                        <p class="p-sm mb-0 blue-text bold">Company Name</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-sm-flex mt-1 mt-md-0">
                                                        <p class="mb-0 semi-bold"><span class="d-blue-text">Date: </span> mm/dd/yyyy</p>
                                                        <p class="mb-0 ml-sm-1 semi-bold"><span class="d-blue-text">Category: </span> Support</p>
                                                    </div>
                                                    <div class="d-sm-flex mt-1 mt-md-0">
                                                        <p class="mb-0 semi-bold"><span class="d-blue-text">Date Closed: </span> mm/dd/yyyy</p>
                                                        <p class="mb-0 ml-sm-1 semi-bold"><span class="d-blue-text">Total Hours: </span> 30</p>
                                                    </div>
                                                    <p class="mb-0 text-md-right semi-bold"><span class="d-blue-text">Rate: </span> Default</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <h5 class="mb-0 d-blue-text">Ticket no. <span class="blue-text"> 1321</span></h5>
                                                <p class="mb-0 semi-bold green-text">Completed</p>
                                            </div>
                                            <hr>
                                            <p class="p-lg mb-0 semi-bold d-blue-text">Ticket Title</p>
                                            <p class="mb-0 medium d-grey-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                            <div class="d-flex align-items-center mt-1">
                                                <a href="#_" class="d-inline-block bold blue-text mr-1">Attachments</a>
                                                <a href="#_" class="blue-text bold">Attachments</a>
                                            </div>
                                            <hr>
                                            <p class="p-lg mb-0 semi-bold d-blue-text">Followers</p>
                                            <p class="mb-0 medium d-grey-text">User Name</p>
                                            <p class="mb-0 medium d-grey-text">User Name</p>
                                            <p class="mb-0 medium d-grey-text">User Name</p>
                                            <hr>
                                            <div class="d-md-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="p-lg mb-0 semi-bold d-blue-text">Workers</p>
                                                    <p class="mb-0 medium d-grey-text">User Name</p>
                                                    <p class="mb-0 medium d-grey-text">User Name</p>
                                                    <p class="mb-0 medium d-grey-text">User Name</p>
                                                </div>
                                                <div>
                                                    <p class="p-lg mb-0 semi-bold d-blue-text">Rate</p>
                                                    <p class="mb-0 medium d-grey-text">$120/hr <a href="#_" class="blue-text p-xs"> Edit</a></p>
                                                    <p class="mb-0 medium d-grey-text">$120/hr <a href="#_" class="blue-text p-xs"> Edit</a></p>
                                                    <p class="mb-0 medium d-grey-text">$120/hr <a href="#_" class="blue-text p-xs"> Edit</a></p>
                                                </div>
                                                <div>
                                                    <p class="p-lg mb-0 semi-bold d-blue-text">Total Hours</p>
                                                    <p class="mb-0 medium d-grey-text"><span class="semi-bold">Total Hours: </span> 10</p>
                                                    <p class="mb-0 medium d-grey-text"><span class="semi-bold">Total Hours: </span> 10</p>
                                                    <p class="mb-0 medium d-grey-text"><span class="semi-bold">Total Hours: </span> 10</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <p class="p-lg mb-0 semi-bold d-blue-text">Internal Reply</p>
                                            <div class="reply-cont mt-1">
                                                <textarea name="" placeholder="Subject" id="" cols="30" rows="10" class="dash-input shadow-none p-1"></textarea>
                                                <div class="reply-bottom">
                                                    <button class="transparent-btn mr-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28.974" height="27.563" viewBox="0 0 28.974 27.563">
                                                            <g id="Group_604" data-name="Group 604" transform="translate(0 -11.486)">
                                                                <g id="Group_603" data-name="Group 603" transform="translate(0 11.486)">
                                                                    <path id="Path_258" data-name="Path 258" d="M26.518,13.816a8.168,8.168,0,0,0-11.427,0L1.776,27.132A6.238,6.238,0,0,0,10.6,35.954L22.655,23.9a4.014,4.014,0,0,0-5.676-5.676L5.446,29.754a1.048,1.048,0,0,0,1.483,1.482L18.461,19.7a1.918,1.918,0,0,1,2.711,2.711L9.115,34.472a4.141,4.141,0,0,1-5.857-5.857L16.574,15.3a6.074,6.074,0,0,1,8.592,8.589L11.851,37.2a1.048,1.048,0,1,0,1.478,1.478L26.644,25.367A8.168,8.168,0,0,0,26.518,13.816Z" transform="translate(0 -11.486)" fill="#003f77"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <button class="transparent-btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.786" height="22.413" viewBox="0 0 25.786 22.413">
                                                            <g id="Group_602" data-name="Group 602" transform="translate(-0.001 -33.492)">
                                                                <path id="Path_257" data-name="Path 257" d="M25.77,34.407a.756.756,0,0,0-1.008-.865L.487,42.809a.755.755,0,0,0,0,1.41L7.3,46.853v8.3a.755.755,0,0,0,1.43.34l2.82-5.6L18.437,55a.756.756,0,0,0,1.173-.386c6.426-21.07,6.148-20.153,6.16-20.206Zm-5.992,2.655L7.952,45.484,2.864,43.519ZM8.814,46.725l10.308-7.341c-8.87,9.357-8.406,8.864-8.445,8.917-.057.077.1-.224-1.863,3.671Zm9.663,6.424-6.058-4.5L23.373,37.1Z" fill="#003f77"/>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Messages</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Attachments</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Timeline</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Comments</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content mt-3" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="message-card py-1 px-2">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="card mb-0">
                                                                <div class="card-header py-0" id="headingOne">
                                                                    <button class="btn d-flex align-items-center w-100 justify-content-between flex-wrap transparent-btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                        <div class="media align-items-center">
                                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                                            <div class="media-body ml-1">
                                                                                <p class="p-sm mb-0 medium d-grey-text">User ABC</p>
                                                                                <p class="p-xs mb-0 medium d-grey-text">1 hour ago</p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#_" class="p-md blue-text bold d-block">Reply ABC</a>
                                                                        <img src="images/accord-down.png" alt="" class="img-fluid accord-down">
                                                                        <img src="images/accord-up.png" alt="" class="img-fluid accord-up">
                                                                    </button>
                                                                    <hr>
                                                                </div>

                                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                    <div class="card-body pl-4 py-0">
                                                                        <p class="p-sm d-grey-text medium mb-1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
                                                                        <a href="#_" class="p-sm blue-text">Attachments</a>
                                                                    </div>
                                                                    <hr class="mx-2">
                                                                </div>
                                                            </div>
                                                            <div class="card mb-0">
                                                                <div class="card-header py-0" id="headingTwo">
                                                                    <button class="btn d-flex align-items-center w-100 justify-content-between flex-wrap transparent-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        <div class="media align-items-center">
                                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                                            <div class="media-body ml-1">
                                                                                <p class="p-sm mb-0 medium d-grey-text">User ABC</p>
                                                                                <p class="p-xs mb-0 medium d-grey-text">1 hour ago</p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#_" class="p-md blue-text bold d-block">Reply ABC</a>
                                                                        <img src="images/accord-down.png" alt="" class="img-fluid accord-down">
                                                                        <img src="images/accord-up.png" alt="" class="img-fluid accord-up">
                                                                    </button>
                                                                    <hr>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                    <div class="card-body pl-4 py-0">
                                                                        <p class="p-sm d-grey-text medium mb-1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
                                                                        <a href="#_" class="p-sm blue-text">Attachments</a>
                                                                    </div>
                                                                    <hr class="mx-2">
                                                                </div>
                                                            </div>
                                                            <div class="card mb-0">
                                                                <div class="card-header py-0" id="headingThree">
                                                                    <button class="btn d-flex align-items-center w-100 justify-content-between flex-wrap transparent-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        <div class="media align-items-center">
                                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                                            <div class="media-body ml-1">
                                                                                <p class="p-sm mb-0 medium d-grey-text">User ABC</p>
                                                                                <p class="p-xs mb-0 medium d-grey-text">1 hour ago</p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#_" class="p-md blue-text bold d-block">Reply ABC</a>
                                                                        <img src="images/accord-down.png" alt="" class="img-fluid accord-down">
                                                                        <img src="images/accord-up.png" alt="" class="img-fluid accord-up">
                                                                    </button>
                                                                    <hr>
                                                                </div>
                                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                                    <div class="card-body pl-4 py-0">
                                                                        <p class="p-sm d-grey-text medium mb-1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
                                                                        <a href="#_" class="p-sm blue-text">Attachments</a>
                                                                    </div>
                                                                    <hr class="mx-2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="message-card py-1 px-2">
                                                        <div class="accordion" id="accordionExample2">
                                                            <div class="card mb-0">
                                                                <div class="card-header py-0" id="headingFour">
                                                                    <button class="btn d-flex align-items-center w-100 justify-content-between flex-wrap transparent-btn text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                                                        <div class="media align-items-center">
                                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                                            <div class="media-body ml-1">
                                                                                <p class="p-sm mb-0 medium d-grey-text">User ABC</p>
                                                                                <p class="p-xs mb-0 medium d-grey-text">1 hour ago</p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#_" class="p-md blue-text bold d-block">Reply ABC</a>
                                                                        <img src="images/accord-down.png" alt="" class="img-fluid accord-down">
                                                                        <img src="images/accord-up.png" alt="" class="img-fluid accord-up">
                                                                    </button>
                                                                    <hr>
                                                                </div>

                                                                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample2">
                                                                    <div class="card-body pl-4 d-flex align-items-center flex-wrap py-0">
                                                                        <div class="tab-img">
                                                                            <img src="images/tab-img.png" alt="" class="img-fluid">
                                                                            <button class="transparent-btn"><i class="fas fa-download blue-text"></i></button>
                                                                        </div>
                                                                        <div class="tab-img">
                                                                            <img src="images/tab-img.png" alt="" class="img-fluid">
                                                                            <button class="transparent-btn"><i class="fas fa-download blue-text"></i></button>
                                                                        </div>
                                                                        <div class="tab-img">
                                                                            <img src="images/tab-img.png" alt="" class="img-fluid">
                                                                            <button class="transparent-btn"><i class="fas fa-download blue-text"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mx-2">
                                                                </div>
                                                            </div>
                                                            <div class="card mb-0">
                                                                <div class="card-header py-0" id="headingFive">
                                                                    <button class="btn d-flex align-items-center w-100 justify-content-between flex-wrap transparent-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                        <div class="media align-items-center">
                                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                                            <div class="media-body ml-1">
                                                                                <p class="p-sm mb-0 medium d-grey-text">User ABC</p>
                                                                                <p class="p-xs mb-0 medium d-grey-text">1 hour ago</p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#_" class="p-md blue-text bold d-block">Reply ABC</a>
                                                                        <img src="images/accord-down.png" alt="" class="img-fluid accord-down">
                                                                        <img src="images/accord-up.png" alt="" class="img-fluid accord-up">
                                                                    </button>
                                                                    <hr>
                                                                </div>
                                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample2">
                                                                    <div class="card-body pl-4 d-flex align-items-center flex-wrap py-0">
                                                                        <div class="tab-img">
                                                                            <img src="images/tab-img.png" alt="" class="img-fluid">
                                                                            <button class="transparent-btn"><i class="fas fa-download blue-text"></i></button>
                                                                        </div>
                                                                        <div class="tab-img">
                                                                            <img src="images/tab-img.png" alt="" class="img-fluid">
                                                                            <button class="transparent-btn"><i class="fas fa-download blue-text"></i></button>
                                                                        </div>
                                                                        <div class="tab-img">
                                                                            <img src="images/tab-img.png" alt="" class="img-fluid">
                                                                            <button class="transparent-btn"><i class="fas fa-download blue-text"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mx-2">
                                                                </div>
                                                            </div>
                                                            <div class="card mb-0">
                                                                <div class="card-header py-0" id="headingSix">
                                                                    <button class="btn d-flex align-items-center w-100 justify-content-between flex-wrap transparent-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                        <div class="media align-items-center">
                                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                                            <div class="media-body ml-1">
                                                                                <p class="p-sm mb-0 medium d-grey-text">User ABC</p>
                                                                                <p class="p-xs mb-0 medium d-grey-text">1 hour ago</p>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#_" class="p-md blue-text bold d-block">Reply ABC</a>
                                                                        <img src="images/accord-down.png" alt="" class="img-fluid accord-down">
                                                                        <img src="images/accord-up.png" alt="" class="img-fluid accord-up">
                                                                    </button>
                                                                    <hr>
                                                                </div>
                                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample2">
                                                                    <div class="card-body pl-4 d-flex align-items-center flex-wrap py-0">
                                                                        <div class="tab-img">
                                                                            <img src="images/tab-img.png" alt="" class="img-fluid">
                                                                            <button class="transparent-btn"><i class="fas fa-download blue-text"></i></button>
                                                                        </div>
                                                                        <div class="tab-img">
                                                                            <img src="images/tab-img.png" alt="" class="img-fluid">
                                                                            <button class="transparent-btn"><i class="fas fa-download blue-text"></i></button>
                                                                        </div>
                                                                        <div class="tab-img">
                                                                            <img src="images/tab-img.png" alt="" class="img-fluid">
                                                                            <button class="transparent-btn"><i class="fas fa-download blue-text"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mx-2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                    <div class="message-card py-1 px-2">
                                                        <div class="d-md-flex justify-content-between align-items-center">
                                                            <p class="mb-0 semi-bold d-blue-text">Total Time Spent: <span class="d-grey-text"> 10 hours</span></p>
                                                            <div class="d-sm-flex align-items-center">
                                                                <input class="dash-input p-1 w-172" type="date">
                                                                <span class="mx-1 d-none d-sm-block">-</span>
                                                                <input class="dash-input p-1 w-172" type="date">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="d-sm-flex align-items-center">
                                                            <button class="transparent-btn mr-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="35" viewBox="0 0 32 35">
                                                                    <g id="Group_631" data-name="Group 631" transform="translate(-798 -1829)">
                                                                        <circle id="Ellipse_21" data-name="Ellipse 21" cx="16" cy="16" r="16" transform="translate(798 1830)" fill="#0070d4"/>
                                                                        <text id="_" data-name="+" transform="translate(807 1855)" fill="#fff" font-size="25" font-family="Poppins-Medium, Poppins" font-weight="500"><tspan x="0" y="0">+</tspan></text>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                            <p class="semi-bold d-grey-text mr-1 mb-0">Add Hours:</p>
                                                            <input class="dash-input mr-1 p-1 w-172" type="text">
                                                            <p class="semi-bold d-grey-text mr-1 mb-0">Hours</p>
                                                            <button class="site-btn p-sm bold px-2 py-1">Add</button>
                                                        </div>
                                                        <hr>
                                                        <div class="media d-block d-md-flex">
                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                            <div class="media-body ml-md-1 mt-1">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <p class="semi-bold mb-0 d-blue-text">Admin</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <button class="transparent-btn mr-1"><i class="fas fa-edit p-lg blue-text"></i></button>
                                                                        <button class="transparent-btn">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26">
                                                                                <path id="Fill_199" data-name="Fill 199" d="M16.923,26H5.077a3.324,3.324,0,0,1-3.385-3.25V8.125A1.662,1.662,0,0,1,0,6.5V4.875A1.662,1.662,0,0,1,1.692,3.25H6.769V1.625A1.661,1.661,0,0,1,8.461,0h5.077a1.661,1.661,0,0,1,1.692,1.625V3.25h5.077A1.662,1.662,0,0,1,22,4.875V6.5a1.661,1.661,0,0,1-1.692,1.625V22.75A3.324,3.324,0,0,1,16.923,26ZM3.384,8.125V22.75a1.662,1.662,0,0,0,1.693,1.625H16.923a1.661,1.661,0,0,0,1.692-1.625V8.125Zm-.846-3.25a.813.813,0,1,0,0,1.625H19.462a.813.813,0,1,0,0-1.625Zm6.769-3.25a.831.831,0,0,0-.846.812V3.25h5.076V2.437a.831.831,0,0,0-.846-.812ZM15.231,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,15.231,22.75ZM11,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.693,0v9.75A.831.831,0,0,1,11,22.75Zm-4.23,0a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,6.769,22.75Z" fill="red"/>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0 semi-bold d-grey-text">Date: <span class="grey-text ml-3"> 10 hours</span></p>
                                                                <div class="d-sm-flex align-items-center">
                                                                    <p class="semi-bold d-grey-text mr-1 mb-0">Hours Spent:</p>
                                                                    <input class="dash-input mr-1 p-1 w-172" type="text">
                                                                    <p class="semi-bold d-grey-text mr-1 mb-0">Hours</p>
                                                                    <button class="site-btn p-sm bold px-2 py-1">Add</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="media d-block d-md-flex">
                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                            <div class="media-body ml-md-1 mt-1">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <p class="semi-bold mb-0 d-blue-text">Admin</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <button class="transparent-btn mr-1"><i class="fas fa-edit p-lg blue-text"></i></button>
                                                                        <button class="transparent-btn">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26">
                                                                                <path id="Fill_199" data-name="Fill 199" d="M16.923,26H5.077a3.324,3.324,0,0,1-3.385-3.25V8.125A1.662,1.662,0,0,1,0,6.5V4.875A1.662,1.662,0,0,1,1.692,3.25H6.769V1.625A1.661,1.661,0,0,1,8.461,0h5.077a1.661,1.661,0,0,1,1.692,1.625V3.25h5.077A1.662,1.662,0,0,1,22,4.875V6.5a1.661,1.661,0,0,1-1.692,1.625V22.75A3.324,3.324,0,0,1,16.923,26ZM3.384,8.125V22.75a1.662,1.662,0,0,0,1.693,1.625H16.923a1.661,1.661,0,0,0,1.692-1.625V8.125Zm-.846-3.25a.813.813,0,1,0,0,1.625H19.462a.813.813,0,1,0,0-1.625Zm6.769-3.25a.831.831,0,0,0-.846.812V3.25h5.076V2.437a.831.831,0,0,0-.846-.812ZM15.231,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,15.231,22.75ZM11,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.693,0v9.75A.831.831,0,0,1,11,22.75Zm-4.23,0a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,6.769,22.75Z" fill="red"/>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0 semi-bold d-grey-text">Date: <span class="grey-text ml-3"> 10 hours</span></p>
                                                                <div class="d-sm-flex align-items-center">
                                                                    <p class="semi-bold d-grey-text mr-1 mb-0">Hours Spent:</p>
                                                                    <input class="dash-input mr-1 p-1 w-172" type="text">
                                                                    <p class="semi-bold d-grey-text mr-1 mb-0">Hours</p>
                                                                    <button class="site-btn p-sm bold px-2 py-1">Add</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="media d-block d-md-flex">
                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                            <div class="media-body ml-md-1 mt-1">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <p class="semi-bold mb-0 d-blue-text">Admin</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <button class="transparent-btn mr-1"><i class="fas fa-edit p-lg blue-text"></i></button>
                                                                        <button class="transparent-btn">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26">
                                                                                <path id="Fill_199" data-name="Fill 199" d="M16.923,26H5.077a3.324,3.324,0,0,1-3.385-3.25V8.125A1.662,1.662,0,0,1,0,6.5V4.875A1.662,1.662,0,0,1,1.692,3.25H6.769V1.625A1.661,1.661,0,0,1,8.461,0h5.077a1.661,1.661,0,0,1,1.692,1.625V3.25h5.077A1.662,1.662,0,0,1,22,4.875V6.5a1.661,1.661,0,0,1-1.692,1.625V22.75A3.324,3.324,0,0,1,16.923,26ZM3.384,8.125V22.75a1.662,1.662,0,0,0,1.693,1.625H16.923a1.661,1.661,0,0,0,1.692-1.625V8.125Zm-.846-3.25a.813.813,0,1,0,0,1.625H19.462a.813.813,0,1,0,0-1.625Zm6.769-3.25a.831.831,0,0,0-.846.812V3.25h5.076V2.437a.831.831,0,0,0-.846-.812ZM15.231,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,15.231,22.75ZM11,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.693,0v9.75A.831.831,0,0,1,11,22.75Zm-4.23,0a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,6.769,22.75Z" fill="red"/>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0 semi-bold d-grey-text">Date: <span class="grey-text ml-3"> 10 hours</span></p>
                                                                <div class="d-sm-flex align-items-center">
                                                                    <p class="semi-bold d-grey-text mr-1 mb-0">Hours Spent:</p>
                                                                    <input class="dash-input mr-1 p-1 w-172" type="text">
                                                                    <p class="semi-bold d-grey-text mr-1 mb-0">Hours</p>
                                                                    <button class="site-btn p-sm bold px-2 py-1">Add</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                                                    <div class="message-card py-1 px-2">
                                                        <div class="media d-block d-sm-flex">
                                                            <p class="semi-bold d-grey-text mb-0">Add Comment:</p>
                                                            <div class="media-body ml-sm-1 mt-sm-0 mt-1">
                                                                <textarea name="" id="" cols="30" rows="4" class="p-1 dash-input"></textarea>
                                                                <div class="text-right mt-1">
                                                                    <button class="site-btn px-3 py-1">Add Comments</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="media d-block d-md-flex">
                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                            <div class="media-body ml-md-1 mt-1">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <p class="semi-bold mb-0 d-blue-text">Worker A</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <button class="transparent-btn mr-1"><i class="fas fa-edit p-lg blue-text"></i></button>
                                                                        <button class="transparent-btn">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26">
                                                                                <path id="Fill_199" data-name="Fill 199" d="M16.923,26H5.077a3.324,3.324,0,0,1-3.385-3.25V8.125A1.662,1.662,0,0,1,0,6.5V4.875A1.662,1.662,0,0,1,1.692,3.25H6.769V1.625A1.661,1.661,0,0,1,8.461,0h5.077a1.661,1.661,0,0,1,1.692,1.625V3.25h5.077A1.662,1.662,0,0,1,22,4.875V6.5a1.661,1.661,0,0,1-1.692,1.625V22.75A3.324,3.324,0,0,1,16.923,26ZM3.384,8.125V22.75a1.662,1.662,0,0,0,1.693,1.625H16.923a1.661,1.661,0,0,0,1.692-1.625V8.125Zm-.846-3.25a.813.813,0,1,0,0,1.625H19.462a.813.813,0,1,0,0-1.625Zm6.769-3.25a.831.831,0,0,0-.846.812V3.25h5.076V2.437a.831.831,0,0,0-.846-.812ZM15.231,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,15.231,22.75ZM11,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.693,0v9.75A.831.831,0,0,1,11,22.75Zm-4.23,0a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,6.769,22.75Z" fill="red"/>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0 semi-bold d-grey-text">Date: <span class="grey-text ml-4"> 10 hours</span></p>
                                                                <p class="mb-0 semi-bold d-grey-text">Comment: <span class="grey-text ml-1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</span></p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="media d-block d-md-flex">
                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                            <div class="media-body ml-md-1 mt-1">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <p class="semi-bold mb-0 d-blue-text">Worker A</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <button class="transparent-btn mr-1"><i class="fas fa-edit p-lg blue-text"></i></button>
                                                                        <button class="transparent-btn">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26">
                                                                                <path id="Fill_199" data-name="Fill 199" d="M16.923,26H5.077a3.324,3.324,0,0,1-3.385-3.25V8.125A1.662,1.662,0,0,1,0,6.5V4.875A1.662,1.662,0,0,1,1.692,3.25H6.769V1.625A1.661,1.661,0,0,1,8.461,0h5.077a1.661,1.661,0,0,1,1.692,1.625V3.25h5.077A1.662,1.662,0,0,1,22,4.875V6.5a1.661,1.661,0,0,1-1.692,1.625V22.75A3.324,3.324,0,0,1,16.923,26ZM3.384,8.125V22.75a1.662,1.662,0,0,0,1.693,1.625H16.923a1.661,1.661,0,0,0,1.692-1.625V8.125Zm-.846-3.25a.813.813,0,1,0,0,1.625H19.462a.813.813,0,1,0,0-1.625Zm6.769-3.25a.831.831,0,0,0-.846.812V3.25h5.076V2.437a.831.831,0,0,0-.846-.812ZM15.231,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,15.231,22.75ZM11,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.693,0v9.75A.831.831,0,0,1,11,22.75Zm-4.23,0a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,6.769,22.75Z" fill="red"/>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0 semi-bold d-grey-text">Date: <span class="grey-text ml-4"> 10 hours</span></p>
                                                                <p class="mb-0 semi-bold d-grey-text">Comment: <span class="grey-text ml-1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</span></p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="media d-block d-md-flex">
                                                            <img src="images/tab-placeholder.png" alt="" class="img-fluid tab-placeholder">
                                                            <div class="media-body ml-md-1 mt-1">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <p class="semi-bold mb-0 d-blue-text">Worker A</p>
                                                                    <div class="d-flex align-items-center">
                                                                        <button class="transparent-btn mr-1"><i class="fas fa-edit p-lg blue-text"></i></button>
                                                                        <button class="transparent-btn">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26">
                                                                                <path id="Fill_199" data-name="Fill 199" d="M16.923,26H5.077a3.324,3.324,0,0,1-3.385-3.25V8.125A1.662,1.662,0,0,1,0,6.5V4.875A1.662,1.662,0,0,1,1.692,3.25H6.769V1.625A1.661,1.661,0,0,1,8.461,0h5.077a1.661,1.661,0,0,1,1.692,1.625V3.25h5.077A1.662,1.662,0,0,1,22,4.875V6.5a1.661,1.661,0,0,1-1.692,1.625V22.75A3.324,3.324,0,0,1,16.923,26ZM3.384,8.125V22.75a1.662,1.662,0,0,0,1.693,1.625H16.923a1.661,1.661,0,0,0,1.692-1.625V8.125Zm-.846-3.25a.813.813,0,1,0,0,1.625H19.462a.813.813,0,1,0,0-1.625Zm6.769-3.25a.831.831,0,0,0-.846.812V3.25h5.076V2.437a.831.831,0,0,0-.846-.812ZM15.231,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,15.231,22.75ZM11,22.75a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.693,0v9.75A.831.831,0,0,1,11,22.75Zm-4.23,0a.831.831,0,0,1-.846-.812v-9.75a.847.847,0,0,1,1.692,0v9.75A.831.831,0,0,1,6.769,22.75Z" fill="red"/>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0 semi-bold d-grey-text">Date: <span class="grey-text ml-4"> 10 hours</span></p>
                                                                <p class="mb-0 semi-bold d-grey-text">Comment: <span class="grey-text ml-1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</span></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
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
<div class="modal fade takeJob" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <div class="text-center">
                <img src="images/question.png" alt="" class="img-fluid">
                <h5 class="d-grey-text mt-1">Are you sure you want to take on this job?</h5>
                <div class="d-sm-flex align-items-center justify-content-center mt-3">
                    <button class="px-3 py-1 site-btn blue-border-btn mr-sm-1" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="px-3 py-1 site-btn" data-toggle="modal" data-target=".jobTaken" data-dismiss="modal" aria-label="Close">Take Job</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade jobTaken" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <div class="text-center">
                <img src="images/check.png" alt="" class="img-fluid mt-2">
                <h5 class="mt-1">This ticket has been added into your assigned tickets log.</h5>
                <div class="d-sm-flex align-items-center justify-content-center mt-3">
                    <button class="px-3 py-1 site-btn blue-border-btn mr-sm-1" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="px-1 py-1 site-btn" data-dismiss="modal" aria-label="Close">My Assigned Tickets</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade assignWorkers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content admin-modal">
            <div class="text-center">
                <img src="images/question.png" alt="" class="img-fluid">
                <h5 class="d-grey-text mt-1">Are you sure you want to assign the ticket to these workers?</h5>
                <ul class="d-inline-block">
                    <li class="semi-bold blue-text">Worker A</li>
                    <li class="semi-bold blue-text">Worker B</li>
                    <li class="semi-bold blue-text">Worker C</li>
                </ul>
                <div class="d-sm-flex align-items-center justify-content-center mt-3">
                    <button class="px-3 py-1 site-btn blue-border-btn mr-sm-1" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="px-1 py-1 site-btn" data-dismiss="modal" aria-label="Close">Assign Workers</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>

