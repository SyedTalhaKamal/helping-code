<?php $title = "Blocked User";
$pg = 'user';
include('side-navbar.php');
?>


<div id="configuration">
  <div class="dashboard mb-5">
    <div class="container-fluid p-0 pb-5">
      <div class="row">
        <div class="col-lg-6">
              <h2 class="main-general-heading">Blocked User</h2>
        </div>
        <div class="col-lg-6 text-left text-lg-right mt-4 mt-lg-0">
          <a href="#_" class="main-transparent-btn h-40 px-5 mb-3 mb-sm-0">Active Users</a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="custom-card py-5 px-2 px-md-3 px-xl-5">
            <div class="row mt-2 align-items-center">
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
                        <th>User</th>
                        <th>Email Address</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>abc@xyz.com</td>
                        <td>mm/dd/yyyy</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-redo-alt mr-3 yellow-icon"></i>Reload</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Mark Carson</td>
                        <td>abc@xyz.com</td>
                        <td>mm/dd/yyyy</td>
                        <td>
                          <div class="dropdown">
                            <i class="fas fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"><i class="fas fa-eye mr-3 yellow-icon"></i>View</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-redo-alt mr-3 yellow-icon"></i>Reload</a>
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