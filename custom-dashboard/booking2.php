<?php $title = "Booking";
$pg = 'booking';
include('side-navbar.php');
?>


<div id="configuration">
  <div class="dashboard mb-5">
    <div class="container-fluid p-0 pb-5">
      <div class="row">
        <div class="col-lg-12">
              <h2 class="main-general-heading">Booking</h2>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="custom-card py-5 px-2 px-md-3 px-xl-5">
            <div class="row mt-2">
              <div class="col-lg-12">
                <div class="table-filter-div d-block d-sm-flex align-items-center">
                  <label for="" class="custom-label2 mr-2 mb-3 mb-sm-0">
                    Filter By
                  </label>
                  <select name="" id="" class="custom-select-dropdown h-40">
                    <option value="">Payment Pending</option>
                    <option value="">Approval Pending</option>
                    <option value="">Booked</option>
                    <option value="">Ongoing</option>
                    <option value="">Completed</option>
                    <option value="">Cancelled</option>
                  </select>
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
                        <th>User Name</th>
                        <th>Drvier Name</th>
                        <th>Trip Name</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>Marco Botton </td>
                        <td>ABC</td>
                        <td class="blue">Completed</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="booking-status1.php"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#Unblock"><i class="fas fa-ban mr-3 red-icon"></i>Block</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>Marco Botton </td>
                        <td>ABC</td>
                        <td class="green2">Booked</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="booking-status2.php"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#Unblock"><i class="fas fa-ban mr-3 red-icon"></i>Block</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>Marco Botton </td>
                        <td>ABC</td>
                        <td class="orange">Payment Pending</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="booking-status3.php"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#Unblock"><i class="fas fa-ban mr-3 red-icon"></i>Block</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>Marco Botton </td>
                        <td>ABC</td>
                        <td class="purple">Approved Pending</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#_"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#Unblock"><i class="fas fa-ban mr-3 red-icon"></i>Block</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>Marco Botton </td>
                        <td>ABC</td>
                        <td class="red">Cancelled By User</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="booking-status4.php"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#Unblock"><i class="fas fa-ban mr-3 red-icon"></i>Block</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>Marco Botton </td>
                        <td>ABC</td>
                        <td class="brown">On Going</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="user-detail.php"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#Unblock"><i class="fas fa-ban mr-3 red-icon"></i>Block</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="row align-items-center mt-3">
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


<?php include('footer.php'); ?>