<?php $title = "Vehicle Request";
$pg = 'drivers';
include('side-navbar.php');
?>


<div id="configuration">
  <div class="dashboard mb-5">
    <div class="container-fluid p-0 pb-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="dashboard-back-btn">
            <a href="vehicle-request.php">
              <i class="fas fa-chevron-left"></i>
              <h2 class="main-general-heading">Vehicle Request</h2>
            </a>
          </div>
        </div>
        <div class="col-lg-6 text-left text-lg-right mt-4 mt-lg-0">
          <a href="#_" class="main-transparent-btn h-40 px-5 mb-3 mb-sm-0">Drivers</a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="custom-card py-5 px-2 px-md-3 px-lg-4 px-xl-5">
            <div class="row mb-4">
              <div class="col-md-4 mb-2 mb-md-0">
                <h6 class="detail-title">Vehicle Type</h6>
              </div>
              <div class="col-md-8">
                <h6 class="detail-desp">ABC</h6>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-4 mb-2 mb-md-0">
                <h6 class="detail-title">Brand Name</h6>
              </div>
              <div class="col-md-8">
                <h6 class="detail-desp">ABC</h6>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-4 mb-2 mb-md-0">
                <h6 class="detail-title">Vehicle Name</h6>
              </div>
              <div class="col-md-8">
                <h6 class="detail-desp">ABC</h6>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-4 mb-2 mb-md-0">
                <h6 class="detail-title">Vehicle Color</h6>
              </div>
              <div class="col-md-8">
                <h6 class="detail-desp">ABC</h6>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-4 mb-2 mb-md-0">
                <h6 class="detail-title">License plate Number</h6>
              </div>
              <div class="col-md-8">
                <h6 class="detail-desp">123</h6>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-4 mb-2 mb-md-0">
                <h6 class="detail-title">Number of Seats</h6>
              </div>
              <div class="col-md-8">
                <h6 class="detail-desp">123</h6>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-4 mb-2 mb-md-0">
                <h6 class="detail-title">Image(s)</h6>
              </div>
              <div class="col-md-8">
                <div class="detail-image-box">
                  <div class="image-box">
                    <img src="assets/images/image-1.png" alt="">
                  </div>
                  <div class="image-box">
                    <img src="assets/images/image-2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-8">
                <div class="multi-color">
                  <a href="#_" class="green-btn mb-3 mb-sm-0 mr-0 mr-sm-3" data-toggle="modal" data-target="#accept">Accept</a>
                  <a href="#_" class="red-btn" data-toggle="modal" data-target="#reject">Reject</a>
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




<div class="modal fade" id="accept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <i class="fas fa-times"></i>
      </button>
      <div class="modal-body">
        <div class="modal-img text-center mb-4">
          <img src="assets/images/modal-question.png" alt="">
        </div>
        <p class="modal-general-text mx-auto mb-4 text-center">Are you sure you want to accept this request ?</p>
        <div class="modal-btns text-center">
          <a href="#_" class="general-btn fill-btn" data-dismiss="modal" aria-label="Close">yes</a>
          <a href="#_" class="general-btn transparent-btn" data-dismiss="modal" aria-label="Close">no</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <i class="fas fa-times"></i>
      </button>
      <div class="modal-body">
        <div class="modal-img text-center mb-4">
          <img src="assets/images/modal-question.png" alt="">
        </div>
        <p class="modal-general-text mx-auto mb-4 text-center">Are you sure you want to reject this request ?</p>
        <div class="modal-btns text-center">
          <a href="#_" class="general-btn fill-btn" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#rejectedreason">yes</a>
          <a href="#_" class="general-btn transparent-btn" data-dismiss="modal" aria-label="Close">no</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rejectedreason" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <i class="fas fa-times"></i>
      </button>
      <div class="modal-body">
        <h2 class="modal-general-heading text-center">Rejection Reason</h2>
        <label class="modal-custom-label my-3">Rejection Reason</label>
        <textarea rows="8" class="modal-custom-textarea mb-4" placeholder="Enter Rejected Reason"></textarea>
        <div class="modal-btns text-center">
          <a href="#_" class="general-btn fill-btn" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#rejected">ok</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rejected" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <i class="fas fa-times"></i>
      </button>
      <div class="modal-body">
        <div class="modal-img text-center mb-4">
          <img src="assets/images/modal-info.png" alt="">
        </div>
        <p class="modal-general-text mx-auto mb-4 text-center">No payment request available!</p>
        <div class="modal-btns text-center">
          <a href="#_" class="general-btn fill-btn" data-dismiss="modal" aria-label="Close">ok</a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>