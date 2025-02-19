<div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, For All EZ Shopper Customers!</p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" style="width: 369px; height: 49px" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo2.svg    " alt="logo" style="width: 100px; height: 100px" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Gihantha Kaveen</h5>
                  <span>Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
{{--              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">--}}
{{--                <a href="#" class="dropdown-item preview-item">--}}
{{--                  <div class="preview-thumbnail">--}}
{{--                    <div class="preview-icon bg-dark rounded-circle">--}}
{{--                      <i class="mdi mdi-settings text-primary"></i>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="preview-item-content">--}}
{{--                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item preview-item">--}}
{{--                  <div class="preview-thumbnail">--}}
{{--                    <div class="preview-icon bg-dark rounded-circle">--}}
{{--                      <i class="mdi mdi-onepassword  text-info"></i>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="preview-item-content">--}}
{{--                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item preview-item">--}}
{{--                  <div class="preview-thumbnail">--}}
{{--                    <div class="preview-icon bg-dark rounded-circle">--}}
{{--                      <i class="mdi mdi-calendar-today text-success"></i>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="preview-item-content">--}}
{{--                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--              </div>--}}
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/redirect')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/view_product')}}">Add Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_product')}}">Show Products</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_category')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Category</span>
            </a>
          </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('order')}}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
                <span class="menu-title">Order</span>
            </a>
        </li>

        </ul>
      </nav>
