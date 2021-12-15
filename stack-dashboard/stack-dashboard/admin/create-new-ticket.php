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
                        <div class="card my-sm-5 my-0 mx-2">
                            <div class="card-content collapse show">
                                <div class="card-dashboard">
                                    <form action="#_" class="px-xl-5 px-lg-3 px-2 px-0">
                                        <div class="row">
                                            <div class="col-md-6 mt-2">
                                                <label for="" class="dash-label">Company</label>
                                                <select name="" id="" class="px-1 py-1 dash-input">
                                                    <option value="" selected disabled>Select Company</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <label for="" class="dash-label">Company User</label>
                                                <select name="" id="" class="px-1 py-1 dash-input">
                                                    <option value="" selected disabled>Select Company User</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <label for="" class="dash-label">Ticket Category</label>
                                                <select name="" id="" class="px-1 py-1 dash-input">
                                                    <option value="">Installation</option>
                                                    <option value="">Support</option>
                                                    <option value="">Question</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <label for="" class="dash-label">Priority</label>
                                                <select name="" id="" class="px-1 py-1 dash-input">
                                                    <option value="">Normal</option>
                                                    <option value="">ASAP</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <label for="" class="dash-label">Ticket Title</label>
                                                <input type="text" placeholder="" class="dash-input py-1 px-1">
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <label for="" class="dash-label">Followers</label>
                                                <input type="text" placeholder="" class="dash-input py-1 px-1">
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <label for="" class="dash-label">Workers</label>
                                                <input type="text" placeholder="" class="dash-input py-1 px-1">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <label for="" class="dash-label">Ticket Description</label>
                                                <textarea name="" id="" cols="30" rows="10" class="p-1 dash-input"></textarea>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <button class="site-btn px-3 py-1" type="button" data-toggle="modal" data-target=".ticketCreated">Create Ticket</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="modal fade ticketCreated" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content success-modal admin-modal">
            <div class="text-center mt-5">
                <h5 class="d-grey-text mt-2">Ticket has Been Created</h5>
                <button class="site-btn mt-2 mb-2 red-btn px-3 py-1" data-dismiss="modal" aria-label="Close">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>

