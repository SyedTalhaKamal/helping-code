<?php $title = "Drivers";
$pg = 'drivers';
include('side-navbar.php');
?>


<div id="configuration">
  <div class="dashboard mb-5">
    <div class="container-fluid p-0 pb-5">
      <div class="row">
        <div class="col-lg-3">
          <h2 class="main-general-heading">Drivers</h2>
        </div>
        <div class="col-lg-9 text-left text-lg-right mt-4 mt-lg-0">
          <a href="#_" class="main-transparent-btn h-40 px-4 mb-3 mb-sm-0">Vehicle Request</a>
          <a href="request-amount-release.php" class="main-transparent-btn h-40 px-4 mb-3 mb-sm-0">Request Amount</a>
          <a href="#_" class="main-transparent-btn h-40 px-4 mb-3 ">Blocked Drivers</a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="custom-card py-5 px-2 px-md-3 px-xl-5">
            <div class="row mt-2">
              <div class="col-lg-12 col-xl-5">
                <div class="table-filter-div d-block d-sm-flex align-items-center">
                  <label for="" class="custom-label2 mr-2 mb-3 mb-sm-0">
                    Filter By
                  </label>
                  <select name="" id="" class="custom-select-dropdown h-40">
                    <option value="">Active</option>
                    <option value="">Blocked</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12 col-xl-7 mt-4 mt-xl-0">
                <div class="table-filter-div d-block d-sm-flex align-items-center justify-content-start justify-content-md-end">
                  <label for="" class="custom-label2 mr-3">
                    Filter By
                  </label>
                  <input type="date" class="custom-input-date mr-3 pl-3 mt-3 mt-sm-0">
                  <input type="date" class="custom-input-date pl-3 mt-3 mt-sm-0">
                </div>
              </div>
            </div>
            <div class="row mt-4 align-items-center">
              <div class="col-md-6">
                <div class="table-filter-div d-flex align-items-center">
                  <label for="" class="custom-label2 mr-2">
                    Showing
                  </label>
                  <select name="" id="" class="custom-showentries-dropdown pl-2 mr-2">
                    <option value="">10</option>
                    <option value="">1</option>
                    <option value="">2</option>
                  </select>
                  <label for="" class="custom-label2">
                    Entries
                  </label>
                </div>
              </div>
              <div class="col-md-6 text-left text-md-right mt-3 mt-md-0">
                <input type="text" class="custom-input-search pl-4" placeholder="Search...">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="w-100 custom-table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Driver</th>
                        <th>Email Address</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>abc@xyz.com</td>
                        <td>mm/dd/yyyy</td>
                        <td class="green">Active</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="blocked-drivers.php"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#block"><i class="fas fa-ban mr-3 red-icon"></i>Block</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>abc@xyz.com</td>
                        <td>mm/dd/yyyy</td>
                        <td class="red">Inctive</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Unblock"><i class="fas fa-ban mr-3 red-icon"></i>Un Block</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="pagination-text mb-0">Showing 05 out of 20 Entries</p>
              </div>
              <div class="col-md-6">
                <div class="pagination-bar">
                  <ul class="mx-auto ml-md-auto mr-md-0">
                    <button type="button" class="previous">Previous</button>
                    <li class="active">
                      01
                    </li>
                    <li>
                      02
                    </li>
                    <li>
                      03
                    </li>
                    <li>
                      04
                    </li>
                    <button type="button" class="next">
                      Next
                    </button>
                  </ul>
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


<div class="modal fade" id="block" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <i class="fas fa-times"></i>
      </button>
      <div class="modal-body">
        <div class="modal-img text-center mb-4">
          <img src="assets/images/modal-question.png" alt="">
        </div>
        <p class="modal-general-text mx-auto mb-4 text-center">Are you sure you want to Unblock this Driver ?</p>
        <div class="modal-btns text-center">
          <a href="#_" class="general-btn fill-btn" data-dismiss="modal" aria-label="Close">yes</a>
          <a href="#_" class="general-btn transparent-btn" data-dismiss="modal" aria-label="Close">no</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Unblock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <i class="fas fa-times"></i>
      </button>
      <div class="modal-body">
        <div class="modal-img text-center mb-4">
          <img src="assets/images/modal-question.png" alt="">
        </div>
        <p class="modal-general-text mx-auto mb-4 text-center">Are you sure you want to block this Driver ?</p>
        <div class="modal-btns text-center">
          <a href="#_" class="general-btn fill-btn" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#blocked">yes</a>
          <a href="#_" class="general-btn transparent-btn" data-dismiss="modal" aria-label="Close">no</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="blocked" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <i class="fas fa-times"></i>
      </button>
      <div class="modal-body">
        <div class="modal-img text-center mb-4">
          <img src="assets/images/modal-question.png" alt="">
        </div>
        <p class="modal-general-text mx-auto mb-4 text-center">Abc Driver has been blocked</p>
        <div class="modal-btns text-center">
          <a href="#_" class="general-btn fill-btn" data-dismiss="modal" aria-label="Close">got it</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>