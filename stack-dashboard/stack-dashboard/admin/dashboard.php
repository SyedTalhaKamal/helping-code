<?php 
  $pg='dashboard';
  $title = "Dashboard";
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
            <div class="card ">
              <div class="card-content collapse show">
                <div class="card-dashboard">
                  <div class="row">
                    <div class="col-xl-3 mt-1 col-sm-6 col-12 w-100">
                      <div class="dash-card mb-0">												
                        <h5 class="d-grey-text p-lg semi-bold">Opened Tickets</h5>
                        <div class="d-sm-flex text-center mt-1 align-items-center justify-content-between">
                          <img src="images/tickets.png" alt="" class="img-fluid mt-1">
                          <h3 class="cyan-text semi-bold mt-1">316</h3>
                        </div>
										  </div>
                    </div>
                    <div class="col-xl-3 mt-1 col-sm-6 col-12 w-100">
                      <div class="dash-card mb-0">												
                        <h5 class="d-grey-text p-lg semi-bold">Closed Tickets</h5>
                        <div class="d-sm-flex text-center mt-1 align-items-center justify-content-between">
                          <img src="images/closed-tickets.png" alt="" class="img-fluid mt-1">
                          <h3 class="cyan-text semi-bold mt-1">52</h3>
                        </div>
										  </div>
                    </div>
                    <div class="col-xl-3 mt-1 col-sm-6 col-12 w-100">
                      <div class="dash-card mb-0">												
                        <h5 class="d-grey-text p-lg semi-bold">Total Company Users</h5>
                        <div class="d-sm-flex text-center mt-1 align-items-center justify-content-between">
                          <img src="images/users.png" alt="" class="img-fluid mt-1">
                          <h3 class="cyan-text semi-bold mt-1">232</h3>
                        </div>
										  </div>
                    </div>
                    <div class="col-xl-3 mt-1 col-sm-6 col-12 w-100">
                      <div class="dash-card mb-0">												
                        <h5 class="d-grey-text p-lg semi-bold">Average Response Time To Ticket</h5>
                        <div class="d-sm-flex text-center mt-1 align-items-center justify-content-between">
                          <img src="images/timer.png" alt="" class="img-fluid mt-1">
                          <h3 class="cyan-text semi-bold mt-1">52</h3>
                        </div>
										  </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 mt-1 col-sm-6 col-12 w-100">
                      <div class="dash-card mb-0">												
                        <h5 class="d-grey-text p-lg semi-bold">Total Users</h5>
                        <div class="d-sm-flex text-center mt-1 align-items-center justify-content-between">
                          <img src="images/users.png" alt="" class="img-fluid mt-1">
                          <h3 class="cyan-text semi-bold mt-1">316</h3>
                        </div>
										  </div>
                    </div>
                    <div class="col-xl-3 mt-1 col-sm-6 col-12 w-100">
                      <div class="dash-card mb-0">												
                        <h5 class="d-grey-text p-lg semi-bold">Total Workers</h5>
                        <div class="d-sm-flex text-center mt-1 align-items-center justify-content-between">
                          <img src="images/worker.png" alt="" class="img-fluid mt-1">
                          <h3 class="cyan-text semi-bold mt-1">52</h3>
                        </div>
										  </div>
                    </div>
                    <div class="col-xl-3 mt-1 col-sm-6 col-12 w-100">
                      <div class="dash-card mb-0">												
                        <h5 class="d-grey-text p-lg semi-bold">Total Tickets Count</h5>
                        <div class="d-sm-flex text-center mt-1 align-items-center justify-content-between">
                          <img src="images/count.png" alt="" class="img-fluid mt-1">
                          <h3 class="cyan-text semi-bold mt-1">232</h3>
                        </div>
										  </div>
                    </div>
                    <div class="col-xl-3 mt-1 col-sm-6 col-12 w-100">
                      <div class="dash-card mb-0">												
                        <h5 class="d-grey-text p-lg semi-bold">Average Complete Time To Ticket</h5>
                        <div class="d-sm-flex text-center mt-1 align-items-center justify-content-between">
                          <img src="images/timer.png" alt="" class="img-fluid mt-1">
                          <h3 class="cyan-text semi-bold mt-1">52</h3>
                        </div>
										  </div>
                    </div>
                  </div>
                  <div class="bottom tickets mt-2">
                      <div class="offset-md-9 col-lg-3 col-md-3 col-12 text-md-right text-center">
                        <div class="form-field">
                          <select class="site-input box-shadow" name="" id="" required="">
                              <option value="">2020</option>
                              <option value="">2019</option>
                              <option value="">2018</option>
                          </select>
                          <i class="fa fa-chevron-down right-icon" aria-hidden="true"></i>
                        </div>
                      </div>
                      

                    <div class="chart-main position-relative">
                      <div class="row">
                        <div class="col-xl-1 col-12">
                          <h4>Activities</h4>
                        </div>
                        <div class="col-12">
                          <div id="column-chart" class="height-400 echart-container"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 text-center">
                          <h3>Months</h3>
                        </div>
                      </div>
                    </div>
                    <img src="images/graph.png" alt="" class="img-fluid w-100">
                    <h5>Support Tickets Created Per Month</h5>
                    <img src="images/graph.png" alt="" class="img-fluid w-100">
                    <h5>Installation Tickets Created Per Month</h5>
                    <img src="images/graph.png" alt="" class="img-fluid w-100">
                    <h5>Activity Log</h5>
                    <div class="maain-tabble table-responsive">
                      <table class="table table-striped text-center table-bordered zero-configuration">
                          <thead>
                              <tr>
                                  <th>Activity Log</th>
                                  <th>Date</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</td>
                                  <td>mm/dd/yyyy</td>
                              </tr>
                              <tr>
                                  <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</td>
                                  <td>mm/dd/yyyy</td>
                              </tr>
                          </tbody>
                      </table>
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

<?php include('footer.php') ?>
