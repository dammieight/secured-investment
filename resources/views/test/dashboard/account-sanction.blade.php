@extends('test.layouts.dashboardApp')


@section('content')

    <!-- ============================================================== -->
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 pt-5 pb-5">
                        <div class="card card-body pb-5">
                            <h1 class="card-title mt-0 text-center text-danger">Account Sanctioned !!!</h1>
                            <p class="card-text text-center">Your account has been sanctioned. This is usually due to
                                failure to provide help to user(s) you have been merged to pay or you have disobeyed
                                Secured Investment rule(s). Sanction fee is <strong
                                    class="text-primary">&#8358;{{number_format(3000)}} </strong>only. Make payment now
                                to get full access to our investment services. Note that sanction fine attracts no
                                profit.</p>

                            <div class="text-center">
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-toggle="modal" data-target=".account-sanctioned-confirmation-modal">
                                    Pay Sanction Fine
                                </button>
                            </div>
                            <div class="modal fade account-sanctioned-confirmation-modal" tabindex="-1" role="dialog"
                                 aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0">Sanction Fine Confirmation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <div class="swal2-icon swal2-warning swal2-animate-warning-icon"
                                                     style="display: flex;"></div>
                                                <div class="swal2-header">
                                                    <h5><strong>Are you sure you want to pay sanction fine of <strong
                                                                class="text-primary">&#8358;{{number_format(3000)}} </strong>
                                                            to reactivate your account ? </strong></h5>
                                                </div>
                                                <div class="swal2-content" style="display: block;">You won't be able to
                                                    revert this!
                                                </div>
                                                <div class="swal2-actions">
                                                    <button type="button"
                                                            class="swal2-cancel swal2-styled btn-danger"
                                                            style="display: inline-block;"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="button"
                                                            class="swal2-confirm swal2-styled btn-success"
                                                            style="display: inline-block;">Yes, Proceed
                                                    </button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script>
                                © SecuredInvestment.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">

                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <!-- Settings -->
            <hr class="mt-0"/>
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked/>
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                           data-bsStyle="assets/css/bootstrap-dark.min.css"
                           data-appStyle="assets/css/app-dark.min.css"/>
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-5">
                    <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                           data-appStyle="assets/css/app-rtl.min.css"/>
                    <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                </div>
                <!-- Right bar overlay-->
                <div class="rightbar-overlay"></div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>

    <!-- Right bar overlay-->

    <div class="rightbar-overlay"></div>
@endsection
<!-- /Right-bar -->

















