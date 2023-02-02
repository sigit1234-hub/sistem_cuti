<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Dashboard</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('Hrd') ?>">Info</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('Hrd') ?>">Hrd</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-layers float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Orders</h6>
                        <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                        <span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-paypal float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Revenue</h6>
                        <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                        <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Average Price</h6>
                        <h2 class="m-b-20">$<span data-plugin="counterup">15.9</span></h2>
                        <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-rocket float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Product Sold</h6>
                        <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                        <span class="label label-warning"> +89% </span> <span class="text-muted">Last year</span>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                

            <div class="col-12">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0">Alerts Examples</h4>

                                    <p class="text-muted m-b-30 font-13">
                                        A beautiful replacement for JavaScript's "alert"
                                    </p>

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="min-width:50%;">Alert Type</th>
                                            <th>Example</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="middle-align">Basic Example</td>
                                            <td>
                                                <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-basic">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="middle-align">A title with a text under</td>
                                            <td>
                                                <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-title">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">A success message!</td>
                                            <td>
                                                <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-success">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">A warning message, with a function attached to the "Confirm"-button...</td>
                                            <td>
                                                <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-warning">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">By passing a parameter, you can execute something else for "Cancel".</td>
                                            <td>
                                                <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-params">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">A message with custom Image Header</td>
                                            <td>
                                                <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-image">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">A message with auto close timer</td>
                                            <td>
                                                <button class="btn btn-custom waves-effect waves-light btn-sm" id="sa-close">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">A message with button primary</td>
                                            <td>
                                                <button class="btn btn-primary waves-effect waves-light btn-sm" id="primary-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">A message with button info</td>
                                            <td>
                                                <button class="btn btn-info waves-effect waves-light btn-sm" id="info-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">A message with button success</td>
                                            <td>
                                                <button class="btn btn-success waves-effect waves-light btn-sm" id="success-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">A message with button warning</td>
                                            <td>
                                                <button class="btn btn-warning waves-effect waves-light btn-sm" id="warning-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="middle-align">A message with button danger</td>
                                            <td>
                                                <button class="btn btn-danger waves-effect waves-light btn-sm" id="danger-alert">Click me</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->


            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-xs-12 col-lg-12 col-xl-7">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Inbox</h4>

                                <div class="inbox-widget nicescroll" style="height: 339px;">
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Chadengle</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">13:40 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Tomaslau</p>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">13:34 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">13:17 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text">Nice to meet you</p>
                                            <p class="inbox-item-date">12:20 PM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Shahedk</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">10:15 AM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Adhamdannaway</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">9:56 AM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Arashasghari</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">10:15 AM</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Joshaustin</p>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">9:56 AM</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

                                <p class="font-600 m-b-5">iMacs <span class="text-danger pull-right"><b>78%</b></span></p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                </div>
                            </div>

                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Monthly Sales</h4>

                                <p class="font-600 m-b-5">Macbooks <span class="text-success pull-right"><b>25%</b></span></p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Daily Sales</h4>

                                <p class="font-600 m-b-5">Mobiles <span class="text-warning pull-right"><b>75%</b></span></p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- end col-->

                <div class="col-xs-12 col-lg-12 col-xl-5">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Top Contracts</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-muted">Apple Technology</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Envato Pty Ltd.</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-danger">Unpaid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Dribbble LLC.</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Adobe Family</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Apple Technology</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-danger">Unpaid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Envato Pty Ltd.</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="label label-success">Paid</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div><!-- end col-->


            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->



</div>
<!-- End content-page -->