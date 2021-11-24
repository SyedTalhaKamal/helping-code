<?php $title = "Vehicle Request";
$pg = 'drivers';
include('side-navbar.php');
?>


<div id="configuration">
  <div class="dashboard mb-5">
    <div class="container-fluid p-0 pb-5">
      <div class="row">
        <div class="col-lg-12">
          <div class="dashboard-back-btn">
            <a href="drivers.php">
              <i class="fas fa-chevron-left"></i>
              <h2 class="main-general-heading">Drivers</h2>
            </a>
          </div>
        </div>
       
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="custom-card py-5 px-2 px-md-3 px-lg-4 px-xl-5">
            <div class="row">
              <div class="col-md-8 pb-2 pb-md-5 border-none border-md-bottom order-1 order-md-0">
                <div class="profile-detail-main">
                  <div class="profile-img">
                    <img src="assets/images/profile-img.png" alt="">
                  </div>
                  <div class="profile-detail ml-3">
                    <h4 class="mb-1">Mark carson</h4>
                    <a href="tel:+44123456678" class="phone">+44 123 456678</a>
                    <a href="mailto:email@email.com" class="mail">email@email.com</a>
                    <div class="star-icon mt-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4  order-0 order-md-1 mb-3 mb-md-0">
              <h5 class="active-inactive mt-4 pl-4 pl-md-0"><span></span>Active</h5>
              </div>
            </div>
            <div class="row mb-4 pl-4 pt-5">
              <div class="col-sm-6 col-lg-4 mb-2 mb-md-0">
                <h6 class="detail-title">Total Earning</h6>
              </div>
              <div class="col-sm-6 col-lg-8">
                <h6 class="detail-desp">$ 11,111</h6>
              </div>
            </div>
            <div class="row mb-4 pl-4">
              <div class="col-sm-6 col-lg-4 mb-2 mb-md-0">
                <h6 class="detail-title">No. of Trips Completed</h6>
              </div>
              <div class="col-sm-6 col-lg-8">
                <h6 class="detail-desp">45</h6>
              </div>
            </div>
            <div class="row mb-4 pl-4">
              <div class="col-sm-6 col-lg-4 mb-2 mb-md-0">
                <h6 class="detail-title">Vehicle Type</h6>
              </div>
              <div class="col-sm-6 col-lg-8">
                <h6 class="detail-desp">Coster</h6>
              </div>
            </div>
            <div class="row mb-4 pl-4">
              <div class="col-sm-6 col-lg-4 mb-2 mb-md-0">
                <h6 class="detail-title">Brand Name</h6>
              </div>
              <div class="col-sm-6 col-lg-8">
                <h6 class="detail-desp">ABC</h6>
              </div>
            </div>
            <div class="row mb-4 pl-4">
              <div class="col-sm-6 col-lg-4 mb-2 mb-md-0">
                <h6 class="detail-title">Vehicle Name</h6>
              </div>
              <div class="col-sm-6 col-lg-8">
                <h6 class="detail-desp">ABC</h6>
              </div>
            </div>
            <div class="row mb-4 pl-4">
              <div class="col-sm-6 col-lg-4 mb-2 mb-md-0">
                <h6 class="detail-title">License plate Number</h6>
              </div>
              <div class="col-sm-6 col-lg-8">
                <h6 class="detail-desp">134544 534 2</h6>
              </div>
            </div>
            <div class="row mb-4 pl-4">
              <div class="col-sm-6 col-lg-4 mb-2 mb-md-0">
                <h6 class="detail-title">Vehicle Color</h6>
              </div>
              <div class="col-sm-6 col-lg-8">
                <h6 class="detail-desp">Black</h6>
              </div>
            </div>
            
            <div class="row mb-5 pl-4">
              <div class="col-sm-6 col-lg-4 mb-2 mb-md-0">
                <h6 class="detail-title">No. of Seats</h6>
              </div>
              <div class="col-sm-6 col-lg-8">
                <h6 class="detail-desp">123</h6>
              </div>
            </div>
            <div class="row px-4">
              <div class="col-md-3">
              </div>
              <div class="col-md-9">
                <div class="custom-btn">
                <a href="#_" class="main-fill-btn h-50 px-5 mb-3 font-bold">PAY REQUEST</a>
                <a href="#_" class="main-transparent-btn h-50 px-5 mb-3 font-bold">DRIVER TIPS</a>
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