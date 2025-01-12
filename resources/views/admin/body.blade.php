<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <!-- Total Products Card -->
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #2a2a2a; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <span class="mdi mdi-cube-outline" style="font-size: 40px; color: #00bcd4;"></span>
                        </div>
                        <h3 class="mb-0 text-white">{{$total_product}}</h3>
                        <h6 class="text-muted">Total Products</h6>
                    </div>
                </div>
            </div>

            <!-- Total Orders Card -->
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #2a2a2a; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <span class="mdi mdi-cart-outline" style="font-size: 40px; color: #f39c12;"></span>
                        </div>
                        <h3 class="mb-0 text-white">{{$total_order}}</h3>
                        <h6 class="text-muted">Total Orders</h6>
                    </div>
                </div>
            </div>

            <!-- Total Customers Card -->
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #2a2a2a; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <span class="mdi mdi-account-group-outline" style="font-size: 40px; color: #e74c3c;"></span>
                        </div>
                        <h3 class="mb-0 text-white">{{$total_user}}</h3>
                        <h6 class="text-muted">Total Customers</h6>
                    </div>
                </div>
            </div>

            <!-- Total Revenue Card -->
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #2a2a2a; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <span class="mdi mdi-cash" style="font-size: 40px; color: #2ecc71;"></span>
                        </div>
                        <h3 class="mb-0 text-white">Rs. {{$total_revenue}}</h3>
                        <h6 class="text-muted">Total Revenue</h6>
                    </div>
                </div>
            </div>

            <!-- Orders Delivered Card -->
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #2a2a2a; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <span class="mdi mdi-package-variant-closed" style="font-size: 40px; color: #1abc9c;"></span>
                        </div>
                        <h3 class="mb-0 text-white">{{$total_delivered}}</h3>
                        <h6 class="text-muted">Orders Delivered</h6>
                    </div>
                </div>
            </div>

            <!-- Orders Processing Card -->
            <!-- Orders Processing Card with mdi-progress-clock -->
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #2a2a2a; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <!-- Use mdi-progress-clock as the icon -->
                            <span class="mdi mdi-progress-clock" style="font-size: 40px; color: #f39c12;"></span>
                        </div>
                        <h3 class="mb-0 text-white">{{$total_processing}}</h3>
                        <h6 class="text-muted">Orders Processing</h6>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- Footer -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © https://github.com/gihantha</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a href="https://github.com/gihantha" target="_blank">Gihantha Kaveen</a> from EZ Shopper</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
