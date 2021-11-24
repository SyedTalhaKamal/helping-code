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
              <h2 class="main-general-heading">Users</h2>
            </a>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="custom-card py-5 px-2 px-md-3 px-lg-4 px-xl-5">
            <div class="row mb-5">
              <div class="col-md-6">
                <h3 class="sub-general-heading">View Trips</h3>
              </div>
              <div class="col-md-6 mt-3 mt-md-0">
                <div class="table-filter-div d-block d-sm-flex align-items-center justify-content-start justify-content-md-end">
                  <label for="" class="custom-label2 mr-2 mb-2 mb-sm-0">
                    Filter By
                  </label>
                  <select name="" id="" class="custom-select-dropdown h-40">
                    <option value="">All</option>
                    <option value="">Payment Pending</option>
                    <option value="">Booked</option>
                    <option value="">Approval Pending</option>
                    <option value="">Ongoing</option>
                    <option value="">Completed</option>
                    <option value="">Cancelled by user</option>
                    <option value="">Cancelled by driver</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-0 mb-md-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <div class="view-trips-main">
                  <div class="row no-gutters">
                    <div class="col-xl-3">
                      <div class="img-box ml-3">
                        <img src="assets/images/trips-map-img.png" class="img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-xl-9">
                      <div class="row pl-3 pl-xl-0">
                        <div class="col-sm-5">
                          <h4 class="trip-title mt-3">ABC Trip</h4>
                        </div>
                        <div class="col-sm-7 text-right">
                          <h4 class="panding-payment">Payment Pending</h4>
                        </div>
                      </div>
                      <div class="row mt-2 pl-2 pl-sm-3 pr-2 pr-sm-0 pl-xl-0">
                        <div class="col-12">
                          <p class="location-text font-regular">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Start Location
                            <span class="mx-3 line"></span>
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            ABC Facility
                          </p>
                        </div>
                      </div>
                      <div class="row mt-3 mt-xl-4 align-items-end pl-2 pl-sm-3 pr-2 pr-sm-3 pr-lg-0 pl-xl-0">
                        <div class="col-sm-6">
                          <p class="location-text font-semi-bold mb-1">Per Seat Cose <span class="font-regular ml-3">$123</span></p>
                          <p class="location-text font-semi-bold mb-1">mm/dd/yyyy</p>
                          <p class="location-text font-semi-bold">00:00 <span class="yellow mx-2">-</span> 00:00</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right text-lg-left mt-3 mt-sm-0">
                          <a href="#_" class="trip-btn">
                          View Details
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0">
                <div class="view-trips-main">
                  <div class="row no-gutters">
                    <div class="col-xl-3">
                      <div class="img-box ml-3">
                        <img src="assets/images/trips-map-img.png" class="img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-xl-9">
                      <div class="row pl-3 pl-xl-0">
                        <div class="col-sm-5">
                          <h4 class="trip-title mt-3">ABC Trip</h4>
                        </div>
                        <div class="col-sm-7 text-right">
                          <h4 class="panding-payment">Payment Pending</h4>
                        </div>
                      </div>
                      <div class="row mt-2 pl-2 pl-sm-3 pr-2 pr-sm-0 pl-xl-0">
                        <div class="col-12">
                          <p class="location-text font-regular">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Start Location
                            <span class="mx-3 line"></span>
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            ABC Facility
                          </p>
                        </div>
                      </div>
                      <div class="row mt-3 mt-xl-4 align-items-end pl-2 pl-sm-3 pr-2 pr-sm-3 pr-lg-0 pl-xl-0">
                        <div class="col-sm-6">
                          <p class="location-text font-semi-bold mb-1">Per Seat Cose <span class="font-regular ml-3">$123</span></p>
                          <p class="location-text font-semi-bold mb-1">mm/dd/yyyy</p>
                          <p class="location-text font-semi-bold">00:00 <span class="yellow mx-2">-</span> 00:00</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right text-lg-left mt-3 mt-sm-0">
                          <a href="#_" class="trip-btn">
                          View Details
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-0 mb-md-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <div class="view-trips-main">
                  <div class="row no-gutters">
                    <div class="col-xl-3">
                      <div class="img-box ml-3">
                        <img src="assets/images/trips-map-img.png" class="img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-xl-9">
                      <div class="row pl-3 pl-xl-0">
                        <div class="col-sm-5">
                          <h4 class="trip-title mt-3">ABC Trip</h4>
                        </div>
                        <div class="col-sm-7 text-right">
                          <h4 class="panding-payment">Payment Pending</h4>
                        </div>
                      </div>
                      <div class="row mt-2 pl-2 pl-sm-3 pr-2 pr-sm-0 pl-xl-0">
                        <div class="col-12">
                          <p class="location-text font-regular">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Start Location
                            <span class="mx-3 line"></span>
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            ABC Facility
                          </p>
                        </div>
                      </div>
                      <div class="row mt-3 mt-xl-4 align-items-end pl-2 pl-sm-3 pr-2 pr-sm-3 pr-lg-0 pl-xl-0">
                        <div class="col-sm-6">
                          <p class="location-text font-semi-bold mb-1">Per Seat Cose <span class="font-regular ml-3">$123</span></p>
                          <p class="location-text font-semi-bold mb-1">mm/dd/yyyy</p>
                          <p class="location-text font-semi-bold">00:00 <span class="yellow mx-2">-</span> 00:00</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right text-lg-left mt-3 mt-sm-0">
                          <a href="#_" class="trip-btn">
                          View Details
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0">
                <div class="view-trips-main">
                  <div class="row no-gutters">
                    <div class="col-xl-3">
                      <div class="img-box ml-3">
                        <img src="assets/images/trips-map-img.png" class="img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-xl-9">
                      <div class="row pl-3 pl-xl-0">
                        <div class="col-sm-5">
                          <h4 class="trip-title mt-3">ABC Trip</h4>
                        </div>
                        <div class="col-sm-7 text-right">
                          <h4 class="panding-payment">Payment Pending</h4>
                        </div>
                      </div>
                      <div class="row mt-2 pl-2 pl-sm-3 pr-2 pr-sm-0 pl-xl-0">
                        <div class="col-12">
                          <p class="location-text font-regular">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Start Location
                            <span class="mx-3 line"></span>
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            ABC Facility
                          </p>
                        </div>
                      </div>
                      <div class="row mt-3 mt-xl-4 align-items-end pl-2 pl-sm-3 pr-2 pr-sm-3 pr-lg-0 pl-xl-0">
                        <div class="col-sm-6">
                          <p class="location-text font-semi-bold mb-1">Per Seat Cose <span class="font-regular ml-3">$123</span></p>
                          <p class="location-text font-semi-bold mb-1">mm/dd/yyyy</p>
                          <p class="location-text font-semi-bold">00:00 <span class="yellow mx-2">-</span> 00:00</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right text-lg-left mt-3 mt-sm-0">
                          <a href="#_" class="trip-btn">
                          View Details
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3 mb-md-0">
                <div class="view-trips-main">
                  <div class="row no-gutters">
                    <div class="col-xl-3">
                      <div class="img-box ml-3">
                        <img src="assets/images/trips-map-img.png" class="img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-xl-9">
                      <div class="row pl-3 pl-xl-0">
                        <div class="col-sm-5">
                          <h4 class="trip-title mt-3">ABC Trip</h4>
                        </div>
                        <div class="col-sm-7 text-right">
                          <h4 class="panding-payment">Payment Pending</h4>
                        </div>
                      </div>
                      <div class="row mt-2 pl-2 pl-sm-3 pr-2 pr-sm-0 pl-xl-0">
                        <div class="col-12">
                          <p class="location-text font-regular">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Start Location
                            <span class="mx-3 line"></span>
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            ABC Facility
                          </p>
                        </div>
                      </div>
                      <div class="row mt-3 mt-xl-4 align-items-end pl-2 pl-sm-3 pr-2 pr-sm-3 pr-lg-0 pl-xl-0">
                        <div class="col-sm-6">
                          <p class="location-text font-semi-bold mb-1">Per Seat Cose <span class="font-regular ml-3">$123</span></p>
                          <p class="location-text font-semi-bold mb-1">mm/dd/yyyy</p>
                          <p class="location-text font-semi-bold">00:00 <span class="yellow mx-2">-</span> 00:00</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right text-lg-left mt-3 mt-sm-0">
                          <a href="#_" class="trip-btn">
                          View Details
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0">
                <div class="view-trips-main">
                  <div class="row no-gutters">
                    <div class="col-xl-3">
                      <div class="img-box ml-3">
                        <img src="assets/images/trips-map-img.png" class="img-fluid w-100" alt="">
                      </div>
                    </div>
                    <div class="col-xl-9">
                      <div class="row pl-3 pl-xl-0">
                        <div class="col-sm-5">
                          <h4 class="trip-title mt-3">ABC Trip</h4>
                        </div>
                        <div class="col-sm-7 text-right">
                          <h4 class="panding-payment">Payment Pending</h4>
                        </div>
                      </div>
                      <div class="row mt-2 pl-2 pl-sm-3 pr-2 pr-sm-0 pl-xl-0">
                        <div class="col-12">
                          <p class="location-text font-regular">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Start Location
                            <span class="mx-3 line"></span>
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            ABC Facility
                          </p>
                        </div>
                      </div>
                      <div class="row mt-3 mt-xl-4 align-items-end pl-2 pl-sm-3 pr-2 pr-sm-3 pr-lg-0 pl-xl-0">
                        <div class="col-sm-6">
                          <p class="location-text font-semi-bold mb-1">Per Seat Cose <span class="font-regular ml-3">$123</span></p>
                          <p class="location-text font-semi-bold mb-1">mm/dd/yyyy</p>
                          <p class="location-text font-semi-bold">00:00 <span class="yellow mx-2">-</span> 00:00</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-right text-lg-left mt-3 mt-sm-0">
                          <a href="#_" class="trip-btn">
                          View Details
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mt-5">
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