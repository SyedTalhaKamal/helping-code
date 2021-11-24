<?php $title = "User";
$pg = 'user';
include('side-navbar.php');
?>


<div id="configuration">
  <div class="dashboard mb-5">
    <div class="container-fluid p-0 pb-5">
      <div class="row">
        <div class="col-lg-12">
              <h2 class="main-general-heading">Blocked Drivers</h2>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="custom-card py-5 px-2 px-md-3 px-xl-5">
          <div class="row">
              <div class="col-md-12">
                <h3 class="sub-general-heading">Wallet</h3>
                <div class="profile-detail-main mt-4">
                  <div class="profile-img">
                    <img src="assets/images/profile-img.png" alt="">
                  </div>
                  <div class="profile-detail ml-3">
                    <h4 class="mb-1">Mark carson</h4>
                    <h1>$1234</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="w-100 custom-table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Action</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Amount</th>
                        <th>Total Amount</th>
                        <th>Transaction ID </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Wallet Top Up</td>
                        <td>mm/dd/yyyy</td>
                        <td>13:00</td>
                        <td>$123</td>
                        <td>$123</td>
                        <td>ch_1Eg3mXLFMNZ</td>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Wallet Top Up</td>
                        <td>mm/dd/yyyy</td>
                        <td>13:00</td>
                        <td>$123</td>
                        <td>$123</td>
                        <td>ch_1Eg3mXLFMNZ</td>
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
        <p class="modal-general-text mx-auto mb-4 text-center">Are you sure you want to unblock this User ?</p>
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
        <p class="modal-general-text mx-auto mb-4 text-center">Abc User has been blocked</p>
        <div class="modal-btns text-center">
          <a href="#_" class="general-btn fill-btn" data-dismiss="modal" aria-label="Close">got it</a>
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
        <p class="modal-general-text mx-auto mb-4 text-center">Are you sure you want to block this User ?</p>
        <div class="modal-btns text-center">
          <a href="#_" class="general-btn fill-btn" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#blocked">yes</a>
          <a href="#_" class="general-btn transparent-btn" data-dismiss="modal" aria-label="Close">no</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>